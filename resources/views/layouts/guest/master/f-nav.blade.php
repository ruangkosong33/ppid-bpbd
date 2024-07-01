<div class="menu-wrap">
    <nav class="menu-nav">
        <div class="logo">
            <a href="index.html"><img src="{{asset('fr/assets/img/logo/logo.png')}}" alt="Logo"></a>
        </div>
        <div class="navbar-wrap main-menu d-none d-lg-flex">
            <ul class="navigation">
                <li><a href="{{route('beranda')}}">Beranda</a></li>
                <li class="menu-item-has-children"><a href="#">Profil</a>
                    <ul class="sub-menu">
                        <li><a href="{{route('visi')}}">Visi & Misi</a></li>
                        <li><a href="{{route('struktur')}}">Struktur Organisasi</a></li>
                        <li><a href="{{route('fungsi')}}">Tugas Pokok & Fungsi</a></li>
                        <li><a href="{{route('keputusan')}}">Surat Keputusan</a></li>
                        <li><a href="{{route('dasar')}}">Dasar Hukum</a></li>
                        <li><a href="{{route('semua.team')}}">Tim PPID</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children"><a href="#">Informasi Publik</a>
                    <ul class="sub-menu mega-menu">
                        <li>
                            <ul class="mega-sub-menu">
                                <li><a href="{{route('definisi')}}">Definisi Informasi Publik</a></li>
                                <li><a href="{{route('berkala.index')}}">Informasi Berkala</a></li>
                                <li><a href="{{route('sertamerta.index')}}">Informasi Serta Merta</a></li>
                                <li><a href="{{route('setiapsaat.index')}}">Informasi Setiap Saat</a></li>
                                <li><a href="{{route('kecualikan.index')}}">Informasi Dikecualikan</a></li>
                                <li><a href="index-3.html">Formulir Permohonan <br> Informasi</a></li>
                                <li><a href="index-3.html">Formulir Pengajuan <br> Keberatan Informasi</a></li>
                                <li><a href="{{route('anggaran')}}">Anggaran Kegiatan</a></li>
                                <li><a href="index-3.html">Pengadaan Barang & Jasa</a></li>
                            </ul>
                        </li>
                        <li>
                            <ul class="mega-sub-menu">
                                <li><a href="index-3.html">Tata Cara Permohonan <br> Informasi</a></li>
                                <li><a href="index-3.html">Tata Cara Pengajuan <br> Keberatan Informasi</a></li>
                                <li><a href="index-3.html">Tata Cara Sengketa <br> Informasi</a></li>
                                <li><a href="index-3.html">Laporan Tahunan</a></li>
                                <li><a href="index-3.html">Survey Layanan</a></li>
                                <li><a href="{{route('notulen')}}">Notulen</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="menu-item-has-children"><a href="#">Layanan</a>
                    <ul class="sub-menu mega-menu">
                        <li>
                            <ul class="mega-sub-menu">
                                <li><a href="index.html">SOP</a></li>
                                <li><a href="{{route('waktu')}}">Waktu & Layanan</a></li>
                                <li><a href="{{route('standar')}}">Standar Biaya</a></li>
                                <li><a href="{{route('sarana')}}">Sarana & Prasarana</a></li>
                                <li><a href="index-3.html">Produk Hukum</a></li>
                            </ul>
                        </li>
                        <li>
                            <ul class="mega-sub-menu">
                                <li><a href="{{route('etik')}}">Kode Etik</a></li>
                                <li><a href="{{route('maklumat')}}">Maklumat Pelayanan</a></li>
                                <li><a href="{{route('hak')}}">Hak Atas Informasi</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="menu-item-has-children"><a href="#">Berita</a>
                    <ul class="sub-menu mega-menu">
                        <li>
                            <ul class="mega-sub-menu">
                                <li><a href="{{route('semua.berita')}}">Berita Utama</a></li>
                                <li><a href="{{route('semua.grafis')}}">Berita Infografis</a></li>
                            </ul>
                        </li>
                        <li>
                            <ul class="mega-sub-menu">
                                <li><a href="{{route('etik')}}">Galeri Foto</a></li>
                                <li><a href="{{route('maklumat')}}">Galeri Video</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                
                <li><a href="https://www.lapor.go.id">SP4N Lapor</a></li>

            </ul>
        </div>
        <div class="header-action">
            <ul class="list-wrap">
                {{-- <li class="header-search"><a href="#"><i class="flaticon-search"></i></a></li> --}}
                <li class="offcanvas-menu offcanvas-menu-two">
                    <a href="#" class="menu-tigger">
                        <span></span>
                        <span></span>
                        <span></span>
                    </a>
                </li>
                <li class="header-contact-two">
                    <div class="icon">
                        <i class="flaticon-phone-call"></i>
                    </div>
                    <div class="content">
                        <span>No. Kontak Kami</span>
                        @foreach ($settings as $item)
                        <a href="tel:0541741040">(0541)-{{$item->phone}}</a>
                        @endforeach
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</div>
