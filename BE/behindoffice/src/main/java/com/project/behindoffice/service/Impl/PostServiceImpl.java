package com.project.behindoffice.service.Impl;

import com.project.behindoffice.entity.PostEntity;
import com.project.behindoffice.entity.UserEntity;
import org.springframework.data.domain.Sort;
import org.springframework.stereotype.Service;
import com.project.behindoffice.repository.PostRepository;
import com.project.behindoffice.repository.UserRepository;
import com.project.behindoffice.service.PostService;

import java.time.LocalDateTime;
import java.util.ArrayList;
import java.util.List;

@Service
public class PostServiceImpl implements PostService {

    private final PostRepository postRepository;
    private final UserRepository userRepository;

    public PostServiceImpl(PostRepository postRepository, UserRepository userRepository) {
        this.postRepository = postRepository;
        this.userRepository = userRepository;
    }

    @Override
    public PostEntity createPost(String userId, String title, String content) {
        UserEntity creator = userRepository.findById(userId)
                .orElseThrow(() -> new RuntimeException("User not found"));

        PostEntity post = new PostEntity();
        post.setTitle(title);
        post.setContent(content);
        post.setCreatedAt(LocalDateTime.now());
        post.setCreatorId(userId);

        PostEntity savedPost = postRepository.save(post);

        List<String> postIds = creator.getPostIds();
        if (postIds == null) postIds = new ArrayList<>();
        postIds.add(savedPost.getId());
        creator.setPostIds(postIds);

        userRepository.save(creator);

        return savedPost;
    }

    @Override
    public List<PostEntity> getAllPosts() {
        return postRepository.findAll(Sort.by(Sort.Direction.DESC, "createdAt"));
    }

    @Override
    public PostEntity getPostById(String postId) {
        return postRepository.findById(postId)
                .orElseThrow(() -> new RuntimeException("Post not found"));
    }

    @Override
    public PostEntity updatePost(String postId, String newTitle, String newContent) {
        PostEntity post = getPostById(postId);
        post.setTitle(newTitle);
        post.setContent(newContent);
        return postRepository.save(post);
    }

    @Override
    public void deletePost(String postId) {
        PostEntity post = postRepository.findById(postId)
                .orElseThrow(() -> new RuntimeException("Post not found"));

        UserEntity user = userRepository.findById(post.getCreatorId())
                .orElseThrow(() -> new RuntimeException("User not found"));

        List<String> postIds = user.getPostIds();
        if (postIds != null) {
            postIds.remove(postId);
            user.setPostIds(postIds);
            userRepository.save(user);
        }

        postRepository.deleteById(postId);
    }
}
