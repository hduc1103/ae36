@extends('layouts.guest')

@section('styles')
<link href="{{ asset('resources/css/service.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="service-detail-page bo-service-detail-wrapper">

    <!-- Hero Section -->
    <div class="bo-service-detail-hero relative">
        <img src="{{ asset('assets/image3.png') }}" alt="Banner" class="absolute inset-0 w-full h-full object-cover">
        <div class="absolute inset-0 flex items-center justify-center">
            <h1 class="text-white text-4xl font-bold">Dịch vụ</h1>
        </div>
    </div>

    <!-- Main Detail Section -->
    <div class="bo-service-detail-content container mx-auto px-4 py-16">
        <div class="flex flex-col md:flex-row gap-8 items-start">
            <!-- Image -->
            <div class="bo-service-detail-image w-full md:w-1/2">
                <img src="{{ asset($service['image']) }}" alt="{{ $service['title'] }}" class="rounded-lg w-full h-auto shadow-md">
            </div>

            <!-- Text Content -->
            <div class="bo-service-detail-text w-full md:w-1/2">
                <h2 class="text-3xl font-bold mb-4">{{ $service['title'] }}</h2>
                <p class="text-gray-700 leading-relaxed whitespace-pre-line mb-6">{{ $service['full_description'] }}</p>
                <a href="{{ route('contact') }}" class="bo-service-detail-button">
                    Nhận báo giá
                </a>
            </div>
        </div>
    </div>

    <!-- Why Choose Us Section -->
    <div class="bo-service-detail-features bg-[#0066b2] py-16 text-white relative overflow-hidden">
    <div class="container mx-auto px-4">
        <h2 class="text-3xl font-bold text-center mb-12">Tại sao lựa chọn Behind Office</h2>

        <div class="bo-feature-hex-grid">
            @php
                $features = [
                    ['title' => 'Nhanh chóng', 'desc' => 'Behind Office tối ưu dịch vụ, phản hồi nhanh, hoàn thành công việc sớm nhất. Đội ngũ chuyên nghiệp hỗ trợ 24/7.', 'image' => 'assets/why1.png'],
                    ['title' => 'Hiệu quả', 'desc' => 'Behind Office cam kết kết quả tốt ưu, đáp ứng mong muốn khách hàng. Giải pháp chính xác, tăng hiệu quả, giảm rủi ro.', 'image' => 'assets/why2.png'],
                    ['title' => 'Uy tín', 'desc' => 'Behind Office luôn đặt khách hàng lên hàng đầu, với đội ngũ chuyên môn đa lĩnh vực, sẵn sàng hỗ trợ bạn mọi lúc.', 'image' => 'assets/why3.png'],
                    ['title' => 'Tiện lợi', 'desc' => 'Đội ngũ chuyên nghiệp, phản hồi nhanh chóng, đảm bảo trải nghiệm dịch vụ tốt nhất.', 'image' => 'assets/why4.png'],
                    ['title' => 'Tiết kiệm', 'desc' => 'Tùy chỉnh dịch vụ theo nhu cầu, giúp doanh nghiệp vận hành trơn tru và tiết kiệm chi phí.', 'image' => 'assets/why5.png'],
                ];
            @endphp

            @foreach($features as $item)
                <div class="bo-hex-card" style="background-image: url('{{ asset($item['image']) }}');">
                    <div class="bo-hex-overlay">
                        <h4 class="bo-hex-title">{{ $item['title'] }}</h4>
                        <p class="bo-hex-desc">{{ $item['desc'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>


    <!-- Other Services Section -->
    <div class="bo-service-detail-other">
        <div class="container mx-auto px-4">
            <h2 class="text-2xl font-bold text-center mb-10">Dịch vụ khác</h2>

            <div class="bo-other-grid">
                @php
                    $otherServices = [
                        [
                            'slug' => 'tro-ly-ke-toan',
                            'title' => 'Trợ lý kế toán công việc, booking',
                            'image' => 'assets/service/image2.png',
                        ],
                        [
                            'slug' => 'giai-quyet-cong-viec',
                            'title' => 'Cung cấp thông tin, giải quyết các công việc khác',
                            'image' => 'assets/service/image3.png',
                        ],
                        [
                            'slug' => 'tro-ly-van-phong',
                            'title' => 'Trợ lý hành chính văn phòng',
                            'image' => 'assets/service/image4.png',
                        ],
                    ];
                @endphp

                @foreach($otherServices as $item)
                <div class="bo-other-card">
    <div class="w-full aspect-[4/3] overflow-hidden rounded-t-lg">
        <img src="{{ asset($item['image']) }}" alt="{{ $item['title'] }}" class="w-full h-full object-cover">
    </div>
    <div class="bo-other-card-content p-4">
        <h3 class="font-semibold text-lg mb-2">{{ $item['title'] }}</h3>
        <a href="{{ route('services.detail', ['slug' => $item['slug']]) }}" class="text-blue-600 hover:underline">Tìm hiểu thêm</a>
    </div>
</div>

                @endforeach
            </div>
        </div>
    </div>

</div>
@endsection
