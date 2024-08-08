@extends('layouts.guest.master.f-master')

@section('title', 'Detail DIP File Kategori Di Kecualikan')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item"><a href="{{route('beranda')}}">Beranda</a></li>
    <li class="breadcrumb-item">Informasi Publik</li>
    <li class="breadcrumb-item"><a href="{{route('kecualikan')}}">Kategori Di Kecualikan</a></li>
    <li class="breadcrumb-item active" aria-current="page">File DIP Kategori Di Kecualikan</li>
@endsection

@section('content')

    <section class="project-details-area pt-50 pb-120">
        <div class="container">

            <div class="section-title-two text-center mb-50">
                <span class="sub-title">{{$kecualikans->title}}</span>
            </div>

            <div class="rts-service-details-area rts-section-gap">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-4 col-md-12 col-sm-12 col-12">
                            <div class="service-detials-step-1">
                                <div class="row g-5 mt--30 mb--40">
                                    <div class="col-lg-12">

                                        <div class="service-details-card">
                                            <div class="details">
                                                <h6 class="title">Judul File</h6>
                                                    <p class="disc">{{$kecualikans->title}}</p><br>
                                                {{-- <h6 class="title">Tanggal Di Tetapkan</h6>
                                                    <p class="disc">{{ date('d-m-Y', strtotime($item->date)) }}</p><br> --}}
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-md-8">
                            @if ($kecualikans->file)
                                <div id="pdfViewer">
                                    <embed src="{{ asset('storage/file-dip/' . $kecualikans->file) }}" type="application/pdf" width="100%" height="800px">
                                </div>
                                <div class="title text-center" id="viewerOption">
                                    <p style="margin-bottom: 5px;">Jika Menggunakan Smartphone / Tab</p>
                                    <button onclick="loadGoogleDocsPDF()" style="color: blue; margin-top: 5px; border: 2px solid orange; padding: 10px 20px; border-radius: 20px;">Dapat Lihat Dengan Google Docs</button>
                                    <br>
                                    <a class="btn btn-three" style="margin-top: 15px;" href="{{ asset('storage/file-dip/' . $kecualikans->file) }}">Download File</a>
                                </div>                 
                            @else
                                Tidak ada File
                            @endif
                        </div>

                    </div>
                </div>
            </div>
@endsection
