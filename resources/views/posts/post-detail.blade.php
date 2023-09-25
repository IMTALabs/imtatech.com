@extends('layouts.app')

@section('content')
    <section class="pt-20">
        <div class="container">
            <div class="py-14">
                <div class="flex items-center gap-2 bg-gray-100 py-2 px-3">
                    <a href="{{ route('home') }}" class="transition-all hover:text-primary">Home</a> /
                    <a href="{{ route('posts.index') }}" class="transition-all hover:text-primary">Blog</a> /
                    <p class="text-gray-500 truncate">{{ $post->title }}</p>
                </div>
            </div>

            <div class="lg:w-4/5">
                <span class="bg-orange-500/10 text-orange-500 font-medium rounded-md text-xs py-1 px-2"><a href="#">Announcement</a></span>
                <h1 class="lg:text-5xl/snug text-3xl/snug mt-3">{{ $post->title }}</h1>
            </div>

            <div class="mb-8">
                <div class="flex flex-wrap items-center justify-between gap-6">
                    <div class="flex items-center gap-3 mt-7">
                        <img src="{{ $post->author->avatar->url }}" alt="avatar" class="h-11 w-11 rounded-full">

                        <div>
                            <h6 class="text-sm transition-all hover:text-primary"><a
                                    href="#">{{ $post->author->name }}</a></h6>
                            <p class="text-sm text-gray-500">{{ $post->updated_at->toDatetimeString() }}</p>
                        </div>
                    </div>

                    <div class="flex gap-2">
                        <p class="text-sm text-gray-500">SHARE:</p>
                        <div class="flex gap-3">
                            <span>
                                <a href="#">
                                    <svg class="w-5 h-5 text-blue-500" xmlns="http://www.w3.org/2000/svg"
                                         viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                         stroke-linecap="round" stroke-linejoin="round">
                                        <path
                                            d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                                    </svg>
                                </a>
                            </span>

                            <span>
                                <a href="#">
                                    <svg class="w-5 h-5 text-teal-500" xmlns="http://www.w3.org/2000/svg"
                                         viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                         stroke-linecap="round" stroke-linejoin="round">
                                        <path
                                            d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path>
                                    </svg>
                                </a>
                            </span>

                            <span>
                                <a href="#">
                                    <svg class="w-5 h-5 text-red-500" xmlns="http://www.w3.org/2000/svg"
                                         viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                         stroke-linecap="round" stroke-linejoin="round">
                                        <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                                        <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                        <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                                    </svg>
                                </a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- =========== post Section Start =========== -->
    <section>
        <div class="container">
            <p class="text-sm/relaxed tracking-wider text-gray-600 mb-5">{{ $post->description }}</p>
            <article class="article">
                {!! $post->content !!}
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
                    <img src="{{ $post->author->avatar->url }}" class="h-12 w-12 rounded-full">
                    <div>
                        <h6 class="text-sm transition-all hover:text-primary"><a href="#">Emily Blunt</a></h6>
                        <p class="text-sm text-gray-500">I am imter.</p>
                    </div>
                </div>
            </div>
            <div class="border-b mt-5"></div>
        </div>
    </section>
    <!-- =========== post navigation end =========== -->
@endsection
