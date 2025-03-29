package com.project.behindoffice.controller;

import com.project.behindoffice.dto.AuthResponseDto;
import com.project.behindoffice.dto.UserRequestDto;
import org.springframework.http.ResponseEntity;
import org.springframework.web.bind.annotation.*;
import com.project.behindoffice.service.Impl.UserServiceImpl;

@RestController
@RequestMapping("/users")
public class UserController {

    private final UserServiceImpl userServiceImpl;

    public UserController(UserServiceImpl userServiceImpl) {
        this.userServiceImpl = userServiceImpl;
    }

    @PostMapping("/register")
    public ResponseEntity<AuthResponseDto> register(@RequestBody UserRequestDto request) {
        AuthResponseDto response = userServiceImpl.register(request);
        return ResponseEntity.ok(response);
    }

    @PostMapping("/login")
    public ResponseEntity<AuthResponseDto> login(@RequestBody UserRequestDto request) {
        AuthResponseDto response = userServiceImpl.login(request);
        return ResponseEntity.ok(response);
    }
}
