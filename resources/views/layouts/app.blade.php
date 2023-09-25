<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('assets/images/logo.webp') }}">

    <!-- Theme favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/logo.webp') }}">

    <!--Swiper slider css-->
    <link href="{{ asset('assets/libs/swiper/swiper-bundle.min.css') }}" rel="stylesheet" type="text/css">

    <!-- Animation on Scroll css -->
    <link href="{{ asset('assets/libs/aos/aos.css') }}" rel="stylesheet" type="text/css">

    @stack('css')

    <!-- Style css -->
    @vite('resources/css/app.scss')

    <!-- Icons css -->
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css">

    {!! SEO::generate() !!}
</head>

<body class="text-gray-700">
    @include('layouts.header')

    @yield('content')

    @include('layouts.footer')

    <!-- =========== Back To Top Start =========== -->
    <button data-toggle="back-to-top" class="fixed text-sm rounded-full z-10 bottom-5 end-5 h-9 w-9 text-center bg-primary/20 text-primary flex justify-center items-center">
        <i class="fa-solid fa-arrow-up text-base"></i>
    </button>
    <!-- =========== Back To Top End =========== -->

    <!-- Frost Plugin Js -->
    <script src="{{ asset('assets/libs/@frostui/tailwindcss/frostui.js') }}"></script>

    <!-- Swiper Plugin Js -->
    <script src="{{ asset('assets/libs/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Animation on Scroll Plugin Js -->
    <script src="{{ asset('assets/libs/aos/aos.js') }}"></script>

    <!-- Theme Js -->
    <script src="{{ asset('assets/js/theme.min.js') }}"></script>

    @stack('js')
</body>

</html>
