package controller;

import entity.PostEntity;
import entity.UserEntity;
import org.springframework.http.ResponseEntity;
import org.springframework.security.core.annotation.AuthenticationPrincipal;
import org.springframework.web.bind.annotation.*;
import service.Impl.PostServiceImpl;

import java.util.List;

@RestController
@RequestMapping("/posts")
public class PostController {

    private final PostServiceImpl postServiceImpl;

    public PostController(PostServiceImpl postServiceImpl) {
        this.postServiceImpl = postServiceImpl;
    }

    @GetMapping
    public ResponseEntity<List<PostEntity>> getAllPosts() {
        List<PostEntity> posts = postServiceImpl.getAllPosts();
        return ResponseEntity.ok(posts);
    }

    @GetMapping("/{id}")
    public ResponseEntity<PostEntity> getPostById(@PathVariable String id, @AuthenticationPrincipal UserEntity currentUser) {
        return ResponseEntity.ok(postServiceImpl.getPostById(id));
    }

    @PostMapping
    public ResponseEntity<PostEntity> createPost(
            @RequestParam String userId,
            @RequestParam String title,
            @RequestParam String content,
            @AuthenticationPrincipal UserEntity currentUser) {
        PostEntity newPost = postServiceImpl.createPost(userId, title, content);
        return ResponseEntity.ok(newPost);
    }

    @PutMapping("/{id}")
    public ResponseEntity<PostEntity> updatePost(
            @PathVariable String id,
            @RequestParam String title,
            @RequestParam String content,
            @AuthenticationPrincipal UserEntity currentUser) {
        PostEntity updatedPost = postServiceImpl.updatePost(id, title, content);
        return ResponseEntity.ok(updatedPost);
    }

    @DeleteMapping("/{id}")
    public ResponseEntity<Void> deletePost(@PathVariable String id, @AuthenticationPrincipal UserEntity currentUser) {
        postServiceImpl.deletePost(id);
        return ResponseEntity.noContent().build();
    }
}
