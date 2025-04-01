@extends('layouts.guest')

@section('styles')
<style>
    /* Hiệu ứng fade-in + zoom */
    .fade-zoom-in {
        opacity: 0;
        transform: scale(0.95);
        animation: fadeZoomIn 1s ease-out forwards;
    }

    @keyframes fadeZoomIn {
        to {
            opacity: 1;
            transform: scale(1);
        }
    }

    /* Slide up */
    .slide-up {
        opacity: 0;
        transform: translateY(40px);
        animation: slideUp 0.8s ease-out forwards;
    }

    @keyframes slideUp {
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Hover scale */
    .hover-card:hover {
        transform: scale(1.03);
        transition: transform 0.3s ease;
        box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    }

</style>
@endsection

@section('content')
<div class="relative w-screen h-[600px] hero_section mb-20">
    <img src="{{ asset('assets/image3.png') }}" alt="Banner" class="absolute inset-0 w-full h-full object-cover">
    <div class="absolute inset-0 flex items-center justify-center">
        <h1 class="text-white text-4xl md:text-5xl font-bold">Bài viết</h1>
    </div>
</div>

    <div class="container mx-auto px-4 py-16">
        <h2 class="text-3xl font-bold text-center mb-12 slide-up">Bài viết</h2>

        @if($posts->count())
            @php $featured = $posts->first(); @endphp
            <div class="flex flex-col md:flex-row gap-8 mb-12 slide-up">
                <div class="w-full md:w-1/2">
                    <img src="{{ asset('assets/image1.png') }}" class="w-full h-[300px] object-cover rounded-md shadow-md">
                </div>
                <div class="w-full md:w-1/2 flex flex-col justify-center">
                    <h3 class="text-2xl font-semibold mb-3">{{ $featured->title }}</h3>
                    <p class="text-gray-600 mb-3">{{ $featured->excerpt }}</p>
                    <a href="{{ route('blog.detail', ['slug' => $featured->slug]) }}" class="text-blue-600 font-semibold hover:underline">Xem thêm..</a>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
                @foreach($posts->skip(1) as $post)
                    <div class="border rounded-lg overflow-hidden hover-card transition-transform duration-300 ease-out bg-white">
                        <img src="{{ asset('assets/image1.png') }}" class="w-full h-[180px] object-cover">
                        <div class="p-4">
                            <h4 class="text-md font-semibold mb-2">{{ $post->title }}</h4>
                            <p class="text-sm text-gray-600">{{ $post->excerpt }}</p>
                            <a href="{{ route('blog.detail', ['slug' => $post->slug]) }}" class="text-blue-600 text-sm font-semibold mt-2 inline-block hover:underline">Xem thêm..</a>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="mt-12 flex justify-center">
                {{ $posts->links() }}
            </div>
        @else
            <p class="text-center text-gray-500">Chưa có bài viết nào.</p>
        @endif
    </div>
@endsection
