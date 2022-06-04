<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>@yield('title')</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/assets/img/favicon.png') }}">
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/fontawesome-all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/slick.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/default.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/responsive.css') }}">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" >

    </head>
    <body>
      
        <!-- preloader-start -->
        <div id="preloader">
            <div class="rasalina-spin-box"></div>
        </div>
        <!-- preloader-end -->

		<!-- Scroll-top -->
        <button class="scroll-top scroll-to-target" data-target="html">
            <i class="fas fa-angle-up"></i>
        </button>
        <!-- Scroll-top-end-->

        <!-- header-area -->
        <header>
            <div id="sticky-header" class="menu__area transparent-header">
                <div class="container custom-container">
                    <div class="row">
                        <div class="col-12">
                            <div class="mobile__nav__toggler"><i class="fas fa-bars"></i></div>
                            <div class="menu__wrap">
                                <nav class="menu__nav">
    <div class="logo">
        <a href="index.html" class="logo__black"><img src="  {{ asset('frontend/assets/img/logo/logo_black.png') }}" alt=""></a>
        <a href="index.html" class="logo__white"><img src="  {{ asset('frontend/ assets/img/logo/logo_white.png') }}" alt=""></a>
    </div>
                                    <div class="navbar__wrap main__menu d-none d-xl-flex">
                                        <ul class="navigation">
                                            <li class="active"><a href="/">Home</a></li>
                                            <li><a route="/about">About</a></li>
                                            <li><a href="services-details.html">Services</a></li>
                                            <li class="menu-item-has-children"><a href="{{ route('home.portfolio') }}">Portfolio</a>
                                                
                                            </li>
                                            <li class="menu-item-has-children"><a href="{{ route('home.blog') }}"> Blog</a>
                                                
                                            </li>
                                            <li><a href="{{ route('contact.me') }}">contact me</a></li>
                                        </ul>
                                    </div>
                                    
                                </nav>
                            </div>
                            <!-- Mobile Menu  -->
                            <div class="mobile__menu">
                                <nav class="menu__box">
                                    <div class="close__btn"><i class="fal fa-times"></i></div>
                                    <div class="nav-logo">   
                                        <a href="index.html" class="logo__black"><img src="{{ asset('frontend/assets/img/logo/logo_black.png') }} " alt=""></a>
                                        <a href="index.html" class="logo__white"><img src="{{ asset('frontend/assets/img/logo/logo_white.png') }}" alt=""></a>
                                    </div>
                                    <div class="menu__outer">
                                        <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
                                    </div>
                                    <div class="social-links">
                                        <ul class="clearfix">
                                            <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                            <li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
                                            <li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
                                            <li><a href="#"><span class="fab fa-instagram"></span></a></li>
                                            <li><a href="#"><span class="fab fa-youtube"></span></a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            <div class="menu__backdrop"></div>
                            <!-- End Mobile Menu -->
                        </div>
                    </div>
                </div>
            </div>
        </header>

        @include('frontend.body.header')
        <!-- header-area-end -->

        <!-- main-area -->
        <main>

            @yield('main')

    </main>
        <!-- main-area-end -->



        <!-- Footer-area -->
        @include('frontend.body.footer')

        <!-- Footer-area-end -->




		<!-- JS here -->
        <script src=" {{ asset('frontend/assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
        <script src=" {{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
        <script src=" {{ asset('frontend/assets/js/isotope.pkgd.min.js') }}"></script>
        <script src=" {{ asset('frontend/assets/js/imagesloaded.pkgd.min.js') }}"></script>
        <script src=" {{ asset('frontend/assets/js/jquery.magnific-popup.min.js') }}"></script>
        <script src=" {{ asset('frontend/assets/js/element-in-view.js') }}"></script>
        <script src=" {{ asset('frontend/assets/js/slick.min.js') }}"></script>
        <script src=" {{ asset('frontend/assets/js/ajax-form.js') }}"></script>
        <script src=" {{ asset('frontend/assets/js/wow.min.js') }}"></script>
        <script src=" {{ asset('frontend/assets/js/plugins.js') }}"></script>
        <script src=" {{ asset('frontend/assets/js/main.js') }}"></script>
        
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

        <script>
         @if(Session::has('message'))
         var type = "{{ Session::get('alert-type','info') }}"
         switch(type){
            case 'info':
            toastr.info(" {{ Session::get('message') }} ");
            break;
            case 'success':
            toastr.success(" {{ Session::get('message') }} ");
            break;
            case 'warning':
            toastr.warning(" {{ Session::get('message') }} ");
            break;
            case 'error':
            toastr.error(" {{ Session::get('message') }} ");
            break; 
         }
         @endif 
        </script>
        

    </body>
</html>
