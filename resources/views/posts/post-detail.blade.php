@extends('layouts.app')

@section('content')
    <section class="pt-20">
        <div class="container">
            <div class="py-4 md:py-14">
                <div class="flex items-center gap-2 bg-gray-100 py-2 px-3 whitespace-nowrap text-xs">
                    <a href="{{ route('landing.home') }}" class="transition-all hover:text-primary">Trang chủ</a> /
                    <a href="{{ route('posts.index') }}" class="transition-all hover:text-primary">Bài viết</a> /
                    <p class="text-gray-500 truncate">{{ $post->title }}</p>
                </div>
            </div>

            <div class="lg:w-4/5 mb-8">
                <span class="bg-orange-500/10 text-orange-500 font-medium rounded-md text-xs py-1 px-2"><a
                        href="#">{{ $post->team->label() }}</a></span>
                <h1 class="lg:text-5xl/snug text-3xl/snug mt-3">{{ $post->title }}</h1>
            </div>
        </div>
    </section>

    <!-- =========== post Section Start =========== -->
    <section>
        <div class="container">
            <p class="text-sm/relaxed tracking-wider text-gray-600 mb-5">{{ $post->mo_ta }}</p>
            <article class="article break-words">
                {!! $post->noi_dung !!}
            </article>
        </div>
    </section>
    <!-- =========== post Section End =========== -->

    <!-- =========== post navigation Start =========== -->
    <section>
        <div class="container">
            <div class="border-t mb-5"></div>
            <div class="my-5 md:my-0">
                <div class="flex justify-start items-center gap-4">
                    <img src="{{ asset('assets/images/logo.jpg') }}" class="h-12 w-12 rounded-full">
                    <div>
                        <h6 class="text-sm transition-all hover:text-primary"><a href="#">{{ $post->team->label() }}</a></h6>
                        <p class="text-xs text-gray-500">{{ $post->updated_at->toDatetimeString() }}</p>
                    </div>
                </div>
            </div>
            <div class="border-b mt-5"></div>
        </div>
    </section>
    <!-- =========== post navigation end =========== -->
@endsection
