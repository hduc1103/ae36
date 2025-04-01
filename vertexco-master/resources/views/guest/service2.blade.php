@extends('layouts.guest')

@section('styles')
<link href="{{ asset('resources/css/service.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="relative w-screen h-[600px] hero_section mb-20">
    <img src="{{ asset('assets/image3.png') }}" alt="Banner" class="absolute inset-0 w-full h-full object-cover">
    <div class="absolute inset-0 flex items-center justify-center">
        <h1 class="text-white text-4xl md:text-5xl font-bold">Dịch vụ</h1>
    </div>
</div>
<div class="what-we-do">


    <!-- Intro Section -->
    <div class="intro-section">
        <div class="intro-content">
            <h2 class="section-title">Chúng tôi làm gì?</h2>
            <p class="intro-description">
                Tại Behind Office, chúng tôi hiểu rằng thời gian là tài sản quý giá nhất của bạn. Vì vậy, chúng tôi cung cấp dịch vụ trợ lý chuyên nghiệp giúp doanh nghiệp và cá nhân tối ưu hóa công việc, giảm tải áp lực hành chính và tập trung vào các mục tiêu quan trọng
            </p>
        </div>
        <div class="intro-image">
            <img src="{{ asset('assets/service/Frame 427321334.png') }}" alt="Office Building">
        </div>
    </div>
    
    <!-- Services Container -->
    <div class="services-container">
        <!-- Service Item 1 -->
        <div id="service-01" class="service-item right">
            <div class="service-block image-block">
                <img src="{{ asset('assets/service/image1.png') }}" alt="Trợ lý hành chính giấy tờ">
            </div>
            <div class="service-block content-block">
                <div class="service-number">01</div>
                <div class="service-details">
                    <h3 class="text-3xl font-bold">Trợ lý hành chính giấy tờ</h3>
                    <ul>
                        <li>Soạn thảo, xử lý tài liệu và hợp đồng</li>
                        <li>Quản lý, lưu trữ hồ sơ và dữ liệu</li>
                        <li>Hỗ trợ kế toán cơ bản, lập báo cáo tài chính</li>
                        <li>Chuẩn bị tài liệu, hồ sơ cho các cuộc họp</li>
                        <li>Giao tiếp & Điều phối thông tin</li>
                        <li>Quản lý vật tư văn phòng</li>
                        <li>Hỗ trợ tổ chức sự kiện & hội họp</li>
                    </ul>
                    <a href="{{ route('services.detail', ['slug' => 'tro-ly-hanh-chinh']) }}" class="learn-more">Tìm hiểu thêm</a>
                </div>
            </div>
        </div>

        <!-- Service Item 2 -->
        <div id="service-02" class="service-item left">
            <div class="service-block image-block">
                <img src="{{ asset('assets/service/image2.png') }}" alt="Trợ lý kế toán công việc, booking">
            </div>
            <div class="service-block content-block">
                <div class="service-number">02</div>
                <div class="service-details">
                    <h3 class="text-3xl font-bold">Trợ lý kế toán công việc, booking</h3>
                    <ul>
                        <li>Quản lý lịch trình, sắp xếp cuộc họp</li>
                        <li>Theo dõi và nhắc nhở các nhiệm vụ quan trọng</li>
                        <li>Hỗ trợ tổ chức sự kiện, hội nghị</li>
                        <li>Đặt vé máy bay, khách sạn, phương tiện di chuyển</li>
                        <li>Quản lý truyền thông nội bộ</li>
                        <li>Hỗ trợ pháp lý cơ bản</li>
                        <li>Kiểm soát chi phí và ngân sách văn phòng</li>
                    </ul>
                    <a href="{{ route('services.detail', ['slug' => 'tro-ly-ke-toan']) }}" class="learn-more">Tìm hiểu thêm</a>
                </div>
            </div>
        </div>

        <!-- Service Item 3 -->
        <div id="service-03" class="service-item right">
            <div class="service-block image-block">
                <img src="{{ asset('assets/service/image3.png') }}" alt="Cung cấp thông tin, giải quyết các công việc khác">
            </div>
            <div class="service-block content-block">
                <div class="service-number">03</div>
                <div class="service-details">
                    <h3 class="text-3xl font-bold">Cung cấp thông tin, giải quyết các công việc khác</h3>
                    <ul>
                        <li>Quản lý lịch trình, sắp xếp cuộc họp</li>
                        <li>Theo dõi và nhắc nhở các nhiệm vụ quan trọng</li>
                        <li>Hỗ trợ tổ chức sự kiện, hội nghị</li>
                        <li>Đặt vé máy bay, khách sạn, phương tiện di chuyển</li>
                        <li>Hỗ trợ giám đốc hoặc quản lý cấp cao</li>
                        <li>Hỗ trợ khách hàng và đối tác</li>
                        <li>Hỗ trợ pháp lý cơ bản</li>
                    </ul>
                    <a href="{{ route('services.detail', ['slug' => 'giai-quyet-cong-viec']) }}" class="learn-more">Tìm hiểu thêm</a>
                </div>
            </div>
        </div>

        <!-- Service Item 4 -->
        <div id="service-04" class="service-item left">
            <div class="service-block image-block">
                <img src="{{ asset('assets/service/image4.png') }}" alt="Trợ lý hành chính văn phòng">
            </div>
            <div class="service-block content-block">
                <div class="service-number">04</div>
                <div class="service-details">
                    <h3 class="text-3xl font-bold">Trợ lý hành chính văn phòng</h3>
                    <ul>
                        <li>Quản lý văn phòng phẩm, thiết bị làm việc</li>
                        <li>Tiếp nhận và xử lý thư từ, email công ty</li>
                        <li>Hỗ trợ vận hành văn phòng, đảm bảo môi trường làm việc hiệu quả</li>
                        <li>Quản lý, lưu trữ hồ sơ và dữ liệu</li>
                        <li>Hỗ trợ kế toán cơ bản, lập báo cáo tài chính</li>
                    </ul>
                    <a href="{{ route('services.detail', ['slug' => 'tro-ly-van-phong']) }}" class="learn-more">Tìm hiểu thêm</a>
                </div>
            </div>
        </div>

        <!-- Service Item 5 -->
        <div id="service-05" class="service-item right">
            <div class="service-block image-block">
                <img src="{{ asset('assets/service/image5.png') }}" alt="Giao hàng và văn phòng">
            </div>
            <div class="service-block content-block">
                <div class="service-number">05</div>
                <div class="service-details">
                    <h3 class="text-3xl font-bold">Giao hàng và văn phòng</h3>
                    <ul>
                        <li>Giám sát hoạt động của gian hàng, đảm bảo tuân thủ quy trình làm việc</li>
                        <li>Quản lý hàng hóa, kiểm kê sản phẩm, báo cáo tình trạng tồn kho</li>
                        <li>Quản lý văn phòng phẩm, đặt hàng khi cần</li>
                        <li>Kiểm soát chi phí vận hành văn phòng, đề xuất các giải pháp tiết kiệm chi phí</li>
                        <li>Hỗ trợ tổ chức hội thảo, sự kiện nội bộ tại văn phòng</li>
                    </ul>
                    <a href="{{ route('services.detail', ['slug' => 'giao-hang-van-phong']) }}" class="learn-more">Tìm hiểu thêm</a>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        setTimeout(function() {
            document.querySelector('.intro-image').classList.add('appear');
        }, 300);

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

        const serviceItems = document.querySelectorAll('.service-item');
        serviceItems.forEach(item => {
            observer.observe(item);
        });
    });
</script>
@endsection
