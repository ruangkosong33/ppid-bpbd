@extends('layouts.guest.master.f-master')

@php
    use Illuminate\Support\Str;
@endphp

@section('content')

    @include('components.breadcrumb', ['title' => 'Semua Berita Infografis'])

    <!-- blog-area -->
    <section class="blog-area pt-120 pb-120">
        <div class="container">
            <div class="inner-blog-wrap">
                <div class="row justify-content-center">
                    <div class="col-71">
                        <div class="blog-post-wrap">
                            <div class="row">
                                @foreach ($item as $items)
                                <div class="col-md-6">
                                    <div class="blog-post-item-two">
                                        <div class="blog-post-thumb-two">
                                            <a href="{{route('detail.graphics', $item->slug)}}"><img src="{{asset('storage/image-grafis/' . $item->image) }}" alt="{{$item->image}}"></a>
                                            <a href="blog.html" class="tag tag-two">{{$item->kategoris->title}}</a>
                                        </div>
                                        <div class="blog-post-content-two">
                                            <h2 class="title"><a href="{{route('detail.graphics', $item->slug)}}">{{ Str::limit($item->title, 50) }}</a></h2>
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
                            
                            <div class="pagination-wrap mt-30">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination list-wrap">
                                        <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-double-left"></i></a></li>
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                                        <li class="page-item next-page"><a class="page-link" href="#"><i class="fas fa-angle-double-right"></i></a></li>
                                    </ul>
                                </nav>
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