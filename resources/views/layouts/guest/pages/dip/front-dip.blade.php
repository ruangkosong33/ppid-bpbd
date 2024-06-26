<!-- Kategori DIP -->
<section class="features-area-three">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-7">
                <div class="section-title-two text-center mb-40 tg-heading-subheading animation-style1">
                    <span class="sub-title tg-element-title">Layanan Kami</span>
                    <h2 class="title tg-element-title">Daftar Informasi Publik</h2>
                </div>
            </div>
        </div>
        <div class="features-item-wrap-two">
            <div class="row justify-content-center">
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="features-item-three">
                        <div class="features-icon-three">
                            <i class="flaticon-layers"></i>
                        </div>
                        @foreach ($sertamertaFront as $item)
                        <div class="features-content-three">
                            <h2 class="title">{{$item->title}}</h2>
                            <p>{!!$item->body!!}</p>
                            <a href="{{route('sertamerta.index')}}" class="link-btn">Lihat Detail <img src="assets/img/icons/right-arrow.svg" alt=""></a>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="features-item-three">
                        <div class="features-icon-three">
                            <i class="flaticon-layers"></i>
                        </div>
                        @foreach ($setiapsaatFront as $item)
                        <div class="features-content-three">
                            <h2 class="title">{{$item->title}}</h2>
                            <p>{!!$item->body!!}</p>
                            <a href="{{route('sertamerta.index')}}" class="link-btn">Lihat Detail <img src="assets/img/icons/right-arrow.svg" alt=""></a>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="features-item-three">
                        <div class="features-icon-three">
                            <i class="flaticon-layers"></i>
                        </div>
                        @foreach ($berkalaFront as $item)
                        <div class="features-content-three">
                            <h2 class="title">{{$item->title}}</h2>
                            <p>{!!$item->body!!}</p>
                            <a href="{{route('berkala.index')}}" class="link-btn">Lihat Detail <img src="assets/img/icons/right-arrow.svg" alt=""></a>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="features-item-three">
                        <div class="features-icon-three">
                            <i class="flaticon-layers"></i>
                        </div>
                        @foreach ($kecualikanFront as $item)
                        <div class="features-content-three">
                            <h2 class="title">{{$item->title}}</h2>
                            <p>{!!$item->body!!}</p>
                            <a href="{{route('kecualikan.index')}}" class="link-btn">Lihat Detail <img src="assets/img/icons/right-arrow.svg" alt=""></a>
                        </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- End Kategori DIP-->