@extends('layouts.guest.master.f-master')

@section('content')

    @include('components.breadcrumb', ['title' => 'Semua Berita'])

    <!-- blog-area -->
    <section class="blog-area pt-120 pb-120">
        <div class="container">
            <div class="inner-blog-wrap">
                <div class="row justify-content-center">
                    <div class="col-71">
                        <div class="blog-post-wrap">
                            @foreach ($articles as $item)
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="blog-post-item-two">
                                        <div class="blog-post-thumb-two">
                                            <a href="{{route('detail.berita')}}"><img src="assets/img/blog/h3_blog_img01.jpg" alt=""></a>
                                            <a href="blog.html" class="tag tag-two">{{$item->kategori->title}}</a>
                                        </div>
                                        <div class="blog-post-content-two">
                                            <h2 class="title"><a href="blog-details.html">{{$item->title}}</a></h2>
                                            <p>{!!$item->body!!}</p>
                                            <div class="blog-meta">
                                                <ul class="list-wrap">
                                                    <li>
                                                        <a href="blog-details.html"><img src="assets/img/blog/blog_avatar01.png" alt="">Kat Doven</a>
                                                    </li>
                                                    <li><i class="far fa-calendar"></i>{{$item->date}}</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
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
                    <div class="col-29">
                        <aside class="blog-sidebar">
                            <div class="sidebar-search">
                                <form action="#">
                                    <input type="text" placeholder="Search Here . . .">
                                    <button type="submit"><i class="flaticon-search"></i></button>
                                </form>
                            </div>
                            <div class="blog-widget">
                                <h4 class="bw-title">Categories</h4>
                                <div class="bs-cat-list">
                                    <ul class="list-wrap">
                                        <li><a href="#">Business <span>(02)</span></a></li>
                                        <li><a href="#">Consulting <span>(08)</span></a></li>
                                        <li><a href="#">Corporate <span>(05)</span></a></li>
                                        <li><a href="#">Design <span>(02)</span></a></li>
                                        <li><a href="#">Fashion <span>(11)</span></a></li>
                                        <li><a href="#">Marketing <span>(12)</span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="blog-widget">
                                <h4 class="bw-title">Recent Posts</h4>
                                <div class="rc-post-wrap">
                                    <div class="rc-post-item">
                                        <div class="thumb">
                                            <a href="blog-details.html"><img src="assets/img/blog/rc_post01.jpg" alt=""></a>
                                        </div>
                                        <div class="content">
                                            <span class="date"><i class="far fa-calendar"></i>22 Jan, 2023</span>
                                            <h2 class="title"><a href="blog-details.html">Whale be raised must be in a month</a></h2>
                                        </div>
                                    </div>
                                    <div class="rc-post-item">
                                        <div class="thumb">
                                            <a href="blog-details.html"><img src="assets/img/blog/rc_post02.jpg" alt=""></a>
                                        </div>
                                        <div class="content">
                                            <span class="date"><i class="far fa-calendar"></i>22 Jan, 2023</span>
                                            <h2 class="title"><a href="blog-details.html">Whale be raised must be in a month</a></h2>
                                        </div>
                                    </div>
                                    <div class="rc-post-item">
                                        <div class="thumb">
                                            <a href="blog-details.html"><img src="assets/img/blog/rc_post03.jpg" alt=""></a>
                                        </div>
                                        <div class="content">
                                            <span class="date"><i class="far fa-calendar"></i>22 Jan, 2023</span>
                                            <h2 class="title"><a href="blog-details.html">Whale be raised must be in a month</a></h2>
                                        </div>
                                    </div>
                                    <div class="rc-post-item">
                                        <div class="thumb">
                                            <a href="blog-details.html"><img src="assets/img/blog/rc_post04.jpg" alt=""></a>
                                        </div>
                                        <div class="content">
                                            <span class="date"><i class="far fa-calendar"></i>22 Jan, 2023</span>
                                            <h2 class="title"><a href="blog-details.html">Whale be raised must be in a month</a></h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-widget">
                                <h4 class="bw-title">Tags</h4>
                                <div class="bs-tag-list">
                                    <ul class="list-wrap">
                                        <li><a href="#">Finance</a></li>
                                        <li><a href="#">Consultancy</a></li>
                                        <li><a href="#">Data</a></li>
                                        <li><a href="#">Agency</a></li>
                                        <li><a href="#">Travel</a></li>
                                    </ul>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>  
    <!-- blog-area-end -->

@endsection