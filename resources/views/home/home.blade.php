@extends('home.base')
@section('content')
    @push('css')
        <style>

            small {
                font-size: 14px;
                text-transform: initial;
            }
            .single-price {
                text-align: center;
                background: #262626;
                transition: .7s;
                margin-top: 20px;
            }
            .single-price h3 {
                font-size: 30px;
                color: #000;
                font-weight: 600;
                text-align: center;
                margin: 0;
                margin-top: -80px;
                margin-bottom: 1rem;
                font-family: poppins;
                color: #fff;
            }
            .single-price h4 {
                font-size: 20px;
                font-weight: 500;
                color: #fff;
            }
            .single-price h4 span.sup {
                vertical-align: text-top;
                font-size: 15px;
            }
            .deal-top {
                position: relative;
                background: #104547;
                font-size: 16px;
                text-transform: uppercase;
                padding: 136px 24px 0;
            }
            .deal-top::after {
                content: "";
                position: absolute;
                left: 0;
                bottom: -50px;
                width: 0;
                height: 0;
                border-top: 50px solid #104547;
                border-left: 175px solid transparent;
                border-right: 183px solid transparent;
            }
            .deal-bottom {
                padding: 56px 16px 0;
            }
            .deal-bottom ul {
                margin: 0;
                padding: 0;
            }
            .deal-bottom  ul li {
                font-size: 16px;
                color: #fff;
                font-weight: 300;
                margin-top: 16px;
                border-top: 1px solid #E4E4E4;
                padding-top: 16px;
                list-style: none;
            }
            .btn-area a {
                display: inline-block;
                font-size: 18px;
                color: #fff;
                background: #104547;
                padding: 8px 64px;
                margin-top: 32px;
                border-radius: 4px;
                margin-bottom: 40px;
                text-transform: uppercase;
                font-weight: bold;
                text-decoration: none;
            }


            .single-price:hover {
                background: #104547;
            }
            .single-price:hover .deal-top {
                background: #262626;
            }
            .single-price:hover .deal-top:after {
                border-top: 50px solid #262626;
            }
            .single-price:hover .btn-area a {
                background: #262626;
            }
            /* ignore the code below */


            .link-area
            {
                position:fixed;
                bottom:20px;
                left:20px;
                padding:15px;
                border-radius:40px;
                background:#104547;
            }
            .link-area a
            {
                text-decoration:none;
                color:#fff;
                font-size:25px;
            }
        </style>
    @endpush
    <!-- Main Section -->
    <section class="main-slider p-0">
        <div class="main-slider-carousel owl-carousel owl-theme">

            <!-- Slide One -->
            <div class="slide" style="background-image: url('{{asset('home/images/slider/1.jpg')}}');">
                <div class="container">
                    <div class="row clearfix">
                        <!-- Content Column -->
                        <div class="content-column col-xl-7 col-lg-7 col-md-10 col-sm-12">
                            <div class="inner-column">
                                <div class="title">Intelligent Decision Making</div>
                                <h1>We help investors solve <br> complex <span>financial</span> problems.</h1>
                                <div class="text">
                                    With our integration of a Robust AI model, we are able to solve <br/> complex financial needs
                                    of our users in minutes.
                                </div>
                                <div class="options-box">
                                    <!-- Button Box -->
                                    <div class="button-box d-flex flex-wrap">
                                        <a href="{{route('register')}}" class="btn">
													<span class="btn-wrap">
														<span class="text-one">Register</span>
														<span class="text-two">Register</span>
													</span>
                                        </a>
                                        <a href="{{route('login')}}" class="btn btn-three">
													<span class="btn-wrap">
														<span class="text-one">Login</span>
														<span class="text-two">Login</span>
													</span>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- End Slide One -->

            <!-- Slide Two -->
            <div class="slide" style="background-image: url('{{asset('home/images/slider/2.jpg')}}');">
                <div class="container">
                    <div class="row clearfix">
                        <!-- Content Column -->
                        <div class="content-column col-xl-7 col-lg-7 col-md-10 col-sm-12">
                            <div class="inner-column">
                                <div class="title">Best Financial Service</div>
                                <h1>Grow your Finance <br> and prepare for <span>Retirement</span></h1>
                                <div class="text">
                                    Retire in grand style with our investment plans crafted <br/>just for you to help you
                                    grow your wealth portfolio.
                                </div>
                                <div class="options-box">
                                    <!-- Button Box -->
                                    <div class="button-box d-flex flex-wrap">
                                        <a href="{{route('register')}}" class="btn">
													<span class="btn-wrap">
														<span class="text-one">Register</span>
														<span class="text-two">Register</span>
													</span>
                                        </a>
                                        <a href="{{route('login')}}" class="btn btn-three">
													<span class="btn-wrap">
														<span class="text-one">Login</span>
														<span class="text-two">Login</span>
													</span>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- End Slide Two -->



        </div>
    </section>
    <!-- End Main Section -->

    <!-- About Section -->
    <section class="about-section">
        <div class="container">
            <!-- Business Section -->
            <div class="inner-container">
                <div class="row clearfix">
                    <!-- Image Column -->
                    <div class="image-column col-lg-6 col-md-5 col-sm-12">
                        <div class="inner-column">
                            <div class="image">
                                <img src="{{asset('home/images/resource/business-6.png')}}" alt="img" >
                                <div class="experience-counter">
                                    <div class="experience-counter-inner">
                                        7+
                                        <p>Years Of Experience</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Content Column -->
                    <div class="content-column col-lg-6 col-md-7 col-sm-12 px-lg-0">
                        <div class="inner-column">
                            <!-- Title Box -->
                            <div class="title-box">
                                <div class="title">About {{ ucfirst($siteName) }}</div>
                                <h1>We draw on our global ability to grow.</h1>
                                <p>
                                    We are poised to change your financial story from bad to better. With over 7+ years of
                                    experience in the Investment & Asset management industry, we are best prepared to give you the boost you need in your finance.
                                </p>
                            </div>
                            <!-- End Title Box -->

                            <!-- Feature Block -->
                            <div class="work-list d-md-flex align-items-center justify-content-between">
                                <ul>
                                    <li><img src="{{asset('home/images/icons/chevron-right.png')}}" alt="img">Best Financial Analysis</li>
                                    <li><img src="{{asset('home/images/icons/chevron-right.png')}}" alt="img"> Research & Development</li>
                                    <li><img src="{{asset('home/images/icons/chevron-right.png')}}" alt="img"> Financial Decision Making</li>
                                </ul>
                                <ul>
                                    <li><img src="{{asset('home/images/icons/chevron-right.png')}}" alt="img"> New Growth Strategies</li>
                                    <li><img src="{{asset('home/images/icons/chevron-right.png')}}" alt="img"> Investor Training program</li>
                                    <li><img src="{{asset('home/images/icons/chevron-right.png')}}" alt="img"> Auditing & Taxation Service</li>
                                </ul>
                            </div>

                            <div class="author-block d-lg-flex align-items-center justify-content-between">
                                <div class="author-profile d-flex align-items-center">
                                    <div class="author-img">
                                        <img src="{{asset('home/images/resource/author-3.png')}}" alt="img">
                                    </div>
                                    <div class="author-info">
                                        <h4>{{$web->email}}</h4>
                                        <p>Do you have any question?</p>
                                    </div>
                                </div>

                                <div class="author-signature">
                                    <img src="{{asset('home/images/resource/signature.png')}}" alt="img">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Section -->

    <div class="pricing-area" style="margin-bottom: 5rem;margin-top: 5rem;">
        <div class="container">
            <div class="row justify-content-center">
                @foreach($packages as $package)
                    @inject('option','App\Defaults\Custom')
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single-price">
                            <div class="deal-top">
                                <h3>{{$package->name}}</h3>
                                <h4> {{$package->roi}}%/ <span class="sup">{{$option->getReturnType($package->returnType)}}</span> </h4>
                                <small class="text-white">{{$package->note}}</small>
                            </div>
                            <div class="deal-bottom">
                                <ul class="deal-item">
                                    <li>
                                        Price: ${{number_format($package->minAmount,2)}} - @if($package->isUnlimited !=1)
                                            ${{number_format($package->maxAmount,2)}}
                                        @else
                                            Unlimited
                                        @endif
                                    </li>
                                    <li>Profit return: {{$package->roi}}% {{$option->getReturnType($package->returnType)}}</li>
                                    <li>Contract Duration: {{$package->Duration}}</li>
                                    <li>Referral Bonus: {{$package->referral}}% </li>
                                </ul>
                                <div class="btn-area">
                                    <a href="{{route('register')}}">Get Started</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </div>

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

            <!-- Business Section -->
            <div class="inner-container">
                <div class="row clearfix">
                    <!-- Image Column -->
                    <div class="image-column col-lg-5 col-md-5 col-sm-12">
                        <div class="inner-column">
                            <div class="image">
                                <img src="{{asset('home/images/resource/business-4.jpg')}}" alt="img" >
                            </div>
                        </div>
                    </div>
                    <!-- Content Column -->
                    <div class="content-column col-lg-7 col-md-7 col-sm-12">
                        <div class="inner-column">
                            <!-- Title Box -->
                            <div class="title-box">
                                <div class="title">About Company</div>
                                <h1>We are dedicated to give
                                    you the Best.</h1>
                            </div>
                            <!-- End Title Box -->

                            <!-- Feature Block -->
                            <div class="feature-block two">
                                <div class="inner-box">
                                    <span class="icon"><img src="{{asset('home/images/icons/globe.png')}}" alt="img"></span>
                                    <h5>Expert Team</h5>
                                    With over 100+ ingenious experts and the power of a Super-model AI.
                                </div>
                            </div>

                            <!-- Feature Block -->
                            <div class="feature-block two">
                                <div class="inner-box">
                                    <span class="icon"><img src="{{asset('home/images/icons/people.png')}}" alt="img"></span>
                                    <h5>Target fulfill</h5>
                                    Our track record bears us witness that we have always kept to our words.
                                </div>
                            </div>

                            <!-- Button Box -->
                            <div class="button-box d-flex align-items-center flex-wrap">
                                <a href="{{ route('register') }}" class="btn">
											<span class="btn-wrap">
												<span class="text-one">Get Started</span>
												<span class="text-two">Get Started</span>
											</span>
                                </a>
                                <!-- Play Box -->
                                <a href="https://www.youtube.com/watch?v=Ay-nR9LQoV0" class="lightbox-video play-box">
                                    <span><i  class="fa fa-play"></i></span> Watch Video
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Counter Box -->
            <div class="counter-box">
                <div class="row clearfix">
                    <div class="counter-column col-lg-3 col-md-6 col-sm-6">
                        <div class="counter"><span class="odometer" data-count="5"></span></div>
                        <h6>Number Of Awards</h6>
                    </div>
                    <div class="counter-column col-lg-3 col-md-6 col-sm-6">
                        <div class="counter"><span class="odometer" data-count="500"></span> K+</div>
                        <h6>Completed Investments</h6>
                    </div>
                    <div class="counter-column col-lg-3 col-md-6 col-sm-6">
                        <div class="counter"><span class="odometer" data-count="138"></span><i>M+</i></div>
                        <h6>Successfully Paid Out</h6>
                    </div>
                    <div class="counter-column col-lg-3 col-md-6 col-sm-6">
                        <div class="counter"><span class="odometer" data-count="40"></span><i>K+</i></div>
                        <h6>Active Users</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="image-layer-bottom" style="background-image: url({{asset('home/images/background/7.jpg')}})"></div>
    </section>
    <!-- End Business Section -->

    <!-- Business Section Two -->
    <section class="business-section-two">
        <div class="container">
            <div class="row clearfix">

                <!-- Content Column -->
                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="title-box">
                            <div class="title">Why Choose Us</div>
                            <h1>Bringing Innovations into a befitting industry</h1>
                            <div class="text">

                            </div>
                        </div>
                        <div class="row clearfix">
                            <!-- Column -->
                            <div class="column col-lg-6 col-md-6 col-sm-12">
                                <ul class="options">
                                    <li><span class="icon"><img src="{{asset('home/images/icons/business-1.png')}}" alt="img" ></span> 98% Success Rate</li>
                                    <li><span class="icon"><img src="{{asset('home/images/icons/business-2.png')}}" alt="img" ></span> 100+ Expert Analyst</li>
                                </ul>
                            </div>
                            <!-- Column -->
                            <div class="column col-lg-6 col-md-6 col-sm-12">
                                <ul class="options">
                                    <li><span class="icon"><img src="{{asset('home/images/icons/business-3.png')}}" alt="img" ></span> 7 Years Experience</li>
                                    <li><span class="icon"><img src="{{asset('home/images/icons/business-4.png')}}" alt="img" ></span> Big Collaborations</li>
                                </ul>
                            </div>
                        </div>
                        <div class="user-group d-flex align-items-center justify-content-between">
                            <div class="avatar-group d-flex align-items-center">
                                <div class="avatar rounded-circle">
                                    <img class="avatar-img rounded-circle" src="{{asset('home/images/blog/commenter1.png')}}" alt="img">
                                </div>
                                <div class="avatar rounded-circle">
                                    <img class="avatar-img rounded-circle" src="{{asset('home/images/blog/commenter2.png')}}" alt="img">
                                </div>
                                <div class="avatar rounded-circle">
                                    <img class="avatar-img rounded-circle" src="{{asset('home/images/blog/commenter1.png')}}" alt="img">
                                </div>
                                <div class="text">
                                    <h4 class="number">800 +</h4>
                                    <p class="content">Happy Reviews</p>
                                </div>
                            </div>

                            <div class="rating-point">
                                <span class="vote">4.9</span> <span class="divider">/</span><span class="total">5</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Image Column -->
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="image wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <img src="{{asset('home/images/resource/business-5.png')}}" alt="img" >
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Business Section Two -->

    <!-- Call to Action Section -->
    <div class="call-to-action" style="background-image: url('{{asset('home/images/background/12.jpg')}}');">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 col-md-8">
                    <h1 class="text-white">Grow Big with best Financial Service</h1>
                </div>
                <div class="col-lg-4 col-md-4 text-center text-md-end">
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
    <!-- End Call to Action Section -->

    <!-- Process Section -->
    <section class="process-section">
        <div class="container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <div class="title">HOW WE WORK</div>
                <h1>Our Work Process</h1>
                <div class="separator"></div>
            </div>
            <div class="inner-container">
                <div class="separater-line" style="background-image: url({{asset('home/images/background/separator-line.png')}})"></div>
                <div class="row clearfix">

                    <!-- Process Block -->
                    <div class="process-block col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="image-outer">
                                <div class="number">01</div>
                                <div class="image">
                                    <img src="{{asset('home/images/resource/process-1.jpg')}}" alt="img" >
                                </div>
                            </div>
                            <div class="lower-content">
                                <h4>Register</h4>
                                <div class="text">
                                    Create an Account
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Process Block -->
                    <div class="process-block col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInLeft" data-wow-delay="150ms" data-wow-duration="1500ms">
                            <div class="image-outer">
                                <div class="number">02</div>
                                <div class="image">
                                    <img src="{{asset('home/images/resource/process-2.jpg')}}" alt="img" >
                                </div>
                            </div>
                            <div class="lower-content">
                                <h4>Deposit</h4>
                                <div class="text">
                                    Fund your account, and select an investment package
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Process Block -->
                    <div class="process-block col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInLeft" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="image-outer">
                                <div class="number">03</div>
                                <div class="image">
                                    <img src="{{asset('home/images/resource/process-3.jpg')}}" alt="img" >
                                </div>
                            </div>
                            <div class="lower-content">
                                <h4>Project Strategy</h4>
                                <div class="text">
                                    We will invest your capital in a befitting industry that matches your plan
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Process Block -->
                    <div class="process-block col-lg-3 col-md-6 col-sm-12">
                        <div class="inner-box wow fadeInLeft" data-wow-delay="450ms" data-wow-duration="1500ms">
                            <div class="image-outer">
                                <div class="number">04</div>
                                <div class="image">
                                    <img src="{{asset('home/images/resource/process-4.jpg')}}" alt="img" >
                                </div>
                            </div>
                            <div class="lower-content">
                                <h4>Earn & Withdraw</h4>
                                <div class="text">
                                    Once your investment is confirmed, your returns starts adding. At the end of the cycle, you can withdraw
                                    your earnings.
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End Process Section -->

    <!-- Testimonial Section -->
    <section class="testimonial-section two" style="background-image: url('{{asset('home/images/background/13.jpg')}}');">
        <div class="container">
            <div class="row d-block d-lg-flex clearfix flex-nowrap">

                <!-- Title Column -->
                <div class="title-column col-xl-4 col-lg-4 col-md-12 col-sm-12 pe-0">
                    <div class="inner-column">
                        <!-- Sec Title -->
                        <div class="sec-title">
                            <div class="title">CLIENTS TESTIMONIAL</div>
                            <h1 class="text-white">What our Clients <br> say about Us</h1>
                            <div class="separator"></div>
                        </div>
                    </div>
                </div>

                <!-- Carousel Column -->
                <div class="carousel-column">
                    <div class="inner-column">
                        <div class="testimonial-carousel-two owl-carousel owl-theme">

                            <!-- Testimonial Block -->
                            <div class="testimonial-block">
                                <div class="inner-box">
                                    <div class="upper-box">
                                        <div class="rating">
                                            Rating &nbsp;
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                        <div class="text">“Investing with {{$siteName}} has been a game-changer for me. Their investment plans were so
                                            tailored to exactly what i needed.”</div>
                                    </div>
                                    <div class="lower-box">
                                        <div class="author-box">
                                            <div class="box-inner">
                                                <div class="author-image">
                                                    <span class="quote fa fa-quote-right"></span>
                                                    <img src="https://ui-avatars.com/api/?name=Trent+B" alt="img" >
                                                </div>
                                                <strong>Trent B</strong>
                                                <span class="designation">Investor</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Testimonial Block -->
                            <div class="testimonial-block">
                                <div class="inner-box">
                                    <div class="upper-box">
                                        <div class="rating">
                                            Rating &nbsp;
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                        <div class="text">“ I have been investing with {{$siteName}} for 3+ years, and have witnessed their
                                            growth too, as well and the development. They have been steady with their promise, and
                                            all I can say is Awesome work.”</div>
                                    </div>
                                    <div class="lower-box">
                                        <div class="author-box">
                                            <div class="box-inner">
                                                <div class="author-image">
                                                    <span class="quote fa fa-quote-right"></span>
                                                    <img src="https://ui-avatars.com/api/?name=Kevin+M" alt="img" >
                                                </div>
                                                <strong>Kevin M</strong>
                                                <span class="designation">Investor</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Testimonial Block -->
                            <div class="testimonial-block">
                                <div class="inner-box">
                                    <div class="upper-box">
                                        <div class="rating">
                                            Rating &nbsp;
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                        <div class="text">“ I has always wanted to have a portfolio in the Real Estate Industry but never knew how, especially
                                            as my money was lesser than what was needed to buy a house, and I couldn't afford to mortgage.
                                            Then I learnt about {{$siteName}}, chatted their support, and they have been helpful in guiding me.”</div>
                                    </div>
                                    <div class="lower-box">
                                        <div class="author-box">
                                            <div class="box-inner">
                                                <div class="author-image">
                                                    <span class="quote fa fa-quote-right"></span>
                                                    <img src="https://ui-avatars.com/api/?name=Sullivan+F" alt="img" >
                                                </div>
                                                <strong>Sullivan F</strong>
                                                <span class="designation">Investor</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Testimonial Block -->
                            <div class="testimonial-block">
                                <div class="inner-box">
                                    <div class="upper-box">
                                        <div class="rating">
                                            Rating &nbsp;
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                        <div class="text">“My business was running under, the grants I applied were not forthcoming, then I got introduced
                                            to {{$siteName}} where I could secure a stress-free grant, and grow my business.”</div>
                                    </div>
                                    <div class="lower-box">
                                        <div class="author-box">
                                            <div class="box-inner">
                                                <div class="author-image">
                                                    <span class="quote fa fa-quote-right"></span>
                                                    <img src="https://ui-avatars.com/api/?name=Caskey+V" alt="img" >
                                                </div>
                                                <strong>Caskey V</strong>
                                                <span class="designation">Investor</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Testimonial Section -->

    <!-- News Section -->
    <section class="news-section">
        <div class="container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <div class="title">Latest News</div>
                <h1>Read Our Latest News</h1>
                <div class="separator"></div>
            </div>
            <div class="news-carousel owl-carousel owl-theme">

                <!-- News Block -->
                <div class="news-block">
                    <!-- TradingView Widget BEGIN -->
                    <div class="tradingview-widget-container">
                        <div class="tradingview-widget-container__widget"></div>
                        <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/" rel="noopener nofollow" target="_blank"><span class="blue-text">Track all markets on TradingView</span></a></div>
                        <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-timeline.js" async>
                            {
                                "feedMode": "market",
                                "market": "stock",
                                "isTransparent": false,
                                "displayMode": "regular",
                                "width": "100%",
                                "height": "400",
                                "colorTheme": "light",
                                "locale": "en"
                            }
                        </script>
                    </div>
                    <!-- TradingView Widget END -->
                </div>


            </div>
        </div>
    </section>
    <!-- End News Section -->

@endsection
