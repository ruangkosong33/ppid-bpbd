 <!-- header-area -->
 <header class="transparent-header">
     <div class="heder-top-wrap">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="header-top-left header-top-left-two">
                        <ul class="list-wrap">
                            <li><i class="flaticon-location"></i>256 Avenue, Mark Street, Newyork City</li>
                            <li><i class="flaticon-mail"></i><a href="mailto:gerow@gmail.com">gerow@gmail.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="header-top-right header-top-right-two">
                        <div class="header-social">
                            <ul class="list-wrap">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </div>
     <div id="sticky-header" class="menu-area">
         <div class="container">
             <div class="row">
                 <div class="col-12">
                     <div class="mobile-nav-toggler"><i class="fas fa-bars"></i></div>
                     
                     <!-- Menu Navbar -->
                     @include('layouts.guest.master.f-nav')
                     <!-- End Menu Navbar -->

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

 </header>
 <!-- header-area-end -->
