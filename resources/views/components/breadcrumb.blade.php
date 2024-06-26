<section class="banner-area-three" style="margin-top: 20px;">

<section class="breadcrumb-area breadcrumb-bg" data-background="{{ asset('fr/assets/img/bg/breadcrumb_bg.jpg') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-content">
                    <h2 class="title">{{$title}}</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('beranda')}}">Beranda</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{$title}}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="breadcrumb-shape-wrap">
        <img src="{{ asset('fr/assets/img/images/breadcrumb_shape01.png') }}" alt="">
        <img src="{{ asset('fr/assets/img/images/breadcrumb_shape02.png') }}" alt="">
    </div>
</section>
