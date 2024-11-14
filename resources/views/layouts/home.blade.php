<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="{{ asset('public/product/img/apple-icon.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('public/product/img/favicon.ico') }}">

    <link rel="stylesheet" href="{{ asset('public/product/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('public/product/css/templatemo.css') }}">
    <link rel="stylesheet" href="{{ asset('public/product/css/custom.css') }}">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="{{ asset('public/product/css/fontawesome.min.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('public/product/css/slick.min.css') }} ">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/product/css/slick-theme.css') }} ">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- slide product --}}
    <link rel="stylesheet" href="https://unpkg.com/flickity@2.0.11/dist/flickity.min.css">
    <link rel="stylesheet" href="{{ asset('public/product/css/style.css') }}">
    <script src="https://unpkg.com/scrollreveal"></script>
    @stack('stile')

</head>

<body>
    <!-- Start Top Nav -->
    <!-- Close Top Nav -->


    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light shadow">
        <div class="container d-flex justify-content-between align-items-center">

            <a class="navbar-brand text-success logo h1 align-self-center" href="{{ asset('/') }}">
                Zay
            </a>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse"
                data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between"
                id="templatemo_main_nav">
                <div class="flex-fill">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}">Trang chủ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('about') }}">Giới Thiệu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('products') }}">Sản Phẩm</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('blog') }}">blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('contact') }}">Liên Hệ</a>
                        </li>

                    </ul>
                </div>
                <div class="navbar align-self-center d-flex">
                    <div class="d-lg-none flex-sm-fill mt-3 mb-4 col-7 col-sm-auto pr-3">
                        <div class="input-group">
                            <input type="text" class="form-control" id="inputMobileSearch" placeholder="Search ...">
                            <div class="input-group-text">
                                <i class="fa fa-fw fa-search"></i>
                            </div>
                        </div>
                    </div>
                    <a class="nav-icon d-none d-lg-inline" href="#" data-bs-toggle="modal"
                        data-bs-target="#templatemo_search">
                        <i class="fa fa-fw fa-search text-dark mr-2"></i>
                    </a>
                    <a class="nav-icon position-relative text-decoration-none" href="{{ asset('/cart/show') }}">
                        <i class="fa fa-fw fa-cart-arrow-down text-dark mr-1"></i>
                        <span
                            class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark">{{ Cart::count() }}</span>
                    </a>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            @if (Route::has('login'))
                                @auth
                                @else
                            <li class="nav-item">
                                <a href="{{ route('login') }}" class="nav-link ">
                                    Đăng nhập
                                </a>
                            </li>

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a href="{{ route('register') }}" class="nav-link ">
                                        Đăng ký
                                    </a>
                                </li>
                            @endif
                        @endauth
                        @endif

                        @if (Auth::user())
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                {{ Auth::user()->name }}
                            </a>
                        @endif

                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="">Tài khoản của tôi</a></li>
                            <li><a class="dropdown-item" href="{{ route('order.show') }}">Đơn mua</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();"
                                        class="dropdown-item">
                                        {{ __('Thoát') }}
                                    </x-dropdown-link>
                                </form>
                            </li>
                        </ul>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </nav>
    <!-- Close Header -->

    @yield('content');


    <!-- Start Footer -->
    <footer class="bg-dark" id="tempaltemo_footer">
        <div class="container">
            <div class="row">

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-success border-bottom pb-3 border-light logo">Zay Shop</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li>
                            <i class="fas fa-map-marker-alt fa-fw"></i>
                            123 Consectetur at ligula 10660
                        </li>
                        <li>
                            <i class="fa fa-phone fa-fw"></i>
                            <a class="text-decoration-none" href="tel:0377519330">0377519330</a>
                        </li>
                        <li>
                            <i class="fa fa-envelope fa-fw"></i>
                            <a class="text-decoration-none" href="mailto:info@company.com">info@company.com</a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-light border-bottom pb-3 border-light">Products</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li><a class="text-decoration-none" href="#">Luxury</a></li>
                        <li><a class="text-decoration-none" href="#">Sport Wear</a></li>
                        <li><a class="text-decoration-none" href="#">Men's Shoes</a></li>
                        <li><a class="text-decoration-none" href="#">Women's Shoes</a></li>
                        <li><a class="text-decoration-none" href="#">Popular Dress</a></li>
                        <li><a class="text-decoration-none" href="#">Gym Accessories</a></li>
                        <li><a class="text-decoration-none" href="#">Sport Shoes</a></li>
                    </ul>
                </div>

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-light border-bottom pb-3 border-light">Further Info</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li><a class="text-decoration-none" href="#">Home</a></li>
                        <li><a class="text-decoration-none" href="#">About Us</a></li>
                        <li><a class="text-decoration-none" href="#">Shop Locations</a></li>
                        <li><a class="text-decoration-none" href="#">FAQs</a></li>
                        <li><a class="text-decoration-none" href="#">Contact</a></li>
                    </ul>
                </div>

            </div>

            <div class="row text-light mb-4">
                <div class="col-12 mb-3">
                    <div class="w-100 my-3 border-top border-light"></div>
                </div>
                <div class="col-auto me-auto">
                    <ul class="list-inline text-left footer-icons">
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="http://facebook.com/"><i
                                    class="fab fa-facebook-f fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank"
                                href="https://www.instagram.com/"><i class="fab fa-instagram fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://twitter.com/"><i
                                    class="fab fa-twitter fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank"
                                href="https://www.linkedin.com/"><i class="fab fa-linkedin fa-lg fa-fw"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-auto">
                    <label class="sr-only" for="subscribeEmail">Email address</label>
                    <div class="input-group mb-2">
                        <input type="text" class="form-control bg-dark border-light" id="subscribeEmail"
                            placeholder="Email address">
                        <div class="input-group-text btn-success text-light">Subscribe</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-100 bg-black py-3">
            <div class="container">
                <div class="row pt-2">
                    <div class="col-12">
                        <p class="text-left text-light">
                            Copyright &copy; 2021 Company Name
                            | Designed by
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!-- End Footer -->

    <!-- Start Script -->
    <script src=" {{ asset('public/product/js/jquery-1.11.0.min.js') }} "></script>
    <script src=" {{ asset('public/product/js/jquery-migrate-1.2.1.min.js') }} "></script>
    <script src=" {{ asset('public/product/js/bootstrap.bundle.min.js') }} "></script>
    <script src=" {{ asset('public/product/js/templatemo.js') }} "></script>
    <script src=" {{ asset('public/product/js/custom.js') }} "></script>
        <!-- Start Slider Script -->
    <script src="{{ asset('public/product/js/slick.min.js') }} "></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://unpkg.com/flickity@2.0.11/dist/flickity.pkgd.min.js"></script>
    <script>
        @if (session('message'))
            Swal.fire({
                icon: "success",
                title: "Thành Công",
                text: "{{ session('message') }}",
            });
        @endif
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            ScrollReveal().reveal('.widget2-left', {
                origin: 'left',
                distance: '345px',
                duration: 1000,
                easing: 'ease-in-out',
                interval: 100,
            });
            ScrollReveal().reveal('.widget2-left-lv2', {
                origin: 'left',
                distance: '345px',
                duration: 1500,
                easing: 'ease-in-out',
                interval: 100,
            });
            ScrollReveal().reveal('.widget2-right', {
                origin: 'right',
                distance: '345px',
                duration: 1000,
                easing: 'ease-in-out',
                interval: 100,
            });
            ScrollReveal().reveal('.widget2-right-lv2', {
                origin: 'right',
                distance: '345px',
                duration: 1500,
                easing: 'ease-in-out',
                interval: 100,
            });
            ScrollReveal().reveal('.widget2-bottom', {
                origin: 'bottom',
                distance: '345px',
                duration: 1500,
                easing: 'ease-in-out',
                interval: 100,
            });

            ScrollReveal().reveal('.widget2-top', {
                origin: 'top',
                distance: '245px',
                duration: 1000,
                easing: 'ease-in-out',
                interval: 100,
            });
            ScrollReveal().reveal('.widget2-top-lv2', {
                origin: 'top',
                distance: '245px',
                duration: 1500,
                easing: 'ease-in-out',
                interval: 100,
            });


        });
    </script>
    @stack('script')
    <!-- End Script -->
</body>

</html>
