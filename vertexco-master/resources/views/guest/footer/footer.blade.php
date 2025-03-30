<footer class="footer">
    <div class="footer-main container mx-auto px-4 py-8 grid grid-cols-1 md:grid-cols-4 gap-8">
        <!-- Logo & Description -->
        <div class="footer-section logo-section col-span-1">
            <div class="footer-logo-wrapper mb-4">
                <img src="{{ asset('images/icononly_transparent.png') }}" alt="Behind Office Icon" class="footer-logo-icon w-12 h-12 inline-block">
                <img src="{{ asset('images/fulllogo_transparent.png') }}" alt="Behind Office" class="footer-logo-text h-6 inline-block ml-2">
            </div>
            <p class="text-sm text-gray-600">
                Giải pháp hỗ trợ phía sau văn phòng giúp bạn vận hành doanh nghiệp trơn tru và hiệu quả hơn mỗi ngày.
            </p>
        </div>

        <!-- Đường dẫn -->
        <div class="footer-section col-span-1">
            <h4 class="font-semibold mb-2">Đường dẫn</h4>
            <ul class="space-y-1 text-sm text-gray-700">
                <li><a href="#home" class="hover:text-[#C1262E]">Trang chủ</a></li>
                <li><a href="#about" class="hover:text-[#C1262E]">Về chúng tôi</a></li>
                <li><a href="#services" class="hover:text-[#C1262E]">Dịch vụ</a></li>
                <li><a href="#contact" class="hover:text-[#C1262E]">Liên hệ</a></li>
                <li><a href="#blog" class="hover:text-[#C1262E]">Bài viết</a></li>
            </ul>
        </div>

        <!-- Mạng xã hội -->
        <div class="footer-section col-span-1">
            <h4 class="font-semibold mb-2">Mạng xã hội</h4>
            <ul class="space-y-1 text-sm text-gray-700">
                <li><a href="#" class="hover:text-[#C1262E]">Facebook</a></li>
                <li><a href="#" class="hover:text-[#C1262E]">Zalo</a></li>
            </ul>
        </div>

        <!-- Thông tin doanh nghiệp -->
        <div class="footer-section col-span-1 text-sm text-gray-600">
            <h4 class="font-semibold mb-2">Thông tin doanh nghiệp</h4>
            <p>Địa chỉ: Suced Tower, 108 Nguyễn Hoàng, Mỹ Đình, Nam Từ Liêm, Hà Nội, Vietnam</p>
            <p>Số điện thoại: +84 878 799 866</p>
            <p>Email: behindofficevn@gmail.com</p>
        </div>
    </div>

    <hr class="footer-divider border-t border-gray-200 my-6">

    <div class="footer-bottom text-center text-sm text-gray-500 pb-6">
        <span>Copyright © {{ now()->year }} Behind Office</span>
        <span class="mx-2">|</span>
        <span>Developed by Le Vu Media</span>
    </div>
</footer>
