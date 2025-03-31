@extends('layouts.guest')

@section('styles')
<link href="{{ asset('resources/css/business-services.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="business-service-hero">
    <div class="container mx-auto px-4 py-20 relative">
        <div class="hero-content" data-aos="fade-up" data-aos-duration="1000">
            <p class="welcome-text">Welcome</p>
            <h1 class="hero-title">
                DỊCH VỤ TRỢ LÝ CÁ NHÂN <br>
                & DOANH NGHIỆP
            </h1>
            <div class="hero-description">
                <p>Behind Office cung cấp giải pháp tối ưu cho những</p>
                <p>vấn đề hành chính, giấy tờ thủ tục, từ visa, hộ chiếu</p>
                <p>đến các thủ tục pháp lý phức tạp</p>
            </div>
            <div class="hero-buttons mt-6">
                <a href="{{ route('contact') }}" class="btn-contact">Liên hệ</a>
                <a href="#" class="btn-more">Xem thêm</a>
            </div>
        </div>
    </div>
</div>

<!-- Add more content sections here if needed -->
@endsection
