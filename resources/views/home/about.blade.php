@extends('home.base')
@section('content')
    <!--Page Header Start-->
    <section class="page-header">
        <div class="page-header__bg" style="background-image: url({{asset('home/images/backgrounds/page-header-bg.jpg')}}');">
        </div>
        <div class="page-header__shape-one float-bob-x-2"></div>
        <div class="page-header__shape-2 float-bob-y">
            <img src="{{asset('home/images/shapes/page-header-shape-2.png')}}" alt="">
        </div>
        <div class="page-header__shape-3 float-bob-x">
            <img src="{{asset('home/images/shapes/page-header-shape-3.png')}}" alt="">
        </div>
        <div class="page-header__shape-4 float-bob-y">
            <img src="{{asset('home/images/shapes/page-header-shape-4.png')}}" alt="">
        </div>
        <div class="container">
            <div class="page-header__inner text-left">
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li>{{$pageName}}</li>
                </ul>
                <h2>{{$pageName}}</h2>
            </div>
        </div>
    </section>
    <!--Page Header End-->

    <!-- Start About Area -->
    <div class="about-area ptb-100 mt-5">
        <div class="container">
            <div class="row m-0">
                <div class="col-xl-6">
                    <div class="why-choose-one__left">
                        <div class="why-choose-one__img-box wow slideInLeft" data-wow-delay="100ms"
                             data-wow-duration="2500ms">
                            <div class="why-choose-one__img">
                                <img src="{{asset('home/images/resources/why-choose-one-1.jpg')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 p-0">
                    <div class="about-text">
                        <span class="sub-title">ABOUT US</span>
                        <h2>Your Pathway to Financial Freedom</h2>
                        <p>
                           Founded in 2014, we are a global investment agency helping individuals build their financial dreams into reality. From a humble beginning, we have grown to become a notable force in the investment industry with over 40K+ users.
                        </p>
                        <p class="about-one__text-2">{{$siteName}} stands as one of the largest and most seasoned international private equity firms. Our accomplished team of investment professionals is primarily dedicated to strategic investments.</p>
                        <p class="about-one__text-2">
                            {{$siteName}} is managed by a team of trading experts specializing in generating profits through currency, stocks, options, and commodities trading on the foreign exchange market. We employ a variety of trading techniques to meet client goals.
                        </p>
                        <p class="about-one__text-2">
                            The {{$siteName}} team comprises financial market professionals assembled to provide the best possible trading conditions. Our specialists played a key role in developing technical specifications for a modern platform suitable for both beginners and experienced traders.
                        </p>
                        <p class="about-one__text-2">
                            Throughout our existence, we've aimed to balance lower risk and higher profits for our customers through innovative analysis, information dispersion, and expert assistance. Our team includes experienced professionals with diverse and in-depth knowledge, enhancing the entire investing process.
                        </p>
                        <div class="row justify-content-center">
                            <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                                <div class="single-about-box">
                                    <div class="icon">
                                        <i class="ri-star-line"></i>
                                    </div>
                                    <h3>Consistency</h3>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                                <div class="single-about-box">
                                    <div class="icon">
                                        <i class="ri-settings-2-line"></i>
                                    </div>
                                    <h3>Strategy</h3>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                                <div class="single-about-box">
                                    <div class="icon">
                                        <i class="ri-line-chart-line"></i>
                                    </div>
                                    <h3>Investment</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-12 col-md-12 p-0">
                   <img src="{{asset('home/images/minancecert.jpeg')}}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- End About Area -->

    <section class="services-page-v-2">
        <div class="container">
            <div class="services-page-v-2__top text-center">
                <div class="section-title">
                    <span class="section-title__tagline">Our Services</span>
                    <h2 class="section-title__title"><span>Financial Solution</span></h2>
                </div>
                <p class="section-title__text">
                    We offer a wide-range of services which allows our users to earn unlimitedly.
                </p>
            </div>
            <div class="row">
                @foreach($services as $service)
                    <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="services-one__single">
                            <div class="services-one__img">
                                <img src="{{asset('home/serv/'.$service->photo)}}" alt="">
                            </div>
                            <div class="services-one__content">
                                <div class="services-one__icon">
                                    <span class="icon-idea"></span>
                                </div>
                                <h3 class="services-one__title"><a href="{{route('service.details',['id'=>$service->id])}}">{{$service->title}}</a></h3>
                                <p class="services-one__text">
                                    {{$service->short}}
                                </p>
                                <div class="services-one__arrow">
                                    <a href="{{route('service.details',['id'=>$service->id])}}"><i class="icon-right-arrow-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>


@endsection
