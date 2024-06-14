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
<section class="project-details-area pt-120 pb-120">
    <div class="container">

        <div class="section-title-two text-center mb-50">
            <span class="sub-title">What We Do For You</span>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="project-details-wrap">
                    <div class="project-details-content">
                        <h2 class="title">Business Planing & Solution</h2>
                        <p>when an unknown printer took ar galley offer type year anddey scrambled  make type aewer specimen book bethas survived not only five when anner year unknown printer.eed a little help from our friends from time to time. Although we offer the one-stop convenience.when an unknown printer took ar galley  type year anddey scrambled  make type aewer specimen book bethas survived.</p>                     
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- project-details-area-end -->

@endsection
