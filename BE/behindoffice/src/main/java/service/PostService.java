package service;

import entity.PostEntity;

import java.util.List;

public interface PostService {
    PostEntity createPost(String userId, String title, String content);

    List<PostEntity> getAllPosts();

    PostEntity getPostById(String postId);

    PostEntity updatePost(String postId, String newTitle, String newContent);

    void deletePost(String postId);
}
