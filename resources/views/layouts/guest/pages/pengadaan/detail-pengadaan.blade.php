@extends('layouts.guest.master.f-master')

@section('title', 'Detail Pengadaan Barang & Jasa')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item"><a href="{{route('beranda')}}">Beranda</a></li>
    <li class="breadcrumb-item">Informasi Publik</li>
    <li class="breadcrumb-item"><a href="{{route('pengadaans')}}">Semua Pengadaan Barang & Jasa</a></li>
    <li class="breadcrumb-item active" aria-current="page">Detail Pengadaan Barang & Jasa</li>
@endsection

@section('content')

    <!-- Post Detail -->
    <section class="blog-details-area pt-120 pb-120">
    <div class="container">
        <div class="blog-details-wrap">
            <div class="row justify-content-center">
                <div class="col-71">
                    <div class="blog-details-content">
                        <h2 class="title">{{$detailPengadaans->title}}</h2>
                        <div class="blog-meta-three">
                            <ul class="list-wrap">
                                <li><i class="far fa-calendar"></i>{{ \Carbon\Carbon::parse($detailPengadaans->date)->format('d-m-Y') }}</li>
                            </ul>
                        </div>
                        {{-- <p>{!!$item->body!!}</p> --}}
                    </div>
                    <div class="blog-details-thumb">
                        <img src="{{asset('storage/image-pengadaan/' . $detailPengadaans->image) }}" alt="{{$detailPengadaans->image}}">
                        <div class="view-all-btn mb-30" style="text-align: center; margin-top: 40px;">
                            <a href="services.html" class="btn">See All Service</a>
                        </div>
                    </div>
                </div>
                @include('components.sidebar-post')
            </div>
        </div>
    </div>
    </section>
    <!-- End Post Detail -->
@endsection