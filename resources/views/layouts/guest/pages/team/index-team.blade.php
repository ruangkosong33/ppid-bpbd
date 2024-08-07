@extends('layouts.guest.master.f-master')

@section('title', 'Tim PPID BPBD')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item"><a href="{{route('beranda')}}">Beranda</a></li>
    <li class="breadcrumb-item">Profil</li>
    <li class="breadcrumb-item active" aria-current="page">Tim PPID BPBD</li>
@endsection


@section('content')

    <br><br>
    <!-- team-area -->
    <section class="team-area-five">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title-two text-center mb-50 tg-heading-subheading animation-style1">
                        <span class="sub-title tg-element-title">Tim PPID BPBD Kaltim</span>
                        <h2 class="title tg-element-title">Berkenalan Dengan Tim Kami</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                @forelse ($semuateams as $item)
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-10">
                    <div class="team-item-five">
                        <div class="team-thumb-five">
                            <img src="{{asset('storage/image-team/' . $item->image) }}" alt="{{$item->image}}">
                        </div>
                        <div class="team-content-five">
                            <h2 class="title"><a href="team-details.html">{{$item->name}}</a></h2>
                            <span>{{$item->job}}</span>
                            <div class="team-social-four">
                                <ul class="list-wrap">
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                Tidak Ada Data
                @endforelse
            </div>
        </div>
    </section>
    <!-- team-area-end -->

@endsection
  
