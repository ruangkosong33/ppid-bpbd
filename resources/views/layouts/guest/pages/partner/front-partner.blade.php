<section class="brand-aera-two">
    <div class="container">
        <div class="brand-item-wrap">
            <h4 class="title">Mitra Kami</h6>
            <div class="row brand-active">
                @foreach ($partners as $item)
                <div class="col-lg-12">
                    <div class="brand-item">
                        <a href="{{ $item->link }}" target="_blank">
                            <img src="{{ asset('storage/image-partner/' . $item->image) }}" alt="{{ $item->image }}">
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
