@extends('layouts.guest.master.f-master')

@section('content')

    @include('components.breadcrumb', ['title' => 'Semua Berita Infografis'])

    <!-- InfoGrafis -->
    <section class="services-area-two services-bg-two">
        <div class="container">

            <div class="section-title-two text-center mb-50">
                <span class="sub-title">Berita Infografis</span>
            </div>

            <div class="row">
                @forelse ($grafis as $item)
                <div class="col-xl-3">
                    <div class="services-item-five shine-animate-item">
                        <div class="services-thumb-five">
                            <a href="{{ asset('storage/image-grafis/' . $item->image) }}" target="_blank">
                                <img src="{{ asset('storage/image-grafis/' . $item->image) }}" alt="{{ $item->image }}">
                            </a>
                        </div>
                        <div class="services-content-five">
                            <div class="services-content-five-top">
                                <div class="icon">
                                    <i class="flaticon-business-presentation"></i>
                                </div>
                                <h2 class="title">
                                    <a href="{{ asset('storage/image-grafis/' . $item->image) }}" target="_blank">{{ $item->title }}</a>
                                </h2>
                            </div>
                            <p>{!!$item->body!!}</p>   
                        </div>
                    </div>
                </div>
                @empty 
                Tidak Ada Data 
                @endforelse
            </div>

            <div class="d-flex justify-content-center mt-4">
                {{ $grafis->links() }}
            </div>

        </div>
    </section>
    <!-- End InfoGrafis -->

@endsection