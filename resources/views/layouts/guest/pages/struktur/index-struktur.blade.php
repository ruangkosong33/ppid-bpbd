@extends('layouts.guest.master.f-master') 

@section('title', 'Struktur Organisasi')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item"><a href="{{route('beranda')}}">Beranda</a></li>
    <li class="breadcrumb-item">Profil</li>
    <li class="breadcrumb-item active" aria-current="page">{{ $strukturs->title }}</li>
@endsection

@section('content')

    <!-- Details -->
    <section class="project-details-area pt-50 pb-120">
        <div class="container">

            <div class="section-title-two text-center mb-50">
                <span class="sub-title">{{$strukturs->title}}</span>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="project-details-wrap">
                        <div class="project-details-content">
                            {{-- <h2 class="title">Business Planing & Solution</h2> --}}
                            <p>{!!$strukturs->body!!}</p>                     
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="services-details-thumb-two">
                        <img src="{{asset('fr/assets/img/banner/h7_hero_bg.jpg')}}" alt="">
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End Details -->

@endsection
