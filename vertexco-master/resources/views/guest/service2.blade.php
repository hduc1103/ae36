@extends('layouts.guest')

@section('styles')
<link href="{{ asset('resources/css/service.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="what-we-do">
<div class="relative w-screen h-[400px] hero_section">
    <img src="{{ asset('assets/image3.png') }}" alt="Banner" class="absolute inset-0 w-full h-full object-cover">
    <div class="absolute inset-0 flex items-center justify-center">
        <h1 class="text-white text-4xl md:text-5xl font-bold">Dịch vụ</h1>
    </div>
</div>

    <!-- Intro Section -->
    <div class="intro-section">
        <div class="intro-content">
            <h2 class="section-title">Chúng tôi làm gì?</h2>
            <p class="intro-description">
                Behind Office cung cấp các dịch vụ trợ lý ảo chuyên nghiệp, giúp doanh nghiệp tối ưu hóa quy trình làm việc và nâng cao hiệu quả hoạt động một cách toàn diện.
            </p>
        </div>
        <div class="intro-image">
            <img src="{{ asset('assets/service/Frame 427321334.png') }}" alt="Office Building">
        </div>
    </div>
    
    <!-- Services Container -->
    <div class="services-container">
        <!-- Service Item 1 -->
        <div id="service-01" class="service-item left">
            <div class="service-block image-block">
                <img src="{{ asset('assets/service/image1.png') }}" alt="Trợ lý hành chính giấy tờ">
            </div>
            <div class="service-block content-block">
                <div class="service-number">01</div>
                <div class="service-details">
                    <h3>Trợ lý hành chính giấy tờ</h3>
                    <ul>
                        <li>Lưu trữ và quản lý tài liệu</li>
                        <li>Quản lý lịch trình và cuộc họp</li>
                        <li>Soạn thảo và xử lý văn bản</li>
                        <li>Quản lý email và liên lạc</li>
                        <li>Lập báo cáo và thống kê</li>
                    </ul>
                    <a href="{{ route('services.detail', ['slug' => 'tro-ly-hanh-chinh']) }}" class="learn-more">Tìm hiểu thêm</a>
                </div>
            </div>
        </div>

        <!-- Service Item 2 -->
        <div id="service-02" class="service-item right">
            <div class="service-block image-block">
                <img src="{{ asset('assets/service/image2.png') }}" alt="Trợ lý kế toán công việc, booking">
            </div>
            <div class="service-block content-block">
                <div class="service-number">02</div>
                <div class="service-details">
                    <h3>Trợ lý kế toán công việc, booking</h3>
                    <ul>
                        <li>Quản lý thu chi</li>
                        <li>Lập và theo dõi hóa đơn</li>
                        <li>Đối soát số liệu</li>
                        <li>Quản lý công nợ</li>
                        <li>Báo cáo tài chính</li>
                    </ul>
                    <a href="{{ route('services.detail', ['slug' => 'tro-ly-ke-toan']) }}" class="learn-more">Tìm hiểu thêm</a>
                </div>
            </div>
        </div>

        <!-- Service Item 3 -->
        <div id="service-03" class="service-item left">
            <div class="service-block image-block">
                <img src="{{ asset('assets/service/image3.png') }}" alt="Cung cấp thông tin, giải quyết các công việc khác">
            </div>
            <div class="service-block content-block">
                <div class="service-number">03</div>
                <div class="service-details">
                    <h3>Cung cấp thông tin, giải quyết các công việc khác</h3>
                    <ul>
                        <li>Nghiên cứu và thu thập thông tin</li>
                        <li>Phân tích và tổng hợp dữ liệu</li>
                        <li>Đề xuất giải pháp</li>
                        <li>Theo dõi và báo cáo tiến độ</li>
                        <li>Hỗ trợ ra quyết định</li>
                    </ul>
                    <a href="{{ route('services.detail', ['slug' => 'giai-quyet-cong-viec']) }}" class="learn-more">Tìm hiểu thêm</a>
                </div>
            </div>
        </div>

        <!-- Service Item 4 -->
        <div id="service-04" class="service-item right">
            <div class="service-block image-block">
                <img src="{{ asset('assets/service/image4.png') }}" alt="Trợ lý hành chính văn phòng">
            </div>
            <div class="service-block content-block">
                <div class="service-number">04</div>
                <div class="service-details">
                    <h3>Trợ lý hành chính văn phòng</h3>
                    <ul>
                        <li>Quản lý văn phòng phẩm</li>
                        <li>Sắp xếp và lưu trữ tài liệu</li>
                        <li>Hỗ trợ tổ chức sự kiện</li>
                        <li>Điều phối công việc</li>
                        <li>Quản lý cơ sở vật chất</li>
                    </ul>
                    <a href="{{ route('services.detail', ['slug' => 'tro-ly-van-phong']) }}" class="learn-more">Tìm hiểu thêm</a>
                </div>
            </div>
        </div>

        <!-- Service Item 5 -->
        <div id="service-05" class="service-item left">
            <div class="service-block image-block">
                <img src="{{ asset('assets/service/image5.png') }}" alt="Giao hàng và văn phòng">
            </div>
            <div class="service-block content-block">
                <div class="service-number">05</div>
                <div class="service-details">
                    <h3>Giao hàng và văn phòng</h3>
                    <ul>
                        <li>Quản lý đơn hàng</li>
                        <li>Theo dõi vận chuyển</li>
                        <li>Xử lý khiếu nại</li>
                        <li>Báo cáo tình trạng</li>
                        <li>Tối ưu quy trình giao hàng</li>
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
