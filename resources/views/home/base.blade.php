<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <meta name="og:title" content="{{$siteName}}"/>
    <meta name="og:type" content="company"/>
    <meta name="og:url" content="/"/>
    <meta name="og:image" content="{{asset('home/images/'.$web->favicon)}}"/>
    <meta name="og:site_name" content="{{$siteName}}"/>
    <meta name="og:description" content="Financial and Investment company made just for you."/>
    <meta name="description" content="{{$web->description}}">
    <meta name="keywords" content="business, marketing, agency">
    <title> {{$siteName}} | {{$pageName}}</title>
    <!-- favicons Icons -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('home/images/'.$web->favicon)}}" />
    @stack('css')

    <!-- Stylesheets -->
    <link href="{{asset('home/css/main.css')}}" rel="stylesheet">

</head>

<body>
@inject('injected','App\Defaults\Custom')

<div class="page-wrapper">

    <!-- Preloader -->
    <div id="preloader">
        <div class="preloader-inner">
            <div class="spinner"></div>
            <div class="loading-text">

                @foreach(str_split($siteName) as $letter)
                    <span data-preloader-text="{{$letter}}" class="characters">{{$letter}}</span>
                @endforeach


            </div>
        </div>
    </div>

    <!-- Main Header -->
    <header class="main-header two">

        <!-- Header Top -->
        <div class="header-top">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center flex-wrap">
                    <!-- Left Box -->
                    <div class="left-box d-flex align-items-center">
                        <!-- Social Box -->
                        <ul class="social-box">
                            <li><a href="https://www.facebook.com/" class="fa fa-facebook-f"></a></li>
                            <li><a href="https://www.instagram.com/" class="fa fa-instagram"></a></li>
                            <li><a href="https://www.twitter.com/" class="fa fa-twitter"></a></li>
                            <li><a href="https://www.linkedin.com/" class="fa fa-linkedin"></a></li>
                        </ul>
                    </div>

                    <!-- Right Box -->
                    <div class="right-box d-flex align-items-center">
                        <ul class="info-list">
                            <li><a href="mailto:{{ $web->email }}"><span class="icon fa fa-envelope"></span>{{ $web->email }}</a></li>
                            <li><a href="#"><span class="icon fa fa-map-marker"></span>{!!  $web->address !!}</a></li>
                        </ul>

                        <!-- Button Box -->
                        <div class="button-box d-none d-lg-flex">
                            <a href="{{ route('register') }}" class="btn clearfix">
										<span class="btn-wrap">
											<span class="text-one">Get Started</span>
											<span class="text-two">Get Started</span>
										</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Header Lower -->
        <div class="header-lower">

            <div class="container">
                <div class="inner-container d-flex justify-content-between align-items-center">

                    <div class="logo-box">
                        <!-- Logo -->
                        <div class="logo"><a href="{{ url('/') }}"><img src="{{asset('home/images/'.$web->logo)}}" alt="img" title=""></a></div>
                    </div>
                    <div class="nav-outer d-flex align-items-center">

                        <!-- Main Menu -->
                        <nav class="main-menu d-none d-lg-block">
                            <div class="navbar-collapse collapse clearfix" >
                                <ul class="navigation clearfix">
                                    <li><a href="{{ url('/') }}">Home</a></li>
                                    <li><a href="{{ url('about') }}">About</a></li>
                                    <li class="dropdown"><a href="#">Services</a>
                                        <ul>
                                            @foreach($injected->getServices() as $service)
                                                <li><a href="{{route('service.details',['id'=>$service->id])}}">{{$service->title}}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#">Pages</a>
                                        <ul>
                                            <li><a href="{{url('plans')}}">Plans</a></li>
                                            <li><a href="{{url('faqs')}}">Frequently Asked Questions</a></li>
                                            <li><a href="{{url('terms')}}">Terms & Conditions</a></li>
                                            <li><a href="{{url('privacy')}}">Privacy policy</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#">Account</a>
                                        <ul>
                                            <li><a href="{{route('login')}}" >Login</a></li>
                                            <li><a href="{{route('register')}}">Register</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="{{url('contact')}}">Contact</a></li>
                                </ul>
                            </div>

                        </nav>
                        <!-- Main Menu End-->

                        <!-- Outer Box -->
                        <div class="outer-box d-flex align-items-center">

                            <!-- Aside Panel -->
                            <a href="#" class="aside_open d-none d-sm-block"><img src="{{asset('home/images/icons/menu.png')}}" alt="img"></a>

                            <!-- Responsive Menu -->
                            <button class="ma5menu__toggle d-lg-none d-block ms-3" type="button">
                                <i class="bi bi-list"></i>
                            </button>
                        </div>
                        <!-- End Outer Box -->

                    </div>

                </div>

            </div>
        </div>
        <!-- End Header Lower -->

    </header>
    <!-- End Main Header -->

    <!-- Aside Information -->
    <div class="aside_info">
        <div class="aside_close"><i class="fa fa-close"></i></div>
        <div class="logo-side">
            <a href="{{ url('/') }}">
                <img src="{{asset('home/images/'.$web->logo)}}" alt="img">
            </a>
        </div>
        <div class="side-about-info">
            <h5>About Us</h5>
            <p>
                Founded in 2014, we are a global investment agency helping individuals build their financial dreams into reality.
            </p>
            <p>
                From a humble beginning, we have grown to become a notable force in the investment industry with over 40K+ users.
            </p>
        </div>

        <div class="side-contact-info">
            <h5>Contact Us</h5>
            <p><a href="mailto:{{$web->email}}">{{$web->email}}</a></p>
            @if($web->phone)
                <p>{{$web->phone}}</p>
            @endif
            <p>{!! $web->address !!}</p>
        </div>

        <div class="aside-social">
            <ul class="d-flex align-items-center justify-content-center">
                <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li class="youtube"><a href="#"><i class="fa fa-youtube"></i></a></li>
                <li class="instagram"><a href="#"><i class="fa fa-instagram"></i></a></li>
                <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>
        </div>
    </div>


    @yield('content')


    <!-- Main Footer -->
    <footer class="main-footer">
        <div class="container">

            <!-- Upper Box -->
            <div class="upper-box">
                <div class="row clearfix align-items-center">
                    <!-- Logo Column -->
                    <div class="logo-column col-lg-3 col-md-12 col-sm-12">
                        <div class="logo"><a href="{{ url('/') }}"><img src="{{asset('home/images/'.$web->logo)}}" alt="img" title=""></a></div>
                    </div>
                    <!-- Info Column -->
                    <div class="info-column col-lg-9 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="pattern-layer" style="background-image: url({{asset('home/images/background/4.png')}})"></div>
                            <div class="d-flex justify-content-between align-items-center flex-wrap">
                                <h3>Ready to Grow your finance and seamlessly invest?</h3>
                                <!-- Button Box -->
                                <div class="button-box">
                                    <a href="{{route('register')}}" class="btn btn-two">
												<span class="btn-wrap">
													<span class="text-one">get started</span>
													<span class="text-two">get started</span>
												</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Widgets Section -->
            <div class="widgets-section">
                <div class="row clearfix">

                    <!-- Column -->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
                        <div class="row clearfix">

                            <!-- Footer Column -->
                            <div class="footer-column col-lg-7 col-md-6 col-sm-12">
                                <div class="footer-widget about-widget">
                                    <h4>About Us</h4>
                                    <div class="text">
                                        Our agency manages a vast amount <br> of financial assets to support investors
                                        <br> of every type, with excellence in support.
                                    </div>
                                </div>
                            </div>

                            <!-- Footer Column -->
                            <div class="footer-column col-lg-5 col-md-6 col-sm-12">
                                <div class="footer-widget links-widget">
                                    <h4>Useful Links</h4>
                                    <ul class="links">
                                        @foreach($injected->getServices() as $service)
                                            <li><a href="{{route('service.details',['id'=>$service->id])}}">{{$service->title}}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- Column -->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
                        <div class="row clearfix">

                            <!-- Footer Column -->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget links-widget">
                                    <h4>Sub Pages</h4>
                                    <ul class="links">
                                        <li><a href="{{url('plans')}}">Plans</a></li>
                                        <li><a href="{{url('faqs')}}">Frequently Asked Questions</a></li>
                                        <li><a href="{{url('terms')}}">Terms & Conditions</a></li>
                                        <li><a href="{{url('privacy')}}">Privacy policy</a></li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Footer Column -->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget links-widget">
                                    <h4>contact us</h4>
                                    <ul class="contact-list">
                                        @if($web->phone)
                                            <li><span class="icon fa fa-phone"></span><a href="tel:{{$web->phone}}">{{$web->phone}}</a></li>
                                        @endif
                                        <li><span class="icon fa fa-envelope"></span><a href="mailto:{{$web->email}}">{{$web->email}}</a></li>
                                        <li><span class="icon fa fa-map-marker"></span>{!! $web->email !!}</li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <div class="d-flex justify-content-between align-items-center flex-wrap">
                    <div class="left-box">
                        <div class="copyright">&copy; 2019 - {{date('Y')}} <a href="#">{{$siteName}}</a>, All Rights Reserved</div>
                    </div>
                    <div class="right-box d-flex">
                        <!-- Social Box -->
                        <ul class="social-box">
                            <li><a href="https://www.facebook.com/" class="fa fa-facebook-f"></a></li>
                            <li><a href="https://www.instagram.com/" class="fa fa-instagram"></a></li>
                            <li><a href="https://www.twitter.com/" class="fa fa-twitter"></a></li>
                            <li><a href="https://www.linkedin.com/" class="fa fa-linkedin"></a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </footer>
    <!-- Smartsupp Live Chat script -->
    <script type="text/javascript">
        var _smartsupp = _smartsupp || {};
        _smartsupp.key = 'f0a443870f707f9b563eb77aa21fa21d38b42a6b';
        window.smartsupp||(function(d) {
            var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
            s=d.getElementsByTagName('script')[0];c=d.createElement('script');
            c.type='text/javascript';c.charset='utf-8';c.async=true;
            c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
        })(document);
    </script>
    <noscript> Powered by <a href=“https://www.smartsupp.com” target=“_blank”>Smartsupp</a></noscript>
</div>
<!--End pagewrapper-->

<!-- ScrollToTop Start -->
<div class="progress-wrap active-progress">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919px, 307.919px; stroke-dashoffset: 228.265px;"></path>
    </svg>
</div>
<!-- ScrollToTop End -->

<script src="{{asset('home/js/jquery.js')}}"></script>
<script src="{{asset('home/js/popper.min.js')}}"></script>
<script src="{{asset('home/js/bootstrap.min.js')}}"></script>
<script src="{{asset('home/plugins/menu/ma5-menu.min.js')}}"></script>
<script src="{{asset('home/js/magnific-popup.min.js')}}"></script>
<script src="{{asset('home/js/appear.js')}}"></script>
<script src="{{asset('home/js/tilt.jquery.min.js')}}"></script>
<script src="{{asset('home/js/owl.js')}}"></script>
<script src="{{asset('home/js/wow.js')}}"></script>
<script src="{{asset('home/js/odometer.js')}}"></script>
<script src="{{asset('home/js/jquery-ui.js')}}"></script>
<script src="{{asset('home/js/script.js')}}"></script>
</body>
</html>
