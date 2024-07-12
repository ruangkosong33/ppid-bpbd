<!-- InfoGrafis -->
<section class="services-area-two services-bg-two" data-background="{{asset('fr/assets/img/bg/services_bg02.jpg')}}">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-8">
                    <div class="section-title-two mb-60 tg-heading-subheading animation-style3">
                            <span class="sub-title">Berita Infografis</span>
                            <h6 class="title tg-element-title">Media Infografis Kami</h6>
                    </div>
                </div>
                <div class="col-lg-6 col-md-4">
                    <div class="view-all-btn text-end mb-30">
                        <a href="{{route('semua.grafis')}}" class="btn">Lihat Semua</a>
                    </div>
                </div>
            </div>
            <div class="row services-active-two">
                @forelse ($graphics as $item)
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
        </div>
</section>
<!-- End InfoGrafis -->
