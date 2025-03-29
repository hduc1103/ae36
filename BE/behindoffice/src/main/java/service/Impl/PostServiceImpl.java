package service.Impl;


import entity.PostEntity;
import entity.UserEntity;
import jakarta.persistence.EntityNotFoundException;
import org.springframework.data.domain.Sort;
import org.springframework.stereotype.Service;
import repository.PostRepository;
import repository.UserRepository;
import service.PostService;

import java.time.LocalDateTime;
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
                .orElseThrow(() -> new EntityNotFoundException("User not found"));

        PostEntity post = new PostEntity();
        post.setTitle(title);
        post.setContent(content);
        post.setCreatedAt(LocalDateTime.now());
        post.setCreator(creator);

        return postRepository.save(post);
    }

    @Override
    public List<PostEntity> getAllPosts() {
        return postRepository.findAll(Sort.by(Sort.Direction.DESC, "createdAt"));
    }

    @Override
    public PostEntity getPostById(String postId) {
        return postRepository.findById(postId)
                .orElseThrow(() -> new EntityNotFoundException("Post not found"));
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
        if (!postRepository.existsById(postId)) {
            throw new EntityNotFoundException("Post not found");
        }
        postRepository.deleteById(postId);
    }
}
