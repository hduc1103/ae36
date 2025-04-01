<header class="behindoffice-header">
    <div class="flex w-full">
        <div class="container mx-auto px-4 py-0 flex items-center">
            {{-- Logo + Brand --}}
            <div class="behindoffice-header-logo flex items-center gap-2 py-4">
                <img src="{{ asset('assets/icononly_transparent.png') }}" alt="Logo">
                <img src="{{ asset('assets/fulllogo_transparent.png') }}" alt="Behind Office">
            </div>

            {{-- Navigation Links --}}
            <nav class="hidden md:flex gap-6 items-center py-4 mx-auto justify-center">
                <a href="{{ route('home') }}" class="behindoffice-nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Trang chủ</a>
                <a href="{{ route('about') }}" class="behindoffice-nav-link {{ request()->routeIs('about') ? 'active' : '' }}">Về chúng tôi</a>
                <a href="{{ route('services') }}" class="behindoffice-nav-link {{ request()->routeIs('services') ? 'active' : '' }}">Dịch vụ</a>
                <a href="{{ route('contact') }}" class="behindoffice-nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">Liên hệ</a>
                <a href="{{ route('blog') }}" class="behindoffice-nav-link {{ request()->routeIs('blog') ? 'active' : '' }}">Blog</a>
            </nav>
        </div>

        {{-- Call Us --}}
        <div class="behindoffice-call-box flex items-center h-full bg-blue-500 text-white px-10 min-w-[200px] justify-center">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2" class="behindoffice-call-icon w-5 h-5 mr-2">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M3 5a2 2 0 012-2h1.586a1 1 0 01.707.293l1.414 1.414a1 1 0 01.293.707V7a2 2 0 01-2 2H6v1a11 11 0 0011 11h1a2 2 0 012-2v-1a2 2 0 012-2h1.586a1 1 0 01.707.293l1.414 1.414a1 1 0 01.293.707V21a2 2 0 01-2 2h-1a19 19 0 01-19-19V5z" />
            </svg>
            <span><strong>Call Us</strong> +84 878 799 866</span>
        </div>
    </div>
</header>