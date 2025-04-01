@extends('layouts.guest')

@section('styles')
<link href="{{ asset('resources/css/contact.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="contact-container">
    <div class="contact-intro">
        <h1 class="contact-main-title">BEHIND OFFICE</h1>
        <p class="contact-main-description">
            Tại Behind Office, chúng tôi cung cấp dịch vụ trợ lý chuyên nghiệp giúp doanh nghiệp và cá nhân tối ưu hóa công việc, giảm tải áp lực hành chính và nâng cao hiệu quả làm việc. Nếu bạn đang tìm kiếm một giải pháp linh hoạt bền vững và hiệu quả, hãy kết nối với chúng tôi ngay hôm nay!
        </p>
    </div>

    <div class="contact-image-section">
        <img src="{{ asset('assets/contact/Frame 133.png') }}" alt="Behind Office Building" class="contact-image">
        
        <div class="contact-info-box">
            <h2 class="info-box-title">BEHIND OFFICE</h2>
            <p class="info-box-description">
                Chúng tôi tin rằng một trợ lý chuyên nghiệp không chỉ giúp hoàn thành công việc mà còn tạo ra giá trị thực sự cho khách hàng. Sứ mệnh của chúng tôi là đồng hành cùng doanh nghiệp và cá nhân, giúp họ tối ưu hóa quy trình làm việc, giảm tải áp lực hành chính và tập trung vào những mục tiêu quan trọng nhất.
            </p>
            <div class="contact-details">
                <div class="contact-detail">
                    <strong>Trụ sở:</strong> Suncet Tower, 108 Nguyen Hoang, My Dinh, Nam Tu Liem, Hanoi, Vietnam
                </div>
                <div class="contact-detail">
                    <strong>Email:</strong> behindoffice@gmail.com
                </div>
                <div class="contact-detail">
                    <strong>Hotline:</strong> 878799866
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Add appear class to intro initially with a slight delay
        setTimeout(function() {
            document.querySelector('.contact-intro').classList.add('appear');
        }, 300);

        // Create Intersection Observer for the image section and info box
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('appear');
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.15
        });

        // Observe elements
        const elementsToObserve = [
            document.querySelector('.contact-image-section'),
            document.querySelector('.contact-info-box')
        ];

        elementsToObserve.forEach(element => {
            if (element) observer.observe(element);
        });
    });
</script>
@endsection
