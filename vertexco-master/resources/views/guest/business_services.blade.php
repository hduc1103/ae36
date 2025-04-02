@extends('layouts.guest')

@section('styles')
<link href="{{ asset('resources/css/business-services.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="business-service-hero">
    <div class="container mx-auto px-40 py-20 relative">
    <!-- 
    This div creates a container for the hero section content with:
    - container: Sets max-width and centers content
    - mx-auto: Centers the container horizontally
    - px-4: Adds horizontal padding of 1rem (16px)
    - py-20: Adds vertical padding of 5rem (80px) 
    - relative: Sets position:relative for absolute positioning of children
    -->
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

<!-- Our Services Section -->
<section class="our-services py-16">
    <div class="container mx-auto px-4">
        <div class="services-header flex justify-between items-center mb-8">
            <h2 class="section-title text-2xl md:text-3xl font-bold text-[#1C1F35]">Dịch vụ của chúng tôi</h2>
            <a href="#" class="quote-btn bg-[#3498db] text-white px-8 py-3 rounded flex items-center whitespace-nowrap w-44 justify-center">
                <img src="{{ asset('assets/home/Vector.png') }}" alt="Quote Icon" class="w-5 h-5 mr-2">
                Nhận báo giá
            </a>
        </div>

        <!-- Horizontal scrollable services -->
        <div class="services-container relative">
            <div class="services-slider overflow-x-auto pb-6">
                <div class="services-track flex space-x-6" style="min-width: max-content;">
                    <!-- Service 1 -->
                    <div class="service-card" data-aos="fade-up" data-aos-delay="100">
                        <div class="service-card-frame">
                            <div class="service-image-wrapper">
                                <img src="{{ asset('assets/home/charming-ethnic-businesswoman-using-laptop 1.png') }}" alt="Trợ lý hành chính giấy tờ" class="service-image">
                                <div class="service-overlay">
                                    <div class="service-content">
                                        <p class="service-description">Giúp doanh nghiệp tiết kiệm thời gian và tối ưu quy trình làm việc. Chúng tôi hỗ trợ soạn thảo, xử lý, lưu trữ và quản lý hồ sơ...</p>
                                        <a href="#" class="service-btn">Xem thêm</a>
                                    </div>
                                </div>
                            </div>
                            <div class="service-title-container">
                                <h3 class="service-title">Trợ lý hành chính giấy tờ</h3>
                            </div>
                        </div>
                    </div>

                    <!-- Service 2 -->
                    <div class="service-card" data-aos="fade-up" data-aos-delay="200">
                        <div class="service-card-frame">
                            <div class="service-image-wrapper">
                                <img src="{{ asset('assets/home/side-view-smiley-business-woman 1.png') }}" alt="Trợ lý sắp xếp công việc" class="service-image">
                                <div class="service-overlay">
                                    <div class="service-content">
                                        <p class="service-description">Chúng tôi giúp bạn tổ chức lịch trình, quản lý cuộc họp, và điều phối công việc hiệu quả để tối ưu hóa thời gian và năng suất.</p>
                                        <a href="#" class="service-btn">Xem thêm</a>
                                    </div>
                                </div>
                            </div>
                            <div class="service-title-container">
                                <h3 class="service-title">Trợ lý sắp xếp công việc</h3>
                            </div>
                        </div>
                    </div>

                    <!-- Service 3 -->
                    <div class="service-card" data-aos="fade-up" data-aos-delay="300">
                        <div class="service-card-frame">
                            <div class="service-image-wrapper">
                                <img src="{{ asset('assets/home/image-young-asian-woman-company-worker-glasses-smiling-holding-digital-tablet-standing-white-background 1.png') }}" alt="Cung cấp nhân lực" class="service-image">
                                <div class="service-overlay">
                                    <div class="service-content">
                                        <p class="service-description">Chúng tôi cung cấp dịch vụ tìm kiếm và tuyển dụng nhân sự chất lượng cao, giúp doanh nghiệp tiết kiệm thời gian và chi phí.</p>
                                        <a href="#" class="service-btn">Xem thêm</a>
                                    </div>
                                </div>
                            </div>
                            <div class="service-title-container">
                                <h3 class="service-title">Cung cấp nhân lực, giải quyết</h3>
                            </div>
                        </div>
                    </div>

                    <!-- Service 4 -->
                    <div class="service-card" data-aos="fade-up" data-aos-delay="400">
                        <div class="service-card-frame">
                            <div class="service-image-wrapper">
                                <img src="{{ asset('assets/home/young-business-lady 1.png') }}" alt="Trợ lý hành chính văn" class="service-image">
                                <div class="service-overlay">
                                    <div class="service-content">
                                        <p class="service-description">Chúng tôi hỗ trợ soạn thảo, hiệu đính và quản lý tài liệu, văn bản để đảm bảo tính chuyên nghiệp và hiệu quả.</p>
                                        <a href="#" class="service-btn">Xem thêm</a>
                                    </div>
                                </div>
                            </div>
                            <div class="service-title-container">
                                <h3 class="service-title">Trợ lý hành chính văn</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Navigation arrows -->
            <button class="slider-nav-btn slider-prev absolute left-0 top-1/2 transform -translate-y-1/2 bg-white p-2 rounded-full shadow-md z-10 flex items-center justify-center" style="display: none;">
                <svg class="w-6 h-6 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
            </button>
            <button class="slider-nav-btn slider-next absolute right-0 top-1/2 transform -translate-y-1/2 bg-white p-2 rounded-full shadow-md z-10 flex items-center justify-center" style="display: none;">
                <svg class="w-6 h-6 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </button>
        </div>

        <!-- Pagination dots -->
        <div class="pagination-dots flex justify-center mt-6">
            <span class="dot active" data-index="0"></span>
            <span class="dot" data-index="1"></span>
            <span class="dot" data-index="2"></span>
        </div>
    </div>
