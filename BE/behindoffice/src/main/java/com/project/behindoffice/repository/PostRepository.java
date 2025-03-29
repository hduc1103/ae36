package com.project.behindoffice.repository;

import com.project.behindoffice.entity.PostEntity;
import org.springframework.data.mongodb.repository.MongoRepository;

public interface PostRepository extends MongoRepository<PostEntity, String> {

}
