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

    <!--FAQ Page Start-->
    <section class="faq-page">
        <div class="container">
            <div class="faq-page__top">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <!-- Address Card -->
                    <div class="col">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="card-title">Address</h5>
                                <p class="card-text">{!! $web->address !!}</p>
                            </div>
                        </div>
                    </div>

                    @if($web->phone)
                        <!-- Phone Card -->
                        <div class="col">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title">Phone</h5>
                                    <p class="card-text">
                                        <a href="tel:{{$web->phone}}">Call</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endif

                    <!-- Email Card -->
                    <div class="col">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="card-title">Email</h5>
                                <p class="card-text">
                                    <a href="mailto:{{$web->email}}">{{$web->email}}</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Business One -->



@endsection