</section>

<!-- About Us Section -->
<section class="about-us py-16 bg-[#f8f9fa]">
    <div class="container-fluid px-0">
        <div class="about-content flex flex-col md:flex-row items-center">
            <div class="about-image w-full md:w-2/5 mb-8 md:mb-0 relative" data-aos="fade-right" data-aos-duration="1000">
                <img src="{{ asset('assets/home/woman-with-headset-having-video-call-laptop 1.png') }}" alt="Behind Office Team" class="w-full h-auto">
                <!-- Project count box positioned below the image and extending beyond right edge -->
                <div class="project-count absolute -bottom-12 -right-10 bg-[#071B35] text-white py-4 px-6 rounded-md w-80 shadow-lg">
                    <div class="relative">
                        <div class="flex items-center justify-start">
                            <div class="text whitespace-nowrap">
                                <span class="font-bold text-xl">1200+</span> Dự án đã hoàn thành
                            </div>
                        </div>
                        <div class="absolute -top-8 -right-2">
                            <img src="{{ asset('assets/img/IconBox.png') }}" alt="Shield Icon" style="width: 70px; height: 70px; display: block !important; visibility: visible !important; z-index: 999;">
                        </div>
                    </div>
                </div>
            </div>
            <div class="about-image w-full md:w-1/10 mb-8 md:mb-0 relative" data-aos="fade-right" data-aos-duration="1000">
                
            </div>
            <div class="about-text w-full md:w-1/2 md:pr-40" data-aos="fade-left" data-aos-duration="1000">
                <div class="story-tag bg-black text-white inline-block px-8 py-2 rounded-full mb-4">
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

