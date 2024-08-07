@extends('layouts.guest.master.f-master') 

@section('title', 'Waktu & Layanan')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item"><a href="{{route('beranda')}}">Beranda</a></li>
    <li class="breadcrumb-item">Layanan</li>
    <li class="breadcrumb-item active" aria-current="page">Waktu & Layanan</li>
@endsection

@section('content')

    <section class="inner-contact-area pt-50 pb-120">
        <div class="container">
            <div class="section-title-two text-center mb-50">
                <span class="sub-title">Waktu & Layanan</span>
            </div>

            <div class="col-lg-12">
                <div class="inner-contact-info">
                    <h2 class="title">{{$waktus->title}}</h2>
                    <div class="contact-info-item">
                        {{-- <h5 class="title-two">USA Office</h5> --}}
                        <p>{!!$waktus->body!!}</p>
                    </div>
                </div>
            </div> 

            <br>

            <div class="col-lg-12">
                <div class="inner-contact-info">
                    <h2 class="title">Alamat Kantor Kami</h2>
                </div>
            </div> 
            
        </div>

        <!-- Contact Map -->
        <div class="contact-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.6714606972646!2d117.11622877377012!3d-0.49160199950357264!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2df67ee4f2078cc1%3A0x5b68311c78619e1b!2sBPBD%20PROVINSI%20KALIMANTAN%20TIMUR!5e0!3m2!1sen!2sid!4v1720868422025!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <!-- End Contact Map -->
        
    </section>

@endsection