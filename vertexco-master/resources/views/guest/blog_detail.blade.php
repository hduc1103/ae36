@extends('layouts.guest')

@section('content')
    <div class="w-full">
        <img src="{{ asset('assets/image3.png') }}" alt="Bài viết" class="w-full max-h-[600px] object-cover">
    </div>

    <div class="container mx-auto px-4 py-12">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">
            <div class="hidden lg:block">
                <div class="space-y-6">
                    <div class="text-center border-b pb-4">
                        <div class="text-3xl font-bold text-gray-900">966</div>
                        <div class="text-gray-500 text-sm">Lượt xem</div>
                    </div>
                    <div class="flex flex-col items-center space-y-4">
                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->url()) }}" target="_blank">
                            <img src="{{ asset('assets/facebook.svg') }}" alt="Facebook" width="48" height="48">
                        </a>
                        <a href="https://zalo.me/zalo-share?u={{ urlencode(request()->url()) }}" target="_blank">
                            <img src="{{ asset('assets/zalo.png') }}" alt="Zalo" width="48" height="48">
                        </a>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-2">
                <h1 class="text-3xl font-bold mb-6">{{ $post->title }}</h1>
                <div class="space-y-6 text-justify">
                    {!! $post->content !!}
                </div>
            </div>
        </div>

        @if($relatedPosts->count())
            <div class="mt-16">
                <h2 class="text-2xl font-semibold mb-6">Bài viết liên quan</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                    @foreach ($relatedPosts as $relatedPost)
                        <a href="{{ route('blog.detail', ['slug' => $relatedPost->slug]) }}" class="block group">
                            <img src="{{asset('assets/image1.png') }}" class="w-full h-[200px] object-cover mb-3 group-hover:scale-105 transition-transform">
                            <h3 class="text-md font-semibold group-hover:text-blue-600">{{ $relatedPost->title }}</h3>
                            <p class="text-sm text-gray-600 mt-1">{{ $relatedPost->display_excerpt }}</p>
                        </a>
                    @endforeach
                </div>
            </div>
        @endif
    </div>
@endsection
