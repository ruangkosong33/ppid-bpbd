@extends('layouts.guest.master.f-master') 

@section('content')

    <section class="banner-area-three" style="margin-top: 20px;">

    <!-- breadcrumb-area -->
    <section class="breadcrumb-area breadcrumb-bg" data-background="{{asset('fr/assets/img/bg/breadcrumb_bg.jpg')}}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-content">
                        <h2 class="title">About us</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">About</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb-shape-wrap">
            <img src="{{asset('fr/assets/img/images/breadcrumb_shape01.png')}}" alt="">
            <img src="{{asset('fr/assets/img/images/breadcrumb_shape02.png')}}" alt="">
        </div>
    </section>
    <!-- breadcrumb-area-end -->

    <!-- project-details-area -->
    <section class="project-details-area pt-50 pb-120">
        <div class="container">

            <div class="section-title-two text-center mb-50">
                <span class="sub-title">{{$etiks->title}}</span>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="project-details-wrap">
                        <div class="project-details-content">
                            {{-- <h2 class="title">Business Planing & Solution</h2> --}}
                            <p>{!!$etiks->body!!}</p>                     
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- project-details-area-end -->

    
@endsection
