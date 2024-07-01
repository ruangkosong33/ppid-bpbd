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
                @forelse ($frontTeams as $item)
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                    <div class="team-item-three">
                        <div class="team-thumb-three">
                            <img src="{{ asset('storage/image-team/' . $item->image) }}" alt="{{$item->image}}">
                            <div class="team-social-three">
                                <div class="social-toggle-icon">
                                    <i class="fas fa-share-alt"></i>
                                </div>
                            </div>
                        </div>
                        <div class="team-content-three">
                            <h4 class="title"><a href="{{route('detail.team', $item->slug)}}">{{$item->name}}</a></h4>
                            <span>{{$item->job}}</span>
                        </div>
                    </div>
                </div>
                @empty
                Tidak Ada Data Tim PPID
                @endforelse
            </div>
        </div>
    </section>
<!-- team-area-end -->

  
