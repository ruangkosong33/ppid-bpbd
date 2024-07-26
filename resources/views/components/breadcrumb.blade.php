<section class="banner-area-three" style="margin-top: 20px;">

<section class="breadcrumb-area breadcrumb-bg" data-background="{{ asset('fr/assets/img/bg/banner-breadcrumb.png') }}">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-content">
                    <h2 class="title">@yield('title')</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            @section('breadcrumb')
                            
                            @show
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
