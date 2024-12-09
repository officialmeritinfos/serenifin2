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

    <!--Project Details Start-->
    <section class="project-details">
        <div class="container">
            <div class="project-details__top">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="project-details__img">
                            <img src="{{asset('home/serv/'.$service->photo)}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="project-details__bottom">
                <div class="row">
                    <div class="col-xl-8 col-lg-7">
                        <div class="project-details__right">
                            <div class="project-details__title-box">
                                <h3 class="project-details__title-two">{{ $service->title }}</h3>
                                <p class="project-details__text">
                                    {!! str_replace('MYSITE',$siteName,$service->content) !!}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>


@endsection
