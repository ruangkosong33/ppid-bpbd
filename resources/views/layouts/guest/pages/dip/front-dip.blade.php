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
                @foreach ($katdips as $item)
                <div class="col-xl-3 col-lg-4 col-md-6">
                    <div class="features-item-three">
                        <div class="features-icon-three">
                            <i class="flaticon-layers"></i>
                        </div>
                        <div class="features-content-three">
                            <h2 class="title">{{$item->title}}</h2>
                            <p>{!!$item->body!!}</p>
                            <a href="services-details.html" class="link-btn">See Details <img src="assets/img/icons/right-arrow.svg" alt=""></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
<!-- End Kategori DIP-->