<!-- Why Choose Us Section -->
<section class="why-choose-us" style="background-color: #002d56;">
    <div class="why-choose-us__container">
        <h2 class="why-choose-us__title" data-aos="fade-up" data-aos-duration="1000">Tại sao lựa chọn chúng tôi?</h2>
        <p class="why-choose-us__subtitle" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
            Đội ngũ trợ lý chuyên nghiệp, quy trình linh hoạt, cam kết bảo mật – Behind Office giúp bạn tối ưu công việc và nâng cao hiệu suất!
        </p>
        
        <div class="why-choose-us__features">
            <div class="why-choose-us__features-row">
                <!-- Feature 1 -->
                <div class="feature-card" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                    <div class="feature-card__icon">
                        <img src="{{ asset('assets/home/Icon1.png') }}" alt="Nhanh chóng">
                    </div>
                    <div class="feature-card__content">
                        <h3 class="feature-card__title">Nhanh chóng</h3>
                        <p class="feature-card__description">Behind Office tối ưu dịch vụ, phản hồi nhanh, hoàn thành công việc sớm nhất. Đội ngũ chuyên nghiệp hỗ trợ 24/7.</p>
                    </div>
                </div>
                
                <!-- Feature 2 -->
                <div class="feature-card" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                    <div class="feature-card__icon">
                        <img src="{{ asset('assets/home/Icon2.png') }}" alt="Hiệu quả">
                    </div>
                    <div class="feature-card__content">
                        <h3 class="feature-card__title">Hiệu quả</h3>
                        <p class="feature-card__description">Behind Office cam kết kết quả tốt ưu, đáp ứng mong muốn khách hàng. Giải pháp chính xác, tăng hiệu quả, giảm rủi ro.</p>
                    </div>
                </div>
                
                <!-- Feature 3 -->
                <div class="feature-card" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                    <div class="feature-card__icon">
                        <img src="{{ asset('assets/home/Icon3.png') }}" alt="Uy tín">
                    </div>
                    <div class="feature-card__content">
                        <h3 class="feature-card__title">Uy tín</h3>
                        <p class="feature-card__description">Behind Office luôn đặt khách hàng lên hàng đầu, với đội ngũ chuyên môn đa lĩnh vực, sẵn sàng hỗ trợ bạn mọi lúc.</p>
                    </div>
                </div>
            </div>
            
            <div class="why-choose-us__features-row">
                <!-- Feature 4 -->
                <div class="feature-card" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                    <div class="feature-card__icon">
                        <img src="{{ asset('assets/home/Icon4.png') }}" alt="Tiện lợi">
                    </div>
                    <div class="feature-card__content">
                        <h3 class="feature-card__title">Tiện lợi</h3>
                        <p class="feature-card__description">Behind Office luôn đặt khách hàng lên hàng đầu, với đội ngũ chuyên môn đa lĩnh vực, sẵn sàng hỗ trợ bạn mọi lúc.</p>
                    </div>
                </div>
                
                <!-- Feature 5 -->
                <div class="feature-card" data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000">
                    <div class="feature-card__icon">
                        <img src="{{ asset('assets/home/Icon5.png') }}" alt="Tiết kiệm">
                    </div>
                    <div class="feature-card__content">
                        <h3 class="feature-card__title">Tiết kiệm</h3>
                        <p class="feature-card__description">Tùy chỉnh dịch vụ theo nhu cầu, giúp doanh nghiệp vận hành trơn tru và tiết kiệm chi phí.</p>
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

