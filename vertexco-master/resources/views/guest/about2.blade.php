@extends('layouts.guest')

@section('styles')
<link href="{{ asset('resources/css/about.css') }}" rel="stylesheet">
<style>
    @media (max-width: 768px) {
        .about-content {
            padding: 0 15px;
        }
        
        .about-image {
            width: 100% !important;
        }
        
        .about-text {
            width: 100% !important;
            padding: 15px !important;
            margin-top: 50px;
        }
        
        .project-count {
            width: 70% !important;
            right: 0 !important;
        }
        
        .hex-item {
            margin: 10px auto !important;
        }
        
        .hexagon-grid {
            padding: 0 10px;
        }
        
        .consultation-content {
            padding-left: 15px !important;
            padding-right: 15px !important;
            margin-bottom: 30px;
        }
        
        .form-row.grid {
            grid-template-columns: 1fr !important;
        }
        
        .hex-row, .hex-row-offset {
            flex-direction: column;
            align-items: center;
            margin: 0;
        }
    }
    
    @media (max-width: 480px) {
        .project-count {
            width: 90% !important;
            right: 0 !important;
            left: 0 !important;
            margin: 0 auto;
        }
        
        .hero_section {
            height: 400px !important;
        }
        
        .hero_section h1 {
            font-size: 1.8rem !important;
        }
    }
</style>
@endsection

@section('content')
<div class="relative w-screen h-[600px] hero_section mb-20">
    <img src="{{ asset('assets/image3.png') }}" alt="Banner" class="absolute inset-0 w-full h-full object-cover">
    <div class="absolute inset-0 flex items-center justify-center">
        <h1 class="text-white text-4xl md:text-5xl font-bold">Về chúng tôi</h1>
    </div>
</div>
<!-- About Us Section -->
<section class="about-us py-16 bg-[#f8f9fa]">
    <div class="container-fluid p-0">
        <div class="about-content flex flex-col md:flex-row items-center">
            <!-- Image moved to left -->
            <div class="about-image w-full md:w-2/5 mb-8 md:mb-0 relative my-20" data-aos="fade-right" data-aos-duration="1000">
                <img src="{{ asset('assets/home/woman-with-headset-having-video-call-laptop 1.png') }}" alt="Behind Office Team" class="w-full h-auto">
                <!-- Project count box positioned below the image and extending beyond right edge -->
                <div class="project-count absolute -bottom-12 -right-10 bg-[#071B35] text-white py-4 px-6 rounded-md w-80 h-15 shadow-lg">
                    <!-- Icon on the top right -->
                    <div class="absolute -top-4 -right-4">
                        <img src="{{ asset('assets/home/Icon Box.png') }}" alt="Shield Icon" class="w-15 h-15">
                    </div>
                    <div class="flex items-center justify-start">
                        <div class="text">
                            <span class="font-bold text-xl">1200+</span> Dự án đã hoàn thành
                        </div>
                    </div>
                </div>
            </div>
            <div class="about-image w-full md:w-1/10 mb-8 md:mb-0 relative" data-aos="fade-right" data-aos-duration="1000">
                
            </div>
            <!-- Text content moved to right -->
            <div class="about-text w-full md:w-1/2 md:pr-40" data-aos="fade-left" data-aos-duration="1000">
                <h2 class="text-3xl font-bold text-[#1C1F35] mb-6">Chúng tôi là ai?</h2>
                <div class="text-gray-700 space-y-8">
                    <p>Behind Office là đơn vị chuyên cung cấp dịch vụ trợ lý chuyên nghiệp, hỗ trợ doanh nghiệp và cá nhân trong việc quản lý công việc, tối ưu hóa quy trình vận hành và nâng cao hiệu suất làm việc. Với sứ mệnh giúp khách hàng giảm tải áp lực hành chính, chúng tôi mang đến đội ngũ trợ lý giàu kinh nghiệm, linh hoạt và tận tâm, sẵn sàng đồng hành trong mọi khía cạnh của công việc</p>
                    <p>Với quy trình làm việc chuyên nghiệp, bảo mật thông tin tuyệt đối và giải pháp linh hoạt theo từng nhu cầu, Behind Office cam kết giúp khách hàng tối ưu thời gian, tập trung vào các mục tiêu quan trọng và phát triển kinh doanh bền vững. Chúng tôi không chỉ là trợ lý – mà còn là người đồng hành đáng tin cậy trên hành trình thành công của bạn!</p>
                    <p>Với quy trình làm việc chuyên nghiệp, bảo mật thông tin tuyệt đối và giải pháp linh hoạt theo từng nhu cầu, Behind Office cam kết giúp khách hàng tối ưu thời gian, tập trung vào các mục tiêu quan trọng và phát triển kinh doanh bền vững. Chúng tôi không chỉ là trợ lý – mà còn là người đồng hành đáng tin cậy trên hành trình thành công của bạn!</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Vision Section -->
