@extends('layouts.app')

@section('content')
<!-- =========== Mobile Menu Start (Offcanvas) =========== -->
<div id="mobileMenu" class="fc-offcanvas-open:translate-x-0 translate-x-full fixed top-0 end-0 transition-all duration-200 transform h-full w-full max-w-md z-50 bg-white border-s hidden">
    <div class="flex flex-col h-full divide-y-2 divide-gray-200">
        <!-- Mobile Menu Topbar Logo (Header) -->
        <div class="p-6 flex items-center justify-between">
            <a href="index.html">
                <img src="assets/images/logo-dark.png" class="h-8" alt="Logo">
            </a>

            <button data-fc-dismiss class="flex items-center px-2">
                <i class="fa-solid fa-xmark text-xl"></i>
            </button>
        </div>

        <!-- Mobile Menu Link List -->
        <div class="p-6 overflow-scroll h-full">
            <ul class="navbar-nav flex flex-col gap-2" data-fc-type="accordion">
                <!-- Home Page Link -->
                <li class="nav-item">
                    <a href="index.html" class="nav-link">Home</a>
                </li>

                <!-- Landing Page -->
                <li class="nav-item">
                    <a href="javascript:void(0)" data-fc-type="collapse" class="nav-link">
                        Landing <i class="fa-solid fa-angle-down ms-auto align-middle transition-all fc-collapse-open:rotate-180"></i>
                    </a>

                    <ul class="hidden overflow-hidden transition-[height] duration-300 space-y-2">
                        <li class="nav-item mt-2">
                            <a class="nav-link" href="home-app.html">App</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="home-saas.html">Saas Modern</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="home-saas2.html">Saas Classic</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="home-startup.html">Startup</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="home-software.html">Software</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="home-agency.html">Agency</a>
                        </li>

                        <li class="nav-item">

                            <a class="nav-link" href="home-coworking.html">Coworking</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="home-crypto.html">Crypto</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="home-marketing.html">Marketing</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="home-portfolio.html">Portfolio</a>
                        </li>
                    </ul>
                </li>

                <!-- Inner Page -->
                <li class="nav-item">
                    <a href="javascript:void(0)" data-fc-type="collapse" class="nav-link">
                        Pages <i class="fa-solid fa-angle-down ms-auto align-middle transition-all fc-collapse-open:rotate-180"></i>
                    </a>

                    <ul class="hidden overflow-hidden transition-[height] duration-300 space-y-2">
                        <li class="nav-item mt-2">
                            <a class="nav-link" href="company.html">Company</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="career.html">Career</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="pricing.html">Pricing</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="help.html">Help</a>
                        </li>
                    </ul>
                </li>

                <!-- Blog Page -->
                <li class="nav-item">
                    <a href="javascript:void(0)" data-fc-type="collapse" class="nav-link">
                        Blog Page <i class="fa-solid fa-angle-down ms-auto align-middle transition-all fc-collapse-open:rotate-180"></i>
                    </a>

                    <ul class="hidden overflow-hidden transition-[height] duration-300 space-y-2">
                        <li class="nav-item mt-2">
                            <a class="nav-link" href="blog.html">Blog</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="blog-post.html">Blog Post</a>
                        </li>
                    </ul>
                </li>

                <!-- Portfolio Page -->
                <li class="nav-item">
                    <a href="javascript:void(0)" data-fc-type="collapse" class="nav-link">
                        Portfolio <i class="fa-solid fa-angle-down ms-auto align-middle transition-all fc-collapse-open:rotate-180"></i>
                    </a>

                    <ul class="hidden overflow-hidden transition-[height] duration-300 space-y-2">
                        <li class="nav-item mt-2">
                            <a class="nav-link" href="portfolio-grid.html">Portfolio Grid</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="portfolio-masonry.html">Portfolio Masonry</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="portfolio-item.html">Portfolio Item</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="account-confirm.html">Confirm Account</a>
                        </li>
                    </ul>
                </li>

                <!-- Auth Page -->
                <li class="nav-item">
                    <a href="javascript:void(0)" data-fc-type="collapse" class="nav-link">
                        Account <i class="fa-solid fa-angle-down ms-auto align-middle transition-all fc-collapse-open:rotate-180"></i>
                    </a>

                    <ul class="hidden overflow-hidden transition-[height] duration-300 space-y-2">
                        <li class="nav-item mt-2">
                            <a class="nav-link" href="account-login.html">Login</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="account-signup.html">Sign Up</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="account-forget-password.html">Forget Password</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="account-confirm.html">Confirm Account</a>
                        </li>
                    </ul>
                </li>

                <!-- Contact Page Link -->
                <li class="nav-item">
                    <a class="nav-link" href="contact.html">Contact us</a>
                </li>
            </ul>
        </div>

        <!-- Mobile Menu Download Button (Footer) -->
        <div class="p-6 flex items-center justify-center">
            <a href="https://1.envato.market/prompt-tailwind" target="_blank" class="bg-primary w-full text-white p-3 rounded flex items-center justify-center text-sm">Download</a>
        </div>
    </div>
