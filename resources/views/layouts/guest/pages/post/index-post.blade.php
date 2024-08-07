@extends('layouts.guest.master.f-master')

@php
    use Illuminate\Support\Str;
@endphp

@section('title', 'Semua Berita Utama')
@section('breadcrumb')
    @parent
    <li class="breadcrumb-item"><a href="{{route('beranda')}}">Beranda</a></li>
    <li class="breadcrumb-item">Berita</li>
    <li class="breadcrumb-item active" aria-current="page">Semua Berita Utama</li>
@endsection

@section('content')

    <!-- blog-area -->
    <section class="blog-area pt-50 pb-120">
        <div class="container">

            <div class="section-title-two text-center mb-50">
                <span class="sub-title">Berita Utama</span>
            </div>

            <div class="inner-blog-wrap">
                <div class="row justify-content-center">
                    <div class="col-71">
                        <div class="blog-post-wrap">
                            <div class="row">
                                @foreach ($articles as $item)
                                <div class="col-md-6">
                                    <div class="blog-post-item-two">
                                        <div class="blog-post-thumb-two">
                                            <a href="{{route('detail.berita', $item->slug)}}"><img src="{{asset('storage/image-post/' . $item->image) }}" alt="{{$item->image}}"></a>
                                            <a href="blog.html" class="tag tag-two">{{$item->kategoris->title}}</a>
                                        </div>
                                        <div class="blog-post-content-two">
                                            <h2 class="title"><a href="{{route('detail.berita', $item->slug)}}">{{ Str::limit($item->title, 50) }}</a></h2>
                                            <p>{{ Str::limit(strip_tags($item->body), 80) }}</p>
                                            <div class="blog-meta">
                                                <ul class="list-wrap">
                                                    <li><i class="far fa-user"></i>by {{$item->users->name}}</a></li>
                                                    <li><i class="far fa-calendar"></i>{{ \Carbon\Carbon::parse($item->date)->format('d-m-Y') }}</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>   
                                </div>
                                @endforeach
                            </div>
                            
                            <div class="d-flex justify-content-center mt-4">
                                {{ $articles->links() }}
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