<section class="vision-section py-16">
    <div class="container mx-auto px-4">
        <div class="vision-content text-center mb-16 md:pr-10 md:pl-10">
            <h2 class="text-3xl font-bold text-[#1C1F35] mb-6">Tầm nhìn</h2>
            <p class="text-gray-700 w-full mx-auto text-center">
                Tại Behind Office, chúng tôi hiểu rằng thời gian là tài sản quý giá nhất của bạn. Vì vậy, chúng tôi cung cấp dịch vụ trợ lý chuyên nghiệp giúp doanh nghiệp và cá nhân tối ưu hóa công việc, giảm tải áp lực hành chính và tập trung vào các mục tiêu quan trọng.
            </p>
        </div>
        <div class="vision-image" data-aos="fade-up" data-aos-duration="1000">
            <img src="{{ asset('assets/about/image (1).png') }}" alt="Vision" class="w-full h-auto rounded-lg">
        </div>
    </div>
</section>

<!-- Mission Section -->
<section class="mission-section py-16 bg-[#f8f9fa]">
    <div class="container mx-auto px-4">
        <div class="mission-content text-center mb-16 md:pr-10 md:pl-10">
            <h2 class="text-3xl font-bold text-[#1C1F35] mb-6">Sứ mệnh</h2>
            <p class="text-gray-700 w-full mx-auto text-center">
                Tại Behind Office, chúng tôi hiểu rằng thời gian là tài sản quý giá nhất của bạn. Vì vậy, chúng tôi cung cấp dịch vụ trợ lý chuyên nghiệp giúp doanh nghiệp và cá nhân tối ưu hóa công việc, giảm tải áp lực hành chính và tập trung vào các mục tiêu quan trọng.
            </p>
        </div>
        <div class="mission-image" data-aos="fade-up" data-aos-duration="1000">
            <img src="{{ asset('assets/about/pexels-fauxels-3183150 1.png') }}" alt="Mission" class="w-full h-auto rounded-lg">
        </div>
        <div class="mission-content text-center md:pr-10 md:pl-10 mt-10">
            <p class="text-gray-700 w-full mx-auto text-center">
            Behind Office cam kết mang đến dịch vụ trợ lý chuyên nghiệp, giúp cá nhân và doanh nghiệp tối ưu hóa công việc, tiết kiệm thời gian và nâng cao hiệu suất. Chúng tôi không chỉ hỗ trợ, mà còn đồng hành cùng khách hàng trong mọi thử thách, đảm bảo quy trình làm việc hiệu quả, bảo mật và linh hoạt nhất.
            </p>
        </div>
    </div>
</section>

