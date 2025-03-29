package com.project.behindoffice.service;

import com.project.behindoffice.dto.AuthResponseDto;
import com.project.behindoffice.dto.UserRequestDto;

public interface UserService {
    AuthResponseDto register(UserRequestDto request);

    AuthResponseDto login(UserRequestDto request);
}
