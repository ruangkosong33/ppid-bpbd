<!-- team-area -->
    <section class="team-area-three">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title-two text-center mb-50 tg-heading-subheading animation-style1">
                        <span class="sub-title tg-element-title">TIM PPID BPBD</span>
                        <h2 class="title tg-element-title">Bertemu Tim Kami</h2>

                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                @forelse ($frontTeams->slice(0, 4) as $item)
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-10">
                    <div class="team-item-five">
                        <div class="team-thumb-five">
                            <img src="{{ asset('storage/image-team/' . $item->image) }}" alt="{{$item->image}}">
                        </div>
                        <div class="team-content-five">
                            <h2 class="title"><a href="{{route('detail.team', $item->slug)}}">{{$item->name}}</a></h2>
                            <span>{{$item->job}}</span>
                            <div class="team-social-four">
                                <ul class="list-wrap">
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                Tidak Ada Data 
                @endforelse
            </div>
        </div>
    </section>
<!-- team-area-end -->

  
