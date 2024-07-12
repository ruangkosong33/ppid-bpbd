@extends('layouts.guest.master.f-master')

@php
    use Illuminate\Support\Str;
@endphp

@section('content')

    @include('components.breadcrumb', ['title' => 'Semua Pengadaan Barang & Jasa'])

   <!-- features-area -->
   <section class="features-area-two pt-80">
    <div class="container">

        <div class="section-title-two text-center mb-50">
            <span class="sub-title">Pengadaan Barang & Jasa</span>
        </div>

        <div class="features-item-wrap">
            <div class="row justify-content-center">
                @forelse ($pengadaans as $item)
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="features-item-two">
                        <div class="features-icon-two">
                            <img src="{{asset('fr/assets/img/images/barjas.png')}}" alt="">
                            
                        </div>
                        <div class="features-content-two">
                            <h4 class="title">
                                <a href="{{ route('detail.pengadaan', $item->slug) }}">
                                    {{$item->title}}
                                </a>
                            </h4>
                            <i class="far fa-calendar"></i>{{ \Carbon\Carbon::parse($item->date)->format('d-m-Y') }}
                            {{-- <p>Finance helps you to convert into a strategic asset get.</p> --}}
                        </div>
                    </div>
                </div>
                @empty
                Tidak Ada Data
                @endforelse
            </div>

            <div class="d-flex justify-content-center mt-4">
                {{ $pengadaans->links() }}
            </div>
            
        </div>
    </div>
</section>
<!-- features-area-end -->

@endsection