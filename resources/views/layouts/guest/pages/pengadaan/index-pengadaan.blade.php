@extends('layouts.guest.master.f-master')

@php
    use Illuminate\Support\Str;
@endphp

@section('content')

    @include('components.breadcrumb', ['title' => 'Semua Pengadaan Barang & Jasa'])

    <!-- blog-area -->
    <section class="blog-area pt-120 pb-120">
        <div class="container">
            <div class="inner-blog-wrap">
                <div class="row justify-content-center">
                    <div class="col-71">
                        <div class="blog-post-wrap">
                            <div class="row">
                                @foreach ($pengadaans as $item)
                                <div class="col-md-6">
                                    <div class="blog-post-item-two">
                                        <div class="blog-post-thumb-two">
                                            <a href="{{route('detail.pengadaan', $item->slug)}}"><img src="{{asset('storage/image-pengadaan/' . $item->image) }}" alt="{{$item->image}}"></a>
                                        </div>
                                        <div class="blog-post-content-two">
                                            <h2 class="title"><a href="{{route('detail.pengadaan', $item->slug)}}">{{ Str::limit($item->title, 50) }}</a></h2>
                                            <p>{{ Str::limit(strip_tags($item->body), 80) }}</p>
                                            <div class="blog-meta">
                                                <ul class="list-wrap">
                                                    <li><i class="far fa-calendar"></i>{{ \Carbon\Carbon::parse($item->date)->format('d-m-Y') }}</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>   
                                </div>
                                @endforeach
                            </div>
                            
                            <div class="d-flex justify-content-center mt-4">
                                {{ $pengadaans->links() }}
                            </div>

                        </div>
                    </div>
                    @include('components.sidebar-post')
                </div>
            </div>
        </div>
    </section>  
    <!-- blog-area-end -->

@endsection