@extends('home.base')
@section('content')
    <!-- Page Header Section -->
    <div class="page_header">
        <div class="page_header_content">
            <div class="container">
                <h2 class="heading">{{$pageName}}</h2>
                <ul class="breadcrumb">
                    <li><a href="{{url('/')}}">Home</a></li>
                    <li class="active">{{$pageName}}</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Page Header Section -->

    <!-- Start About Area -->
    <div class="about-area ptb-100 mt-5">
        <div class="container">
            <div class="row m-0">
                <div class="col-xl-6">
                    <div class="why-choose-one__left">
                        <div class="why-choose-one__img-box wow slideInLeft" data-wow-delay="100ms"
                             data-wow-duration="2500ms">
                            <div class="why-choose-one__img">
                                <img src="{{asset('home/images/background/9.jpg')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12 p-0">
                    <div class="about-text">
                        <span class="sub-title">ABOUT US</span>
                        <h2>Your Pathway to Financial Freedom</h2>
                        <p>
                           Founded in 2019, we are a global investment agency helping individuals build their financial dreams into reality.
                            From a humble beginning, we have grown to become a notable force in the investment industry with over 40K+ users.
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

    <!-- Business Section -->
    <section class="business-section-three pb-0">
        <div class="image-layer" style="background-image: url({{asset('home/images/background/19.jpg')}})"></div>
        <div class="container">
            <!-- Service Sec  -->
            <!-- Sec Title -->
            <div class="sec-title centered">
                <div class="title">INTELLIGENT DECISION MAKING</div>
                <h1>Providing Best Services</h1>
                <div class="separator"></div>
            </div>
            <div class="inner-column">
                <div class="row clearfix">
                    @foreach($services as $service)
                        <!-- Service Block -->
                        <div class="service-block-style-two col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box bg-white">
                                <div class="hidden-image" style="background-image: url('{{asset('home/images/services/bg-hover-1.png')}}');"></div>
                                <div class="icon">
                                    <img src="{{asset('home/serv/'.$service->photo)}}" alt="">
                                </div>
                                <h5><a href="{{route('service.details',['id'=>$service->id])}}">{{$service->title}}</a></h5>
                                <div class="text">
                                    {{$service->short}}
                                </div>
                                <a href="{{route('service.details',['id'=>$service->id])}}" class="read-more"><span><img src="{{asset('home/images/services/arrow-right.png')}}" alt="arrow"></span> Read More</a>
                            </div>
                        </div>
                    @endforeach

                    <!-- Service Block -->
                    <div class="service-block-style-two all-services-link col-lg-4 col-md-6 col-sm-12">
                        <div class="inner-box" style="background-image: url('{{asset('home/images/services/bg-2.png')}}');">
                            <h5>Intrigued by our vast services and sectors served? Join Today and start benefiting</h5>
                            <a href="{{route('register')}}" class="btn btn-two">
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
    </section>


@endsection
