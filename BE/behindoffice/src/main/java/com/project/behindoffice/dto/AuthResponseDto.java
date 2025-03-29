package com.project.behindoffice.dto;

import com.project.behindoffice.entity.UserEntity;
import lombok.AllArgsConstructor;
import lombok.Getter;

@Getter
@AllArgsConstructor
public class AuthResponseDto {
    private String username;
    private String token;
}
