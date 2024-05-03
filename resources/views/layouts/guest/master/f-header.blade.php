<header  id="sticky-header" class="transparent-header header-style-three">
    <div class="menu-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                    
                    <!-- Nav -->
                    @include('layouts.guest.master.f-nav')
                    <!-- End Nav -->

                    <!-- Mobile Menu  -->
                    @include('layouts.guest.master.f-mobile')
                    <!-- End Mobile Menu -->

                </div>
            </div>
        </div>
    </div>

    <!-- header-search -->
    <div class="search-popup-wrap" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="search-close">
            <span><i class="fas fa-times"></i></span>
        </div>
        <div class="search-wrap text-center">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="title">... Search Here ...</h2>
                        <div class="search-form">
                            <form action="#">
                                <input type="text" name="search" placeholder="Type keywords here">
                                <button class="search-btn"><i class="fas fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- header-search-end -->

    <!-- offCanvas-menu -->
    <div class="extra-info">
        <div class="close-icon menu-close">
            <button><i class="far fa-window-close"></i></button>
        </div>
        <div class="logo-side mb-30">
            <a href="index.html"><img src="assets/img/logo/logo.png" alt="Logo"></a>
        </div>
        <div class="side-info mb-30">
            <div class="contact-list mb-30">
                <h4>Office Address</h4>
                <p>123/A, Miranda City Likaoli <br> Prikano, Dope</p>
            </div>
            <div class="contact-list mb-30">
                <h4>Phone Number</h4>
                <p>+0989 7876 9865 9</p>
                <p>+(090) 8765 86543 85</p>
            </div>
            <div class="contact-list mb-30">
                <h4>Email Address</h4>
                <p>info@example.com</p>
                <p>example.mail@hum.com</p>
            </div>
        </div>
        <ul class="side-instagram list-wrap">
            <li><a href="#"><img src="assets/img/images/sb_insta01.jpg" alt=""></a></li>
            <li><a href="#"><img src="assets/img/images/sb_insta02.jpg" alt=""></a></li>
            <li><a href="#"><img src="assets/img/images/sb_insta03.jpg" alt=""></a></li>
            <li><a href="#"><img src="assets/img/images/sb_insta04.jpg" alt=""></a></li>
            <li><a href="#"><img src="assets/img/images/sb_insta05.jpg" alt=""></a></li>
            <li><a href="#"><img src="assets/img/images/sb_insta06.jpg" alt=""></a></li>
        </ul>
        <div class="social-icon-right mt-30">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-google-plus-g"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
    </div>
    <div class="offcanvas-overly"></div>
    <!-- offCanvas-menu-end -->

</header>