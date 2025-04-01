@extends('layouts.guest')

@section('styles')
<link href="{{ asset('resources/css/about.css') }}" rel="stylesheet">
@endsection

@section('content')
<!-- About Us Section -->
<section class="about-us py-16 bg-[#f8f9fa]">
    <div class="container-fluid p-0">
        <div class="about-content flex flex-col md:flex-row items-center">
            <!-- Image moved to left -->
            <div class="about-image w-full md:w-1/2 relative" data-aos="fade-right" data-aos-duration="1000">
                <img src="{{ asset('assets/home/woman-with-headset-having-video-call-laptop 1.png') }}" alt="Behind Office Team" class="w-full h-auto">
                <!-- Project count box positioned below the image and extending beyond right edge -->
                <div class="project-count absolute -bottom-12 right-0 bg-[#071B35] text-white py-4 px-6 rounded-md w-80 shadow-lg">
                    <!-- Icon on the top right -->
                    <div class="absolute -top-4 -right-4">
                        <img src="{{ asset('assets/home/Icon Box.png') }}" alt="Shield Icon" class="w-12 h-12">
                    </div>
                    <div class="flex items-center justify-start">
                        <div class="text">
                            <span class="font-bold text-xl">1200+</span> Dự án đã hoàn thành
                        </div>
                    </div>
                </div>
            </div>
            <!-- Text content moved to right -->
            <div class="about-text w-full md:w-1/2 md:pl-16" data-aos="fade-left" data-aos-duration="1000">
                <div class="story-tag bg-[#3498db] text-white inline-block px-6 py-2 rounded-lg mb-4">
                    STORY
                </div>
                <h2 class="text-3xl font-bold text-[#1C1F35] mb-6">Chúng tôi là ai?</h2>
                <div class="text-gray-700 space-y-4">
                    <p>Behind Office là đơn vị chuyên cung cấp dịch vụ trợ lý chuyên nghiệp, hỗ trợ doanh nghiệp và cá nhân trong việc quản lý công việc, tối ưu hóa quy trình văn hành và nâng cao hiệu suất làm việc. Với sự mềm giúp khách hàng giảm tải áp lực hành chính, chúng tôi mang đến đội ngũ trợ lý giàu kinh nghiệm, linh hoạt và tận tâm, sẵn sàng đồng hành trong mọi khía cạnh của công việc.</p>
                    <p>Với quy trình làm việc chuyên nghiệp, bảo mật thông tin tuyệt đối và giải pháp linh hoạt theo từng nhu cầu, Behind Office cam kết giúp khách hàng tiết kiệm thời gian, tập trung vào các mục tiêu quan trọng và phát triển kinh doanh bền vững.</p>
                    <p>Chúng tôi không chỉ là trợ lý – mà còn là người đồng hành đáng tin cậy trên hành trình thành công của bạn!</p>
                </div>
                <div class="about-action mt-8">
                    <a href="{{ route('contact') }}" class="bg-[#3498db] text-white px-6 py-3 rounded-lg hover:bg-blue-600 transition duration-300">Liên hệ</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Vision Section -->
<section class="vision-section py-16">
    <div class="container mx-auto px-4">
        <div class="vision-content text-center mb-16">
            <h2 class="text-3xl font-bold text-[#1C1F35] mb-6">Tầm nhìn</h2>
            <p class="text-gray-700 max-w-4xl mx-auto">
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
        <div class="mission-content text-center mb-16">
            <h2 class="text-3xl font-bold text-[#1C1F35] mb-6">Sứ mệnh</h2>
            <p class="text-gray-700 max-w-4xl mx-auto">
                Tại Behind Office, chúng tôi hiểu rằng thời gian là tài sản quý giá nhất của bạn. Vì vậy, chúng tôi cung cấp dịch vụ trợ lý chuyên nghiệp giúp doanh nghiệp và cá nhân tối ưu hóa công việc, giảm tải áp lực hành chính và tập trung vào các mục tiêu quan trọng.
            </p>
        </div>
        <div class="mission-image" data-aos="fade-up" data-aos-duration="1000">
            <img src="{{ asset('assets/about/pexels-fauxels-3183150 1.png') }}" alt="Mission" class="w-full h-auto rounded-lg">
        </div>
    </div>
</section>
@endsection