</div>
<!-- =========== Mobile Menu End =========== -->

<!-- =========== Hero Section Start =========== -->
<section class="bg-gradient-to-t from-yellow-50/80 relative">

    <section class="relative pt-44 pb-40">
        <div class="container">

            <div class="grid lg:grid-cols-7 grid-cols-1 gap-16 items-center">
                <div class="lg:col-span-3 order-2 lg:order-1 text-center sm:text-start">
                    <h1 class="text-3xl/tight sm:text-4xl/tight lg:text-5xl/tight font-semibold mb-7">Smart Solution that convert Lead to
                        <span class="relative z-0 after:bg-yellow-200 after:-z-10 after:absolute after:h-6 after:w-full after:bottom-0 after:end-0">Customer</span>
                    </h1>
                    <p class="text-gray-500">An AI based solution which automatically follow ups with your leads and convert into customers</p>
                    <div class="flex gap-4 mt-16">
                        <button class="flex items-center">
                            <a href="#" class="bg-primary text-white rounded-md hover:shadow-lg hover:shadow-primary/30 focus:shadow-none focus:outline focus:outline-primary/40 transition-all duration-500 py-2 px-4">Liên hệ</a>
                        </button>
                    </div>
                </div>

                <div class="lg:col-span-4 order-1 lg:order-2" data-aos="fade-left" data-aos-duration="1000">
                    <div class="w-full">
                        <img class="w-full max-w-md float-right" src="assets/images/hero/techny-data-dashboard.gif" alt="startup1-img" data-aos="fade-left" data-aos-duration="1000">
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

<!-- =========== clients - reviews Section Start =========== -->
<!-- <section class="xl:py-24 py-16">
    <div class="container" data-aos="fade-up" data-aos-duration="1000">
        <div class="text-center">
            <div>
                <p class="text-base font-semibold">Join 10,000+ companies who trust Prompt.</p>
                <div class="flex flex-wrap md:flex-nowrap justify-center gap-10 mt-7">
                    <div>
                        <img src="assets/images/brands/amazon.svg" class="w-28">
                    </div>
                    <div>
                        <img src="assets/images/brands/google.svg" class="w-28">
                    </div>
                    <div>
                        <img src="assets/images/brands/paypal.svg" class="w-28">
                    </div>
                    <div>
                        <img src="assets/images/brands/spotify.svg" class="w-28">
                    </div>
                    <div>
                        <img src="assets/images/brands/shopify.svg" class="w-28">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- =========== clients - reviews Section End =========== -->