<!-- Testimonials Section -->
<section class="testimonials py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold text-[#1C1F35] mb-6" data-aos="fade-up" data-aos-duration="1000">Khách hàng nói gì về chúng tôi</h2>
            <p class="text-gray-600 max-w-3xl mx-auto" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                Behind Office luôn nhận được sự tin tưởng và đánh giá cao từ khách hàng nhờ dịch vụ chuyên nghiệp, hỗ trợ tận tâm và giải pháp tối ưu. Chúng tôi tự hào đồng hành cùng doanh nghiệp, giúp công việc vận hành hiệu quả và suôn sẻ hơn.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Testimonial 1 -->
            <div class="testimonial-card bg-white shadow-md rounded-lg p-8 border border-gray-100" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                <div class="testimonial-content mb-6">
                    <p class="text-gray-700 italic">
                        "Behind Office mang đến dịch vụ chuyên nghiệp, giúp công việc hậu cần văn phòng của chúng tôi vận hành suôn sẻ hơn. Nhờ họ, tôi có thể tập trung vào chiến lược kinh doanh mà không lo gián đoạn."
                    </p>
                </div>
                <div class="testimonial-author flex flex-col items-center">
                    <div class="author-avatar mb-3">
                        <img src="{{ asset('assets/home/avatar1.png') }}" alt="Anna Lee" class="w-16 h-16 rounded-full">
                    </div>
                    <div class="author-info text-center">
                        <h4 class="author-name font-bold text-[#1C1F35] uppercase">ANNA LEE</h4>
                        <p class="author-position text-sm text-gray-500 uppercase">FAIRY CAKE</p>
                        <div class="rating flex justify-center mt-2">
                            <img src="{{ asset('assets/home/star.png') }}" alt="star" class="w-4 h-4">
                            <img src="{{ asset('assets/home/star.png') }}" alt="star" class="w-4 h-4">
                            <img src="{{ asset('assets/home/star.png') }}" alt="star" class="w-4 h-4">
                            <img src="{{ asset('assets/home/star.png') }}" alt="star" class="w-4 h-4">
                            <img src="{{ asset('assets/home/star.png') }}" alt="star" class="w-4 h-4">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Testimonial 2 -->
            <div class="testimonial-card bg-white shadow-md rounded-lg p-8 border border-gray-100" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                <div class="testimonial-content mb-6">
                    <p class="text-gray-700 italic">
                        "Đội ngũ Behind Office hỗ trợ tận tâm, phản hồi nhanh chóng và xử lý vấn đề hiệu quả. Nhờ họ, công ty tôi tiết kiệm được nhiều thời gian, giúp công việc vận hành trơn tru mà không bị gián đoạn."
                    </p>
                </div>
                <div class="testimonial-author flex flex-col items-center">
                    <div class="author-avatar mb-3">
                        <img src="{{ asset('assets/home/avatar2.png') }}" alt="Minh Tiến" class="w-16 h-16 rounded-full">
                    </div>
                    <div class="author-info text-center">
                        <h4 class="author-name font-bold text-[#1C1F35] uppercase">Minh Tiến</h4>
                        <p class="author-position text-sm text-gray-500 uppercase">NINA LIVE CO.,LTD</p>
                        <div class="rating flex justify-center mt-2">
                            <img src="{{ asset('assets/home/star.png') }}" alt="star" class="w-4 h-4">
                            <img src="{{ asset('assets/home/star.png') }}" alt="star" class="w-4 h-4">
                            <img src="{{ asset('assets/home/star.png') }}" alt="star" class="w-4 h-4">
                            <img src="{{ asset('assets/home/star.png') }}" alt="star" class="w-4 h-4">
                            <img src="{{ asset('assets/home/star.png') }}" alt="star" class="w-4 h-4">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Testimonial 3 -->
            <div class="testimonial-card bg-white shadow-md rounded-lg p-8 border border-gray-100" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                <div class="testimonial-content mb-6">
                    <p class="text-gray-700 italic">
                        "Behind Office cung cấp giải pháp linh hoạt, phù hợp với nhu cầu doanh nghiệp. Nhờ dịch vụ chuyên nghiệp của họ, chúng tôi tối ưu được chi phí vận hành và tập trung hơn vào hoạt động kinh doanh."
                    </p>
                </div>
                <div class="testimonial-author flex flex-col items-center">
                    <div class="author-avatar mb-3">
                        <img src="{{ asset('assets/home/avatar3.png') }}" alt="Duy Khang" class="w-16 h-16 rounded-full">
                    </div>
                    <div class="author-info text-center">
                        <h4 class="author-name font-bold text-[#1C1F35] uppercase">Duy Khang</h4>
                        <p class="author-position text-sm text-gray-500 uppercase">JAME BUILDING</p>
                        <div class="rating flex justify-center mt-2">
                            <img src="{{ asset('assets/home/star.png') }}" alt="star" class="w-4 h-4">
                            <img src="{{ asset('assets/home/star.png') }}" alt="star" class="w-4 h-4">
                            <img src="{{ asset('assets/home/star.png') }}" alt="star" class="w-4 h-4">
                            <img src="{{ asset('assets/home/star.png') }}" alt="star" class="w-4 h-4">
                            <img src="{{ asset('assets/home/star.png') }}" alt="star" class="w-4 h-4">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Pagination dots -->
        <div class="pagination-dots flex justify-center mt-10">
            <span class="dot active bg-blue-500"></span>
            <span class="dot bg-gray-300"></span>
            <span class="dot bg-gray-300"></span>
        </div>
    </div>
<!-- Behind Office Popup -->
<div id="behindoffice-popup" class="behindoffice-popup fixed inset-0 z-50 flex items-center justify-center hidden">
    <div class="behindoffice-popup__overlay absolute inset-0 backdrop-blur-sm bg-black bg-opacity-30"></div>

    <div class="behindoffice-popup__modal relative bg-white rounded-xl shadow-2xl p-8 w-full max-w-md z-10 text-center" style="background: linear-gradient(135deg, #e8f3ff, #ffffff);">
        <button id="behindoffice-popup-close" class="absolute top-3 right-3 text-gray-500 hover:text-black text-2xl">&times;</button>
        <h2 class="text-2xl font-bold text-[#002D56] mb-1">BEHIND OFFICE</h2>
        <div class="w-12 h-1 mx-auto bg-[#002D56] rounded-full mb-4"></div>
        <p class="text-gray-600 text-sm mb-6">Vui lòng điền thông tin chi tiết chúng tôi sẽ liên hệ tư vấn!</p>

        <form>
            <input type="text" placeholder="Họ tên" class="behindoffice-popup__input mb-4">
            <input type="tel" placeholder="Số điện thoại" class="behindoffice-popup__input mb-4">
            <textarea placeholder="Nội dung cần tư vấn" rows="3" class="behindoffice-popup__input mb-6"></textarea>
            <button type="submit" class="behindoffice-popup__submit">Gửi</button>
        </form>
    </div>
