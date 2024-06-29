<div class="col-29">
    <aside class="blog-sidebar">
        <div class="sidebar-search">
            <form action="#">
                <input type="text" placeholder="Search Here . . .">
                <button type="submit"><i class="flaticon-search"></i></button>
            </form>
        </div>
        <div class="blog-widget">
            <h4 class="bw-title">Kategori</h4>
            <div class="bs-cat-list">
                <ul class="list-wrap">
                    @foreach ($categories as $item)
                    <li><a href="{{ route('semua.berita') }}">{{ $item->title }}</a>({{ $item->posts->count() }})</li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="blog-widget">
            <h4 class="bw-title">Berita Terbaru Lainnya</h4>
            <div class="rc-post-wrap">
                @forelse ($recent_posts as $item)
                <div class="rc-post-item">
                    <div class="thumb">
                        <a href="blog-details.html"><img src="{{ asset('storage/image-post/' . $item->image) }}" alt=""></a>
                    </div>
                    <div class="content">
                        <span class="date"><i class="far fa-calendar"></i>{{ \Carbon\Carbon::parse($item->date)->format('d-m-Y') }}</span>
                        <h2 class="title"><a href="{{route('detail.berita', $item->slug)}}">{{ Str::limit($item->title, 50) }}</a></h2>
                    </div>
                </div>
                @empty
                Tidak Ada Data
                @endforelse
            </div>
        </div>
    </aside>
</div>