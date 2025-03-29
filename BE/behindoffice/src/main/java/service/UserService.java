package service;

import dto.AuthResponseDto;
import dto.UserRequestDto;

public interface UserService {
    AuthResponseDto register(UserRequestDto request);

    AuthResponseDto login(UserRequestDto request);
}
