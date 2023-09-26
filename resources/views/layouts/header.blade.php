<!-- =========== Navbar Start =========== -->
<header id="navbar"
        class="@@link-color fixed top-0 inset-x-0 flex items-center z-40 w-full lg:bg-transparent bg-white transition-all py-5">
    <div class="container">
        <nav class="flex items-center">
            <!-- Navbar Brand Logo -->
            <a href="{{ route('landing.home') }}" class="flex items-center gap-2">
                <img src="{{ asset('assets/images/logo.jpg') }}" class="h-10 logo-dark rounded-full" alt="Logo Dark">
                <img src="{{ asset('assets/images/logo.jpg') }}" class="h-10 logo-light rounded-full" alt="Logo Light">
                <span class="font-medium">IMTA TECH</span>
            </a>

            <!-- Nevigation Menu -->
            <div class="hidden lg:block ms-auto">
                <ul class="navbar-nav flex gap-x-3 items-center justify-center">
                    <!-- Home Page Link -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('landing.home') }}">Trang chủ</a>
                    </li>

                    <!-- Home Page Dropdown -->
                    <li class="nav-item">
                        <a href="javascript:void(0);"
                           class="nav-link after:absolute hover:after:-bottom-10 after:inset-0"
                           data-fc-type="dropdown" data-fc-trigger="hover" data-fc-target="landingDropdownMenu"
                           data-fc-placement="bottom">
                            Dịch vụ <i class="fa-solid fa-angle-down ms-2 align-middle"></i>
                        </a>

                        <div id="landingDropdownMenu"
                             class="hidden opacity-0 mt-4 fc-dropdown-open:opacity-100 fc-dropdown-open:translate-y-0 translate-y-3 origin-center transition-all bg-white rounded-lg shadow-lg border p-2 w-72 fc-dropdown-open:grid gap-1.5">
                            <div class="nav-item">
                                <a class="nav-link" href="{{ route('landing.web') }}">
                                    <div class="flex items-center -ms-1.5">
                                            <span
                                                class="bg-green-500/20 flex justify-center items-center w-8 h-8 shadow rounded me-3">
                                                <svg class="text-green-500 w-6 h-6" viewBox="0 0 24 24" version="1.1"
                                                     xmlns="http://www.w3.org/2000/svg"
                                                     xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect id="bound" x="0" y="0" width="24" height="24"></rect>
                                                        <path
                                                            d="M6,8 L6,16 L18,16 L18,8 L6,8 Z M20,16 L21.381966,16 C21.7607381,16 22.1070012,16.2140024 22.2763932,16.5527864 L22.5,17 C22.6706654,17.3413307 22.5323138,17.7563856 22.190983,17.927051 C22.0950363,17.9750244 21.9892377,18 21.881966,18 L2.11803399,18 C1.73641461,18 1.42705098,17.6906364 1.42705098,17.309017 C1.42705098,17.2017453 1.45202663,17.0959467 1.5,17 L1.7236068,16.5527864 C1.89299881,16.2140024 2.23926193,16 2.61803399,16 L4,16 L4,8 C4,6.8954305 4.8954305,6 6,6 L18,6 C19.1045695,6 20,6.8954305 20,8 L20,16 Z"
                                                            id="Combined-Shape" fill="currentColor"></path>
                                                        <polygon id="Combined-Shape" fill="currentColor" opacity="0.3"
                                                                 points="6 8 6 16 18 16 18 8"></polygon>
                                                    </g>
                                                </svg>
                                            </span>
                                        <div class="flex-grow-1">Thiết kế website</div>
                                    </div>
                                </a>
                            </div>
                            @if(false)
                                <div class="nav-item">
                                    <a class="nav-link" href="{{ route('landing.mobile') }}">
                                        <div class="flex items-center -ms-1.5">
                                            <span
                                                class="bg-blue-600/10 flex justify-center items-center w-8 h-8 shadow rounded me-3">
                                                <svg class="text-blue-600 w-6 h-6" viewBox="0 0 24 24" version="1.1"
                                                     xmlns="http://www.w3.org/2000/svg"
                                                     xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect id="bound" x="0" y="0" width="24" height="24"></rect>
                                                        <path
                                                            d="M8,2.5 C7.30964406,2.5 6.75,3.05964406 6.75,3.75 L6.75,20.25 C6.75,20.9403559 7.30964406,21.5 8,21.5 L16,21.5 C16.6903559,21.5 17.25,20.9403559 17.25,20.25 L17.25,3.75 C17.25,3.05964406 16.6903559,2.5 16,2.5 L8,2.5 Z"
                                                            id="Combined-Shape" fill="currentColor"
                                                            opacity="0.3"></path>
                                                        <path
                                                            d="M8,2.5 C7.30964406,2.5 6.75,3.05964406 6.75,3.75 L6.75,20.25 C6.75,20.9403559 7.30964406,21.5 8,21.5 L16,21.5 C16.6903559,21.5 17.25,20.9403559 17.25,20.25 L17.25,3.75 C17.25,3.05964406 16.6903559,2.5 16,2.5 L8,2.5 Z M8,1 L16,1 C17.5187831,1 18.75,2.23121694 18.75,3.75 L18.75,20.25 C18.75,21.7687831 17.5187831,23 16,23 L8,23 C6.48121694,23 5.25,21.7687831 5.25,20.25 L5.25,3.75 C5.25,2.23121694 6.48121694,1 8,1 Z M9.5,1.75 L14.5,1.75 C14.7761424,1.75 15,1.97385763 15,2.25 L15,3.25 C15,3.52614237 14.7761424,3.75 14.5,3.75 L9.5,3.75 C9.22385763,3.75 9,3.52614237 9,3.25 L9,2.25 C9,1.97385763 9.22385763,1.75 9.5,1.75 Z"
                                                            id="Combined-Shape" fill="currentColor"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                            <div class="flex-grow-1">
                                                Ứng dụng di động
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="nav-item">
                                    <a class="nav-link" href="{{ route('landing.ai') }}">
                                        <div class="flex items-center -ms-1.5">
                                            <span
                                                class="bg-blue-500/10 flex justify-center items-center w-8 h-8 shadow rounded me-3">
                                                <svg class="text-blue-500 w-6 h-6" viewBox="0 0 24 24" version="1.1"
                                                     xmlns="http://www.w3.org/2000/svg"
                                                     xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <rect id="bound" x="0" y="0" width="24" height="24"></rect>
                                                        <path
                                                            d="M12.7037037,14 L15.6666667,10 L13.4444444,10 L13.4444444,6 L9,12 L11.2222222,12 L11.2222222,14 L6,14 C5.44771525,14 5,13.5522847 5,13 L5,3 C5,2.44771525 5.44771525,2 6,2 L18,2 C18.5522847,2 19,2.44771525 19,3 L19,13 C19,13.5522847 18.5522847,14 18,14 L12.7037037,14 Z"
                                                            id="Combined-Shape" fill="currentColor"
                                                            opacity="0.3"></path>
                                                        <path
                                                            d="M9.80428954,10.9142091 L9,12 L11.2222222,12 L11.2222222,16 L15.6666667,10 L15.4615385,10 L20.2072547,6.57253826 C20.4311176,6.4108595 20.7436609,6.46126971 20.9053396,6.68513259 C20.9668779,6.77033951 21,6.87277228 21,6.97787787 L21,17 C21,18.1045695 20.1045695,19 19,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,6.97787787 C3,6.70173549 3.22385763,6.47787787 3.5,6.47787787 C3.60510559,6.47787787 3.70753836,6.51099993 3.79274528,6.57253826 L9.80428954,10.9142091 Z"
                                                            id="Combined-Shape" fill="currentColor"></path>
                                                    </g>
                                                </svg>
                                            </span>
                                            <div class="flex-grow-1">AI Chatbot</div>
                                        </div>
                                    </a>
                                </div>
                            @endif
                        </div>
                    </li>

                    <!-- Inner Page Dropdown -->
                    <li class="nav-item">
                        <a href="javascript:void(0);"
                           class="nav-link after:absolute hover:after:-bottom-10 after:inset-0"
                           data-fc-trigger="hover" data-fc-target="innerPageDropdownMenu" data-fc-type="dropdown"
                           data-fc-placement="bottom">
                            Liên kết <i class="fa-solid fa-angle-down ms-2 align-middle"></i>
                        </a>

                        <div id="innerPageDropdownMenu"
                             class="hidden opacity-0 mt-4 fc-dropdown-open:opacity-100 fc-dropdown-open:translate-y-0 translate-y-3 origin-center transition-all bg-white rounded-lg shadow-lg border p-2 w-48 space-y-1.5">
                            <div class="nav-item">
                                <a class="nav-link" href="{{ route('landing.about_us') }}">Về chúng tôi</a>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('posts.index') }}">Bài viết</a>
                    </li>
                </ul>
            </div>

            <!-- Download Button -->
            <div class="hidden lg:flex items-center ms-3">
                <a href="https://www.facebook.com/imtatechcom/" target="_blank"
                   class="bg-primary text-white px-4 py-2 rounded inline-flex items-center text-sm">Liên hệ</a>
            </div>

            <!-- Moblie Menu Toggle Button (Offcanvas Button) -->
            <div class="lg:hidden flex items-center ms-auto px-2.5">
                <button type="button" data-fc-target="mobileMenu" data-fc-type="offcanvas">
                    <i class="fa-solid fa-bars text-2xl text-gray-500"></i>
                </button>
            </div>
        </nav>
    </div>
