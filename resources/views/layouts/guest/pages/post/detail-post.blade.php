@extends('layouts.guest.master.f-master')

@section('content')
    @include('components.breadcrumb', ['title' => $item->title])

    <!-- Post Detail -->
    <section class="blog-details-area pt-120 pb-120">
    <div class="container">
        <div class="blog-details-wrap">
            <div class="row justify-content-center">
                <div class="col-71">
                    <div class="blog-details-thumb">
                        <img src="{{asset('storage/image-post/' . $item->image) }}" alt="{{$item->image}}">
                    </div>
                    <div class="blog-details-content">
                        <h2 class="title">{{$item->title}}</h2>
                        <div class="blog-meta-three">
                            <ul class="list-wrap">
                                <li><i class="far fa-calendar"></i>{{ \Carbon\Carbon::parse($item->date)->format('d-m-Y') }}</li>
                                <li><i class="far fa-user"></i>by {{$item->users->name}}</a></li>
                                <li><i class="fas fa-tags"></i>{{$item->kategoris->title}}</li>
                            </ul>
                        </div>
                        <p>{!!$item->body!!}</p>
                    </div>
                </div>
                @include('components.sidebar-post')
            </div>
        </div>
    </div>
    </section>
    <!-- End Post Detail -->
@endsection