</div>


</section>

<!-- Add swipe functionality with JavaScript -->
@section('scripts')
<script>
document.addEventListener("DOMContentLoaded", function () {
    const popup = document.getElementById("behindoffice-popup");
    const closeBtn = document.getElementById("behindoffice-popup-close");

    // Show popup once
    if (!sessionStorage.getItem("popupShown")) {
        popup.classList.remove("hidden");
        sessionStorage.setItem("popupShown", "true");
    }

    closeBtn.addEventListener("click", () => {
        popup.classList.add("hidden");
    });
});
</script>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        const sliderTrack = document.querySelector('.services-track');
        const dots = document.querySelectorAll('.dot');
        const cards = document.querySelectorAll('.service-card');
        const sliderContainer = document.querySelector('.services-slider');
        const prevBtn = document.querySelector('.slider-prev');
        const nextBtn = document.querySelector('.slider-next');
        
        let isDragging = false;
        let startPos = 0;
        let currentTranslate = 0;
        let prevTranslate = 0;
        let currentIndex = 0;
        const cardWidth = 280 + 24; // Card width + gap
        
        // Initialize slider position
        function updateSliderPosition() {
            sliderTrack.style.transform = `translateX(${-currentIndex * cardWidth}px)`;
            sliderTrack.style.transition = 'transform 0.3s ease-out';
            
            // Update active dot
            dots.forEach((dot, index) => {
                dot.classList.toggle('active', index === currentIndex);
            });
            
            // Show/hide nav buttons based on visibility
            if (prevBtn && nextBtn) {
                prevBtn.style.display = currentIndex > 0 ? 'flex' : 'none';
                nextBtn.style.display = currentIndex < cards.length - 1 ? 'flex' : 'none';
            }
        }
        
        // Set up dot navigation
        dots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                currentIndex = index;
                updateSliderPosition();
            });
        });
        
        // Set up arrow navigation
        if (prevBtn) {
            prevBtn.addEventListener('click', () => {
                if (currentIndex > 0) {
                    currentIndex--;
                    updateSliderPosition();
                }
            });
        }
        
        if (nextBtn) {
            nextBtn.addEventListener('click', () => {
                if (currentIndex < cards.length - 1) {
                    currentIndex++;
                    updateSliderPosition();
                }
            });
        }
        
        // Touch events
        sliderTrack.addEventListener('touchstart', touchStart);
        sliderTrack.addEventListener('touchmove', touchMove);
        sliderTrack.addEventListener('touchend', touchEnd);
        
        function touchStart(event) {
            startPos = event.touches[0].clientX;
            isDragging = true;
            prevTranslate = currentTranslate;
        }
        
        function touchMove(event) {
            if (!isDragging) return;
            const currentPosition = event.touches[0].clientX;
            currentTranslate = prevTranslate + (currentPosition - startPos);
        }
        
        function touchEnd() {
            isDragging = false;
            const threshold = cardWidth / 4;
            const draggedDistance = currentTranslate - prevTranslate;
            
            if (draggedDistance > threshold && currentIndex > 0) {
                currentIndex--;
            } else if (draggedDistance < -threshold && currentIndex < cards.length - 1) {
                currentIndex++;
            }
            
            updateSliderPosition();
        }
        
        // Mouse events (optional for desktop)
        sliderTrack.addEventListener('mousedown', mouseStart);
        sliderTrack.addEventListener('mousemove', mouseMove);
        sliderTrack.addEventListener('mouseup', mouseEnd);
        sliderTrack.addEventListener('mouseleave', mouseEnd);
        
        function mouseStart(event) {
            event.preventDefault();
            startPos = event.clientX;
            isDragging = true;
            prevTranslate = currentTranslate;
        }
        
        function mouseMove(event) {
            if (!isDragging) return;
            const currentPosition = event.clientX;
            currentTranslate = prevTranslate + (currentPosition - startPos);
        }
        
        function mouseEnd() {
            isDragging = false;
            const threshold = cardWidth / 4;
            const draggedDistance = currentTranslate - prevTranslate;
            
            if (draggedDistance > threshold && currentIndex > 0) {
                currentIndex--;
            } else if (draggedDistance < -threshold && currentIndex < cards.length - 1) {
                currentIndex++;
            }
            
            updateSliderPosition();
        }
        
        // Initialize
        updateSliderPosition();
    });
</script>
@endsection
