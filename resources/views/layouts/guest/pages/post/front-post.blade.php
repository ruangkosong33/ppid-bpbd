@php
    use Illuminate\Support\Str;
@endphp

<!-- Post -->
<section class="blog-area-two blog-bg-two" data-background="{{asset('fr/assets/img/bg/h2_blog_bg.jpg')}}">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-title-two text-center mb-50 tg-heading-subheading animation-style3">
                    <span class="sub-title">Berita</span>
                    <h2 class="title tg-element-title">Lihat Berita Terbaru Kami</h2>
                    {{-- <p>Ever find yourself staring at your computer screen a good consulting slogan to come to mind? Oftentimes.</p> --}}
                </div>
            </div>
        </div>

        <div class="row justify-content-center">
            @foreach ($postFront as $item)
            <div class="col-lg-4 col-md-6 col-sm-10">
                <div class="blog-post-item-two">
                    <div class="blog-post-thumb-two">
                        <a href="blog-details.html"><img src="{{asset('storage/image-post/' . $item->image) }}" alt="{{$item->image}}"></a>
                        <a href="blog.html" class="tag">{{$item->kategoris->title}}</a>
                    </div>
                    <div class="blog-post-content-two">
                        <h2 class="title"><a href="{{route('detail.berita' , $item->slug)}}">{{ Str::limit($item->title, 30) }}</a></h2>
                        <p>{{ Str::limit(strip_tags($item->body), 50) }}</p>
                        <div class="blog-meta">
                            <ul class="list-wrap">
                                <li>
                                    <a href="blog-details.html"><img src="{{asset('fr/assets/img/blog/blog_avatar01.png')}}" alt="">{{$item->users->name}}</a>
                                </li>
                                <li><i class="far fa-calendar"></i>{{ \Carbon\Carbon::parse($item->date)->format('d-m-Y') }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
    
        </div>
    </div>
</section>
<!-- End Post -->