<!-- =========== feature Section Start =========== -->
<section class="xl:py-24 py-16 overflow-x-hidden">
    <div class="container">
        <div>
            <div class="grid lg:grid-cols-2 grid-cols-1 2xl:gap-24 gap-10 items-center">

                <div class="order-2 lg:order-1">
                    <span class="text-sm bg-red-500/10 text-red-600 rounded-full px-3 py-1">Dịch vụ</span>
                    <h1 class="text-3xl/tight font-medium mt-3 mb-4">Thiết kế website</h1>
                    <p class="text-gray-500">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quisquam, odit aut? Iste, labore fugiat eaque, odit facere cupiditate eius quo molestias modi consequatur aperiam. At veritatis reiciendis molestiae accusantium vel!</p>
                    <button class="mt-12 flex items-center">
                        <a href="#" class="border border-primary text-primary rounded-md hover:bg-primary hover:text-white hover:shadow-lg hover:shadow-primary/30 focus:shadow-none focus:outline focus:outline-primary/40 transition-all duration-500 py-2 px-4">Tìm hiểu thêm <i class="fa-solid fa-arrow-right ms-2"></i></a>
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
                    <p class="text-gray-500">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora dolorum ex quibusdam soluta? Iusto quae animi commodi possimus, culpa perspiciatis voluptas praesentium non libero cumque sit veniam esse dolorum ipsam!</p>
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
                    <p class="text-gray-500">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quisquam, odit aut? Iste, labore fugiat eaque, odit facere cupiditate eius quo molestias modi consequatur aperiam. At veritatis reiciendis molestiae accusantium vel!</p>
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
            <h1 class="text-3xl/tight font-medium mt-3 mb-4">IMTA TECH SOFTWARE</h1>
        </div>

        <div class="pt-16">
            <div class="grid xl:grid-cols-2 grid-cols-1 gap-7">
                <div>
                    <div class="bg-white flex items-center rounded gap-5 p-5">
                        <img src="assets/images/brands/slack.png" class="w-16">
                        <div>
                            <h1 class="mb-3">Chúng tôi là</h1>
                            <p class="text-gray-500">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ullam quas repellat harum accusantium sunt voluptatibus optio et non possimus nam officiis qui rerum similique eos, blanditiis pariatur sequi ex sed.</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="bg-white flex items-center rounded gap-5 p-5">
                        <img src="assets/images/brands/fb.png" class="w-16">
                        <div>
                            <h1 class="mb-3">Sứ mệnh</h1>
                            <p class="text-gray-500">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ullam quas repellat harum accusantium sunt voluptatibus optio et non possimus nam officiis qui rerum similique eos, blanditiis pariatur sequi ex sed.</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="bg-white flex items-center rounded gap-5 p-5">
                        <img src="assets/images/brands/salesforce.jpg" class="w-16">
                        <div>
                            <h1 class="mb-3">Vì sao bạn cần chúng tôi</h1>
                            <p class="text-gray-500">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ullam quas repellat harum accusantium sunt voluptatibus optio et non possimus nam officiis qui rerum similique eos, blanditiis pariatur sequi ex sed.</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="bg-white flex items-center rounded gap-5 p-5">
                        <img src="assets/images/brands/at.png" class="w-16">
                        <div>
                            <h1 class="mb-3">Ưu điểm</h1>
                            <p class="text-gray-500">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ullam quas repellat harum accusantium sunt voluptatibus optio et non possimus nam officiis qui rerum similique eos, blanditiis pariatur sequi ex sed.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- =========== integrations Section end =========== -->

