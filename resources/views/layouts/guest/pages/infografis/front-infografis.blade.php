<!-- services-area -->
<section class="services-area-two services-bg-two" data-background="assets/img/bg/services_bg02.jpg">
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
                <div class="row justify-content-center">
                        @forelse ($graphics as $item)
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                            <div class="services-item-two">
                                <div class="services-thumb-two">
                                    <img src="{{ asset('storage/image-grafis/' . $item->image) }}" alt="{{$item->image}}">
                                    <div class="item-shape">
                                        <img src="{{asset('fr/assets/img/services/services_item_shape.png')}}" alt="">
                                    </div>
                                </div>
                                <div class="services-content-two">
                                    <div class="icon">
                                        <i class="flaticon-layers"></i>
                                    </div>
                                    <h2 class="title"><a href="{{route('detail.grafis', $item->slug)}}">{{$item->title}}</a></h2>
                                    {{-- <p>Morem ipsum dolor ametey consectre adipiscing.</p> --}}
                                </div>
                            </div>
                        </div>
                        @empty
                        Tidak Ada Data Infografis
                        @endforelse
                </div>
        </div>
</section>
