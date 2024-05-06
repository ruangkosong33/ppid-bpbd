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
                        <li><a href="">Tugas Pokok & Fungsi</a></li>
                        <li><a href="{{route('keputusan')}}">Surat Keputusan</a></li>
                        <li><a href="{{route('dasar')}}">Dasar Hukum</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children"><a href="#">Informasi Publik</a>
                    <ul class="sub-menu mega-menu">
                        <li>
                            <ul class="mega-sub-menu">
                                <li><a href="index.html">Definisi Informasi Publik</a></li>
                                <li><a href="index.html">Informasi Berkala</a></li>
                                <li><a href="index-2.html">Informasi Serta Merta</a></li>
                                <li><a href="index-3.html">Informasi Setiap Saat</a></li>
                                <li><a href="index-3.html">Informasi Dikecualikan</a></li>
                                <li><a href="index-3.html">Formulir Permohonan <br> Informasi</a></li>
                                <li><a href="index-3.html">Formulir Pengajuan <br> Keberatan Informasi</a></li>
                                <li><a href="index-3.html">Anggaran Kegiatan</a></li>
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
                                <li><a href="index-3.html">Notulen</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="menu-item-has-children"><a href="#">Layanan</a>
                    <ul class="sub-menu mega-menu">
                        <li>
                            <ul class="mega-sub-menu">
                                <li><a href="index.html">SOP</a></li>
                                <li><a href="index-3.html">Waktu & Layanan</a></li>
                                <li><a href="index-3.html">Standar Biaya</a></li>
                                <li><a href="{{route('sarana')}}">Sarana & Prasarana</a></li>
                                <li><a href="index-3.html">Produk Hukum</a></li>
                            </ul>
                        </li>
                        <li>
                            <ul class="mega-sub-menu">
                                <li><a href="index.html">Kode Etik</a></li>
                                <li><a href="index-2.html">Maklumat Pelayanan</a></li>
                                <li><a href="index-2.html">Hak Atas Informasi</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="contact.html">Dokumentasi</a></li>
                <li><a href="contact.html">SP4N Lapor</a></li>

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
                        <a href="tel:0123456789">+123 8989 444</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</div>