<!-- =========== Pricing Section Start =========== -->
<!-- <section class="xl:py-24 py-16">
    <div class="container" data-aos="fade-up" data-aos-duration="1500">
        <div class="text-center">
            <span class="text-sm font-medium py-1 px-3 rounded-full text-primary bg-primary/10">Pricing</span>
            <h1 class="text-3xl/tight font-medium mt-3 mb-4">Pricing Plans </h1>
            <p class="text-gray-500">Pricing that <span class="text-primary">works </span> for everyone.</p>
        </div>

        <div class="pt-16 overflow-x-auto">
            <div class="inline-block overflow-hidden">
                <table class="min-w-full leading-normal">
                    <thead>
                        <tr class="text-center divide-y">
                            <th class="px-5 py-4 xl:w-2/5 w-1/2 text-xs text-start border-b-2 border-t"></th>
                            <th class="px-5 py-4 xl:w-[15%] w-1/4">
                                <h1>Starter</h1>
                                <p class="text-gray-500 text-xs">$40/mo</p>
                            </th>
                            <th class="px-5 py-4 w-1/4 border-s">
                                <h1>Professional <span class="inline-flex text-xs bg-red-500 text-white rounded-full py-1 px-3">Popular</span> </h1>
                                <p class="text-gray-500 text-xs">$60/mo</p>
                            </th>
                            <th class="px-5 py-4 w-[10%] border-s">
                                <h1>Enterprise</h1>
                                <p class="text-gray-500 text-xs">$300/mo</p>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-center divide-y-2">
                            <td class="p-3 text-start border-b">
                                <p>Landing pages</p>
                            </td>
                            <td class="p-3">
                                <span><i class="fa-solid fa-check text-green-500"></i></span>
                            </td>
                            <td class="p-3 border-s">
                                <span><i class="fa-solid fa-check text-green-500"></i></span>
                            </td>
                            <td class="p-3 border-s">
                                <span><i class="fa-solid fa-check text-green-500"></i></span>
                            </td>
                        </tr>
                        <tr class="text-center divide-y">
                            <td class="p-3 text-start border-b">
                                <p>Drag-and-drop editor</p>
                            </td>
                            <td class="p-3"></td>
                            <td class="p-3 border-s">
                                <span><i class="fa-solid fa-check text-green-500"></i></span>
                            </td>
                            <td class="p-3 border-s">
                                <span><i class="fa-solid fa-check text-green-500"></i></span>
                            </td>
                        </tr>
                        <tr class="text-center divide-y">
                            <td class="p-3 text-start border-b">
                                <p>Email marketing</p>
                            </td>
                            <td class="p-3">
                                <span><i class="fa-solid fa-check text-green-500"></i></span>
                            </td>
                            <td class="p-3 border-s">
                                <span><i class="fa-solid fa-check text-green-500"></i></span>
                            </td>
                            <td class="p-3 border-s">
                                <span><i class="fa-solid fa-check text-green-500"></i></span>
                            </td>
                        </tr>
                        <tr class="text-center divide-y">
                            <td class="p-3 text-start border-b">
                                <p>Ad retargeting</p>
                            </td>
                            <td class="p-3">
                                <span class="text-xs inline-flex bg-primary text-white rounded-full py-1 px-3">Add-on Available</span>
                            </td>
                            <td class="p-3 border-s"></td>
                            <td class="p-3 border-s">
                                <span><i class="fa-solid fa-check text-green-500"></i></span>
                            </td>
                        </tr>
                        <tr class="text-center divide-y">
                            <td class="p-3 text-start border-b">
                                <p>Messenger integration</p>
                            </td>
                            <td class="p-3"></td>
                            <td class="p-3 border-s"></td>
                            <td class="p-3 border-s">
                                <span><i class="fa-solid fa-check text-green-500"></i></span>
                            </td>
                        </tr>
                        <tr class="text-center divide-y">
                            <td class="p-3 text-start border-b">
                                <p>Live chat</p>
                            </td>
                            <td class="p-3"></td>
                            <td class="p-3 border-s">
                                <span class="text-xs inline-flex bg-primary text-white rounded-full py-1 px-3">Add-on Available</span>
                            </td>
                            <td class="p-3 border-s">
                                <span><i class="fa-solid fa-check text-green-500"></i></span>
                            </td>
                        </tr>
                        <tr class="text-center divide-y">
                            <td class="p-3 text-start border-b">
                                <p>Conversational bots</p>
                            </td>
                            <td class="p-3"></td>
                            <td class="p-3 border-s">
                                <span><i class="fa-solid fa-check text-green-500"></i></span>
                            </td>
                            <td class="p-3 border-s">
                                <span><i class="fa-solid fa-check text-green-500"></i></span>
                            </td>
                        </tr>
                        <tr class="text-center divide-y">
                            <td class="p-3 text-start border-b">
                                <p>SEO recommendations & optimizations</p>
                            </td>
                            <td class="p-3"></td>
                            <td class="p-3 border-s">
                                <span><i class="fa-solid fa-check text-green-500"></i></span>
                            </td>
                            <td class="p-3 border-s">
                                <span><i class="fa-solid fa-check text-green-500"></i></span>
                            </td>
                        </tr>
                        <tr class="divide-y">
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>

</section> -->
<!-- =========== Pricing Section  End=========== -->
@endsection