<!-- =========== footer Section Start =========== -->
<footer class="bg-gray-100">
    <div class="py-6">
        <div class="container">
            <div class="grid lg:grid-cols-2 items-center">
                <div>
                    <h1 class="text-2xl font-medium mt-3 mb-2">Bắt đầu ngay</h1>
                    <p class="text-slate-400">Sử dụng dịch vụ của chúng tôi ngay bây giờ</p>
                </div>
                <div class="flex flex-wrap items-center justify-start lg:justify-end gap-7 mt-5 lg:mt-0">
                    <button class="flex items-center">
                        <a href="https://www.facebook.com/imtatechcom/" target="_blank" class="bg-primary text-white rounded-full hover:shadow-lg hover:shadow-primary/30 focus:shadow-none focus:outline focus:outline-primary/40 transition-all duration-500 py-2 px-4">Liên hệ</a>
                    </button>
                    <a href="https://www.facebook.com/imtatechcom/" target="_blank" class="hover:text-primary transition-all duration-500">Chat</a>
                </div>
            </div>
        </div>
    </div>

    <div class="border-b"></div>

    <div class="container">
        <div class="grid lg:grid-cols-2 grid-cols-1 gap-14 py-6">
            <div>
                <a href="index.html" class="flex items-center gap-2">
                    <img src="{{ asset('assets/images/logo.webp') }}" class="h-12">
                    <span class="font-medium">IMTA TECH</span>
                </a>
                <p class="text-gray-500/80 mt-5 w-4/5">{{ \Artesaos\SEOTools\Facades\SEOMeta::getDescription() }}</p>
            </div>

            <div>
                <div class="flex flex-col sm:flex-row gap-14 flex-wrap sm:flex-nowrap justify-between">
                    <div>
                        <div class="flex flex-col gap-3">
                            <h5 class="mb-3 uppercase">Platform</h5>
                            <div class="text-gray-500/80"><a href="javascript:void(0);">Demo</a></div>
                            <div class="text-gray-500/80"><a href="javascript:void(0);">Pricing</a></div>
                            <div class="text-gray-500/80"><a href="javascript:void(0);">Integrations</a></div>
                            <div class="text-gray-500/80"><a href="javascript:void(0);">Status</a></div>
                        </div>
                    </div>

                    <div>
                        <div class="flex flex-col gap-3">
                            <h5 class="mb-3 uppercase">Company</h5>
                            <div class="text-gray-500/80"><a href="javascript:void(0);">About us</a></div>
                            <div class="text-gray-500/80"><a href="javascript:void(0);">Career</a></div>
                            <div class="text-gray-500/80"><a href="javascript:void(0);">Contact Us</a></div>
                        </div>
                    </div>

                    <div>
                        <div class="flex flex-col gap-3">
                            <h5 class="mb-3 uppercase">Legal</h5>
                            <div class="text-gray-500/80"><a href="javascript:void(0);">Usage Policy</a></div>
                            <div class="text-gray-500/80"><a href="javascript:void(0);">Privacy Policy</a></div>
                            <div class="text-gray-500/80"><a href="javascript:void(0);">Terms of Service</a></div>
                            <div class="text-gray-500/80"><a href="javascript:void(0);">Trust</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="border-b"></div>

        <div class="grid sm:grid-cols-2 text-center sm:text-start gap-6 py-5">
            <div>
                <p class=" text-sm text-slate-500">
                    <script>document.write(new Date().getFullYear())</script>© IMTA TECH. All rights reserved.
                    by <a href="{{ route('landing.home') }}" class="text-gray-800 hover:text-primary transition-all font-medium">IMTA TECH</a>
                </p>
            </div>

            <div class="flex justify-center sm:justify-end gap-7">
                <div>
                    <a href="https://www.facebook.com/imtatechcom/" target="_blank">
                        <svg class="w-5 h-5 text-slate-500/90 hover:text-primary transition-all" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>

</footer>
<!-- =========== footer Section end =========== -->
