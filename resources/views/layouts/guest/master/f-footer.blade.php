<footer>
    <div class="footer-area-two footer-bg-two" data-background="{{asset('fr/assets/img/bg/h2_footer_bg.jpg')}}">
        <div class="footer-top-two">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-7">
                        <div class="footer-widget">
                            <div class="fw-logo">
                                <a href="index.html"><img src="assets/img/logo/w_logo.png" alt=""></a>
                            </div>
                            <div class="footer-content">
                                <p>PPID BPBD Provinsi Kaltim adalah unit kerja di instansi pemerintah yang bertanggung jawab untuk mengelola dan menyediakan informasi publik. </p>
                                <div class="footer-social footer-social-three">
                                    <ul class="list-wrap">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-5 col-sm-6">
                        <div class="footer-widget">
                            <h4 class="fw-title">Menu Pintasan</h4>
                            <div class="footer-link">
                                <ul class="list-wrap">
                                    <li><a href="{{route('hak')}}">Hak Atas Informasi</a></li>
                                    <li><a href="{{route('sarana')}}">Sarana & Prasarana</a></li>
                                    <li><a href="{{route('etik')}}">Kode Etik</a></li>
                                    <li><a href="{{route('maklumat')}}">Maklumat Pelayanan</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-5 col-sm-6">
                        <div class="footer-widget">
                            <h4 class="fw-title">Daftar Informasi Publik</h4>
                            <div class="footer-link">
                                <ul class="list-wrap">
                                    <li><a href="{{route('berkala.index')}}">Informasi Berkala</a></li>
                                    <li><a href="{{route('sertamerta.index')}}">Informasi Serta Merta</a></li>
                                    <li><a href="{{route('setiapsaat.index')}}">Informasi Setiap Saat</a></li>
                                    <li><a href="contact.html">Informasi Di Kecualikan</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-7">
                        <div class="footer-widget">
                            <h4 class="fw-title">Kontak Kami</h4>
                            <div class="footer-info">
                                @foreach ($settings as $item)
                                <ul class="list-wrap">
                                    <li>
                                        <div class="icon">
                                            <i class="flaticon-pin"></i>
                                        </div>
                                        <div class="content">
                                            <p>{{$item->address}}</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="flaticon-phone-call"></i>
                                        </div>
                                        <div class="content">
                                            <a href="tel:0541741040">0541 - {{$item->phone}}</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon">
                                            <i class="flaticon-clock"></i>
                                        </div>
                                        <div class="content">
                                            <p>Senin – Kamis : <span>08.00 – 16.30</span>
                                            <p>Jumat : <span>08.00 – 12.00</span>
                                            <br> 
                                            Sabtu - Minggu : <span>Tutup</span></p>
                                        </div>
                                    </li>
                                </ul>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom-three">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright-text-two text-center">
                            <p>Copyright 2024 ©PPID - BPBD Provinsi Kalimantan Timur</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>