<!-- Why Choose Behind Office Section -->
<section class="why-choose-section py-16">
    <div class="container mx-auto px-4">
        <div class="section-title text-center mb-16">
            <h2 class="text-3xl font-bold mx-auto">Tại sao lựa chọn Behind Office</h2>
        </div>
        
        <div class="hexagon-grid">
            <!-- Top Row -->
            <div class="hex-row">
                <!-- Nhanh chóng -->
                <div class="hex-item" data-aos="fade-up" data-aos-duration="800">
                    <div class="hex-content">
                        <img src="{{ asset('assets/about/iconHexa1.png') }}" alt="Nhanh chóng" class="hex-bg">
                        <div class="hex-overlay">
                            <h3>Nhanh chóng</h3>
                            <p>Behind Office xử lý nhanh mọi yêu cầu, không để phát sinh thêm, là giải pháp chuyên nghiệp hỗ trợ 24/7.</p>
                        </div>
                    </div>
                </div>
                
                <!-- Hiệu quả -->
                <div class="hex-item" data-aos="fade-up" data-aos-duration="800" data-aos-delay="100">
                    <div class="hex-content">
                        <img src="{{ asset('assets/about/iconHexa2.png') }}" alt="Hiệu quả" class="hex-bg">
                        <div class="hex-overlay">
                            <h3>Hiệu quả</h3>
                            <p>Behind Office cam kết kết quả tối ưu, tiến độ công việc nhanh chóng, tăng hiệu quả giảm chi phí.</p>
                        </div>
                    </div>
                </div>
                
                <!-- Uy tín -->
                <div class="hex-item" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                    <div class="hex-content">
                        <img src="{{ asset('assets/about/iconHexa3.png') }}" alt="Uy tín" class="hex-bg">
                        <div class="hex-overlay">
                            <h3>Uy tín</h3>
                            <p>Behind Office cam kết bảo mật hàng đầu, với đội ngũ chuyên môn đã làm việc với nhiều đối tác uy tín trong nước.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Bottom Row - Offset -->
            <div class="hex-row hex-row-offset" style="margin-top: -60px">
                <!-- Tiện lợi -->
                <div class="hex-item" data-aos="fade-up" data-aos-duration="800" data-aos-delay="300">
                    <div class="hex-content">
                        <img src="{{ asset('assets/about/iconHexa4.png') }}" alt="Tiện lợi" class="hex-bg">
                        <div class="hex-overlay">
                            <h3>Tiện lợi</h3>
                            <p>Đối tác chuyên nghiệp, phản hồi nhanh chóng, đem lại trải nghiệm dịch vụ tốt nhất.</p>
                        </div>
                    </div>
                </div>
                
                <!-- Tiết kiệm -->
                <div class="hex-item" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                    <div class="hex-content">
                        <img src="{{ asset('assets/about/iconHexa5.png') }}" alt="Tiết kiệm" class="hex-bg">
                        <div class="hex-overlay">
                            <h3>Tiết kiệm</h3>
                            <p>Tùy chỉnh dịch vụ theo nhu cầu, giúp doanh nghiệp và cá nhân tiết kiệm chi phí.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Consultation Form Section -->
<section class="consultation-form">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Left Content -->
            <div class="consultation-content" data-aos="fade-right" data-aos-duration="1000" style="padding-left: 100px;">
                <div class="consultation-label">
                    <span>TƯ VẤN VÀ BÁO GIÁ</span>
                </div>
                <h2 class="consultation-title">Phát triển doanh nghiệp mà không đánh đổi thời gian rảnh</h2>
                <p class="consultation-description">
                    Lorem ipsum dolor sit amet consectetur. Senectus nulla faucibus feugiat mi et mattis risus tortor. Elementum elementum scelerisque ac ac placerat eget ultrices. Sit ac varius commodo egestas.
                </p>
            </div>
            
            <!-- Right Form -->
            <div class="consultation-form-container" data-aos="fade-left" data-aos-duration="1000">
                <form class="consultation-form-fields">
                    <div class="form-row grid grid-cols-2 gap-4 mb-4">
                        <div class="form-group">
                            <input type="text" placeholder="Họ và tên" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="email" placeholder="Email" class="form-control">
                        </div>
                    </div>
                    
                    <div class="form-row grid grid-cols-2 gap-4 mb-4">
                        <div class="form-group">
                            <input type="tel" placeholder="Số điện thoại" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Tỉnh thành" class="form-control">
                        </div>
                    </div>
                    
                    <div class="form-row mb-4">
                        <div class="form-group">
                            <textarea rows="4" placeholder="Lời nhắn..." class="form-control"></textarea>
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <button type="submit" class="submit-btn">GỬI YÊU CẦU</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
