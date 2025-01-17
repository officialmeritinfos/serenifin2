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
