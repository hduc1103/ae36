package com.project.behindoffice.entity;

import com.fasterxml.jackson.annotation.JsonIgnore;
import lombok.AllArgsConstructor;
import lombok.Getter;
import lombok.NoArgsConstructor;
import lombok.Setter;
import org.springframework.data.annotation.Id;
import org.springframework.data.mongodb.core.mapping.Document;

import java.util.List;

@Document(collection = "users")
@Getter
@AllArgsConstructor
@NoArgsConstructor
@Setter
public class UserEntity {

    @Id
    private String id;

    private String username;

    @JsonIgnore
    private String password;

    private List<String> postIds;
}
