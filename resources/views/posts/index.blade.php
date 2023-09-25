@extends('layouts.app')

@section('content')
    <section class="pt-36 pb-20">
        <div class="container">

            <div class="absolute inset-0 h-96">
                <div class="relative w-full h-full z-30"></div>
            </div>

            <div class="relative lg:w-3/5 mx-auto z-30">
                <div class="text-center">
                    <h2 class="text-5xl font-semibold mb-8">Blog</h2>
                    <p class="text-base/relaxed tracking-wide">Nemo enim ipsam voluptatem quia voluptas sit aspernatur
                        aut odit aut fugit sed consequuntur ratione voluptatem sequi nesciunt.
                    <p>
                </div>
            </div>
        </div>
    </section>

    <!-- =========== listing Section Start =========== -->
    <section class="py-24">
        <div class="container">

            <div class="flex items-center gap-2">
                <p>Tags:</p>
                <div class="flex flex-wrap items-center gap-1">
                    <a href="#"
                       class="border border-gray-300 rounded-md text-xs font-medium tracking-wider transition-all duration-150 hover:shadow-lg focus:shadow-lg py-2 px-3">Business</a>
                    <a href="#"
                       class="border border-gray-300 rounded-md text-xs font-medium tracking-wider transition-all duration-150 hover:shadow-lg focus:shadow-lg py-2 px-3">Community</a>
                    <a href="#"
                       class="border border-gray-300 rounded-md text-xs font-medium tracking-wider transition-all duration-150 hover:shadow-lg focus:shadow-lg py-2 px-3">Announcement</a>
                    <a href="#"
                       class="border border-gray-300 rounded-md text-xs font-medium tracking-wider transition-all duration-150 hover:shadow-lg focus:shadow-lg py-2 px-3">Tutorials</a>
                    <a href="#"
                       class="border border-gray-300 rounded-md text-xs font-medium tracking-wider transition-all duration-150 hover:shadow-lg focus:shadow-lg py-2 px-3">Resources</a>
                    <a href="#"
                       class="border border-gray-300 rounded-md text-xs font-medium tracking-wider transition-all duration-150 hover:shadow-lg focus:shadow-lg py-2 px-3">Interview</a>
                </div>
            </div>

            @if ($posts->count() > 0)
                <div class="grid lg:grid-cols-3 grid-cols-1 gap-10 items-center lg:py-16 py-14" data-aos="fade-up">
                    @php
                        $firstPost = $posts->shift();
                    @endphp
                    <div class="lg:col-span-2">
                        <div class="grid md:grid-cols-5 gap-10">

                            <div class="md:col-span-2 col-span-3">
                                <img src="{{ $firstPost->thumbnail->first()->url }}" class="w-full h-full rounded-md">
                            </div>

                            <div class="col-span-3">
                                <div class="flex flex-col gap-14 justify-between xl:h-full">
                                    <div>
                                        <span
                                            class="bg-orange-500/10 text-orange-500 font-medium rounded-md text-xs py-1 px-2"><a
                                                href="#">Community</a></span>
                                        <h1 class="text-lg my-3 transition-all hover:text-primary"><a
                                                href="{{ route('posts.show', ['slug' => $firstPost->slug]) }}">{{ $firstPost->title }}</a></h1>
                                        <p class="text-sm/relaxed tracking-wider text-gray-500">
                                            {{ $firstPost->description }}
                                            <a href="{{ route('posts.show', ['slug' => $firstPost->slug]) }}" class="text-primary">read more</a>
                                        </p>
                                    </div>
                                    <div>
                                        <div class="flex items-center gap-2">
                                            <img src="{{ $firstPost->author->avatar->url }}"
                                                 class="h-10 w-10 rounded-md object-cover">
                                            <div>
                                                <h6 class="text-sm transition-all hover:text-primary">{{ $firstPost->author->name }}</h6>
                                                <p class="text-sm text-gray-500">{{ $firstPost->updated_at->toDateTimeString() }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    @if ($posts->count() > 0)
                        @php
                            $secondPost = $posts->shift();
                        @endphp
                        <div>
                            <div class="border relative shadow-xl rounded-lg w-full">
                                <div class="relative">
                                    <div class="absolute inset-0 bg-black/20"></div>
                                    <div class="absolute top-4 right-4 text-sm bg-red-500 text-white rounded py-1 px-3">
                                        Resource
                                    </div>
                                    <img src="{{ $secondPost->thumbnail->first()->url }}" class="w-full">

                                    <div class="absolute right-5 bottom-3 left-5 text-white">
                                        <h2 class="text-2xl"><a href="{{ route('posts.show', ['slug' => $secondPost->slug]) }}">{{ $secondPost->title }}</a></h2>
                                        <div class="flex mt-3">
                                            <img src="{{ $secondPost->author->avatar->url }}" alt="image"
                                                 class="w-8 h-8 shadow-lg border-2 border-white rounded-full">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                </div>

                @if ($posts->count() > 0)
                    <div class="grid lg:grid-cols-3 gap-6 lg:py-16 py-14" data-aos="fade-up">
                        @foreach($posts as $post)
                            <div>
                                <img src="{{ $post->thumbnail->first()->url }}" class="rounded-md mb-5">

                                <span class="bg-orange-500/10 text-orange-500 font-medium rounded-md text-xs py-1 px-2"><a
                                        href="#">Announcement</a></span>
                                <h1 class="text-lg my-3 transition-all hover:text-primary"><a
                                        href="{{ route('posts.show', ['slug' => $post->slug]) }}">{{ $post->title }}</a></h1>
                                <p class="text-sm/relaxed tracking-wider text-gray-500">
                                    {{ $post->description }} ...
                                    <a href="{{ route('posts.show', ['slug' => $post->slug]) }}" class="text-primary">read more</a>
                                </p>
                            </div>
                        @endforeach
                    </div>
                @endif

                <div class="flex justify-center items-center gap-2">
                    @if($posts->previousPageUrl())
                        <div class="flex items-center">
                            <a href="{{ $posts->previousPageUrl() }}"
                               class="border border-gray-300 rounded-md text-sm tracking-wider transition-all duration-150 hover:shadow-lg focus:shadow-lg py-2 px-3"><i
                                    class="fa-solid fa-arrow-left me-2"></i> Previous</a>
                        </div>
                    @endif

                    @if($posts->nextPageUrl())
                        <div class="flex items-center">
                            <a href="{{ $posts->nextPageUrl() }}"
                               class="border border-gray-300 rounded-md text-sm tracking-wider transition-all duration-150 hover:shadow-lg focus:shadow-lg py-2 px-3">Next
                                <i class="fa-solid fa-arrow-right ms-2"></i></a>
                        </div>
                    @endif
                </div>
            @endif
        </div>
    </section>
    <!-- =========== listing Section end =========== -->
@endsection
