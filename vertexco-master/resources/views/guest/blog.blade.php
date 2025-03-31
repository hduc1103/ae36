@extends('layouts.guest')

@section('content')
    <div class="relative">
        <img src="{{ asset('assets/image3.png') }}" class="w-full h-[400px] object-cover">
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-white text-4xl font-bold">
            Bài viết
        </div>
    </div>

    <div class="container mx-auto px-4 py-16">
        <h2 class="text-3xl font-bold text-center mb-12">Bài viết</h2>

        @if($posts->count())
            @php $featured = $posts->first(); @endphp
            <div class="flex flex-col md:flex-row gap-8 mb-12">
                <div class="w-full md:w-1/2">
                    <img src="{{ asset('assets/image1.png') }}" class="w-full h-[300px] object-cover">
                </div>
                <div class="w-full md:w-1/2 flex flex-col justify-center">
                    <h3 class="text-2xl font-semibold mb-3">{{ $featured->title }}</h3>
                    <p class="text-gray-600 mb-3">{{ $featured->excerpt }}</p>
                    <a href="{{ route('blog.detail', ['slug' => $featured->slug]) }}" class="text-blue-600 font-semibold">Xem thêm..</a>
                </div>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
                @foreach($posts->skip(1) as $post)
                    <div class="border rounded-lg overflow-hidden">
                        <img src="{{ asset('assets/image1.png') }}" class="w-full h-[180px] object-cover">
                        <div class="p-4">
                            <h4 class="text-md font-semibold mb-2">{{ $post->title }}</h4>
                            <p class="text-sm text-gray-600">{{ $post->excerpt }}</p>
                            <a href="{{ route('blog.detail', ['slug' => $post->slug]) }}" class="text-blue-600 text-sm font-semibold mt-2 inline-block">Xem thêm..</a>
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