@extends('layouts.app')

@section('content')
<!-- =========== Hero Section Start =========== -->
<section class="bg-gradient-to-t from-yellow-50/80 relative">
    <section class="relative pt-20 lg:pt-44 pb-40">
        <div class="container">
            <div class="grid lg:grid-cols-7 grid-cols-1 gap-16 items-center">
                <div class="lg:col-span-3 order-2 lg:order-1 text-center sm:text-start">
                    <h1 class="text-3xl/tight sm:text-4xl/tight lg:text-5xl/tight font-semibold mb-7">{{ $data->slogan }}
                    </h1>
                    <p class="text-gray-500">{{ $data->slogan_phu }}</p>
                    <div class="flex gap-4 mt-16 max-lg:justify-center">
                        <button class="flex items-center">
                            <a href="https://www.facebook.com/imtatechcom/" target="_blank" class="bg-primary text-white rounded-md hover:shadow-lg hover:shadow-primary/30 focus:shadow-none focus:outline focus:outline-primary/40 transition-all duration-500 py-2 px-4">Liên hệ</a>
                        </button>
                    </div>
                </div>

                <div class="col-span-full lg:col-span-4 order-1 lg:order-2" data-aos="fade-left" data-aos-duration="1000">
                    <div class="w-full">
                        <img class="w-full max-w-md mx-auto lg:float-right" src="assets/images/hero/techny-data-dashboard.gif" alt="startup1-img" data-aos="fade-left" data-aos-duration="1000">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="absolute bottom-0 inset-x-0 hidden sm:block">
        <img src="assets/images/shapes/white-wave.svg" alt="svg" class="w-full -scale-x-100 -scale-y-100">
    </div>

</section>
<!-- =========== Hero Section End =========== -->

<!-- =========== feature Section Start =========== -->
<section class="xl:py-24 py-16 overflow-x-hidden">
    <div class="container">
        <div>
            <div class="grid lg:grid-cols-2 grid-cols-1 2xl:gap-24 gap-10 items-center">

                <div class="order-2 lg:order-1">
                    <span class="text-sm bg-red-500/10 text-red-600 rounded-full px-3 py-1">Dịch vụ</span>
                    <h1 class="text-3xl/tight font-medium mt-3 mb-4">Thiết kế website</h1>
                    <p class="text-gray-500">{{ $data->dich_vu_web }}</p>
                    <button class="mt-12 flex items-center">
                        <a href="{{ route('landing.web') }}" class="border border-primary text-primary rounded-md hover:bg-primary hover:text-white hover:shadow-lg hover:shadow-primary/30 focus:shadow-none focus:outline focus:outline-primary/40 transition-all duration-500 py-2 px-4">Tìm hiểu thêm <i class="fa-solid fa-arrow-right ms-2"></i></a>
                    </button>
                </div>

                <div class="order-1 lg:order-2" data-aos="fade-left" data-aos-duration="1000">
                    <img src="assets/images/features/desktop1.gif">
                </div>
            </div>
        </div>

        <div class="xl:py-24 py-16">
            <div class="grid lg:grid-cols-2 grid-cols-1 2xl:gap-24 gap-10 items-center">

                <div>
                    <img src="assets/images/features/app4.png" data-aos="fade-right" data-aos-duration="1500">
                </div>

                <div>
                    <span class="text-sm bg-red-500/10 text-red-600 rounded-full px-3 py-1">Dịch vụ</span>
                    <h1 class="text-3xl/tight font-medium mt-3 mb-4">Thiết kế ứng dụng di động</h1>
                    <p class="text-gray-500">{{ $data->dich_vu_mobile }}</p>
                    <button class="mt-12 flex items-center">
                        <a href="#" class="border border-primary text-primary rounded-md hover:bg-primary hover:text-white hover:shadow-lg hover:shadow-primary/30 focus:shadow-none focus:outline focus:outline-primary/40 transition-all duration-500 py-2 px-4">Tìm hiểu thêm <i class="fa-solid fa-arrow-right ms-2"></i></a>
                    </button>
                </div>

            </div>
        </div>

        <div>
            <div class="grid lg:grid-cols-2 grid-cols-1 2xl:gap-24 gap-10 items-center">

                <div class="order-2 lg:order-1">
                    <span class="text-sm bg-red-500/10 text-red-600 rounded-full px-3 py-1">Dịch vụ</span>
                    <h1 class="text-3xl/tight font-medium mt-3 mb-4">Chatbot</h1>
                    <p class="text-gray-500">{{ $data->dich_vu_ai }}</p>
                    <button class="mt-12 flex items-center">
                        <a href="#" class="border border-primary text-primary rounded-md hover:bg-primary hover:text-white hover:shadow-lg hover:shadow-primary/30 focus:shadow-none focus:outline focus:outline-primary/40 transition-all duration-500 py-2 px-4">Tìm hiểu thêm <i class="fa-solid fa-arrow-right ms-2"></i></a>
                    </button>
                </div>

                <div class="order-1 lg:order-2" data-aos="fade-left" data-aos-duration="1000">
                    <img src="assets/images/features/agency2.jpg">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- =========== feature Section end =========== -->

<!-- =========== integrations Section Start =========== -->
<section class="bg-gray-100 xl:py-24 py-16">
    <div class="container" data-aos="fade-up" data-aos-duration="1500">
        <div class="text-center">
            <span class="text-xs bg-primary/10 text-primary/90 rounded-full px-3 py-1">Giới thiệu</span>
            <h1 class="text-3xl/tight font-medium mt-3 mb-4">IMTA TECH JOINT STOCK COMPANY</h1>
        </div>

        <div class="pt-16">
            <div class="grid xl:grid-cols-2 grid-cols-1 gap-7">
                <div>
                    <div class="bg-white flex items-center rounded gap-5 p-5">
                        <img src="{{ asset('assets/images/hero/wired-flat-187-suitcase.gif') }}" class="w-16">
                        <div>
                            <h1 class="mb-3">Chúng tôi là</h1>
                            <p class="text-gray-500">{{ $data->chung_toi_la }}</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="bg-white flex items-center rounded gap-5 p-5">
                        <img src="{{ asset('assets/images/hero/wired-flat-966-privacy-policy.gif') }}" class="w-16">
                        <div>
                            <h1 class="mb-3">Sứ mệnh</h1>
                            <p class="text-gray-500">{{ $data->su_menh }}</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="bg-white flex items-center rounded gap-5 p-5">
                        <img src="{{ asset('assets/images/hero/wired-flat-950-attract-customers.gif') }}" class="w-16">
                        <div>
                            <h1 class="mb-3">Vì sao bạn cần chúng tôi</h1>
                            <p class="text-gray-500">{{ $data->vi_sao_ban_can_chung_toi}}</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="bg-white flex items-center rounded gap-5 p-5">
                        <img src="{{ asset('assets/images/hero/wired-flat-1021-rules.gif') }}" class="w-16">
                        <div>
                            <h1 class="mb-3">Ưu điểm</h1>
                            <p class="text-gray-500">{{ $data->uu_diem }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- =========== integrations Section end =========== -->
@endsection