</header>
<!-- =========== Navbar End =========== -->

<!-- =========== Mobile Menu Start (Offcanvas) =========== -->
<div id="mobileMenu"
     class="fc-offcanvas-open:translate-x-0 translate-x-full fixed top-0 end-0 transition-all duration-200 transform h-full w-full max-w-md z-50 bg-white border-s hidden">
    <div class="flex flex-col h-full divide-y-2 divide-gray-200">
        <!-- Mobile Menu Topbar Logo (Header) -->
        <div class="p-6 flex items-center justify-between">
            <a href="{{ route('landing.home') }}">
                <img src="{{ asset('assets/images/logo.jpg') }}" class="h-8 rounded-full" alt="Logo">
            </a>

            <button data-fc-dismiss class="flex items-center px-2">
                <i class="fa-solid fa-xmark text-xl"></i>
            </button>
        </div>

        <!-- Mobile Menu Link List -->
        <div class="p-6 overflow-auto h-full">
            <ul class="navbar-nav flex flex-col gap-2" data-fc-type="accordion">
                <!-- Home Page Link -->
                <li class="nav-item">
                    <a href="{{ route('landing.home') }}" class="nav-link">Trang chủ</a>
                </li>

                <!-- Landing Page -->
                <li class="nav-item">
                    <a href="javascript:void(0)" data-fc-type="collapse" class="nav-link">
                        Dịch vụ <i
                            class="fa-solid fa-angle-down ms-auto align-middle transition-all fc-collapse-open:rotate-180"></i>
                    </a>

                    <ul class="hidden overflow-hidden transition-[height] duration-300 space-y-2">
                        <li class="nav-item mt-2">
                            <a class="nav-link" href="home-app.html">Thiết kế website</a>
                        </li>

                        @if(false)
                            <li class="nav-item">
                                <a class="nav-link" href="home-saas.html">Ứng dụng di động</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="home-saas2.html">AI Chatbot</a>
                            </li>
                        @endif
                    </ul>
                </li>

                <!-- Inner Page -->
                <li class="nav-item">
                    <a href="javascript:void(0)" data-fc-type="collapse" class="nav-link">
                        Liên kết <i
                            class="fa-solid fa-angle-down ms-auto align-middle transition-all fc-collapse-open:rotate-180"></i>
                    </a>

                    <ul class="hidden overflow-hidden transition-[height] duration-300 space-y-2">
                        <li class="nav-item mt-2">
                            <a class="nav-link" href="#">Về chúng tôi</a>
                        </li>
                    </ul>
                </li>

                <!-- Blog Page -->
                <li class="nav-item">
                    <a href="{{ route('posts.index') }}" class="nav-link">Bài viết</a>
                </li>
            </ul>
        </div>

        <!-- Mobile Menu Download Button (Footer) -->
        <div class="p-6 flex items-center justify-center">
            <a href="https://www.facebook.com/imtatechcom/" target="_blank"
               class="bg-primary w-full text-white p-3 rounded flex items-center justify-center text-sm">Liên hệ</a>
        </div>
    </div>
</div>
<!-- =========== Mobile Menu End =========== -->
