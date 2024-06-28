<!-- team-area -->
    <section class="team-area-three">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title-two text-center mb-50 tg-heading-subheading animation-style1">
                        <span class="sub-title tg-element-title">TIM PPID BPBD</span>
                        <h2 class="title tg-element-title">Bertemu Tim Kami</h2>
                        {{-- <p>Ever find yourself staring at your computer screen a good consulting slogan to come to mind? Oftentimes.</p> --}}
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                @foreach ($teams as $item)
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                    <div class="team-item-three">
                        <div class="team-thumb-three">
                            <img src="{{ asset('storage/image-team/' . $item->image) }}" alt="{{$item->image}}">
                            <div class="team-social-three">
                                <div class="social-toggle-icon">
                                    <i class="fas fa-share-alt"></i>
                                </div>
                                <ul class="list-wrap">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="team-content-three">
                            <h4 class="title"><a href="team-details.html">{{$item->name}}</a></h4>
                            <span>{{$item->job}}</span>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
<!-- team-area-end -->

  
