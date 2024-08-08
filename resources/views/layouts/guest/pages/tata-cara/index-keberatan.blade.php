@extends('layouts.guest.master.f-master') 

@section('title', 'Tata Cara Pengajuan Keberatan Informasi')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item"><a href="{{route('beranda')}}">Beranda</a></li>
    <li class="breadcrumb-item">Informasi Publik</li>
    <li class="breadcrumb-item active" aria-current="page">Tata Cara Pengajuan Keberatan Informasi</li>
@endsection

@section('content')

    <!-- Details -->
    <section class="project-details-area pt-50 pb-120">
        <div class="container">

            <div class="section-title-two text-center mb-50">
                <span class="sub-title">{{$tatakeberatan->title}}</span>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="project-details-wrap">
                        <div class="project-details-content">
                            {{-- <h2 class="title">Business Planing & Solution</h2> --}}
                            <p>{!!$tatakeberatan->body!!}</p>                     
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Details -->

@endsection
