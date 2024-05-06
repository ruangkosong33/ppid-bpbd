@extends('layouts.guest.master.f-master')

@section('content')
    <!-- banner-area -->
    @include('layouts.guest.pages.banner.front-banner')
    <!-- banner-area-end -->

    <!-- features-area -->
    <section class="features-area-three">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-7">
                    <div class="section-title-two text-center mb-40 tg-heading-subheading animation-style1">
                        <span class="sub-title tg-element-title">Layanan Kami</span>
                        <h2 class="title tg-element-title">Daftar Informasi Publik</h2>
                    </div>
                </div>
            </div>
            <div class="features-item-wrap-two">
                <div class="row justify-content-center">
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="features-item-three">
                            <div class="features-icon-three">
                                <i class="flaticon-inspiration"></i>
                            </div>
                            <div class="features-content-three">
                                <h2 class="title">Informasi Setiap Saat</h2>
                                <p>Morem ipsum dolor sittemet consectetur adipiscing elitflorai psum dolor.</p>
                                <a href="services-details.html" class="link-btn">See Details <img src="assets/img/icons/right-arrow.svg" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="features-item-three">
                            <div class="features-icon-three">
                                <i class="flaticon-layers"></i>
                            </div>
                            <div class="features-content-three">
                                <h2 class="title">Informasi Berkala</h2>
                                <p>Morem ipsum dolor sittemet consectetur adipiscing elitflorai psum dolor.</p>
                                <a href="services-details.html" class="link-btn">See Details <img src="assets/img/icons/right-arrow.svg" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="features-item-three">
                            <div class="features-icon-three">
                                <i class="flaticon-calculator"></i>
                            </div>
                            <div class="features-content-three">
                                <h2 class="title">Informasi Serta Merta</h2>
                                <p>Morem ipsum dolor sittemet consectetur adipiscing elitflorai psum dolor.</p>
                                <a href="services-details.html" class="link-btn">See Details <img src="assets/img/icons/right-arrow.svg" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="features-item-three">
                            <div class="features-icon-three">
                                <i class="flaticon-investment"></i>
                            </div>
                            <div class="features-content-three">
                                <h2 class="title">Informasi Dikecualikan</h2>
                                <p>Morem ipsum dolor sittemet consectetur adipiscing elitflorai psum dolor.</p>
                                <a href="services-details.html" class="link-btn">See Details <img src="assets/img/icons/right-arrow.svg" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- features-area-end -->

    <!-- brand-area -->
    @include('layouts.guest.pages.partner.front-partner')
    <!-- brand-area-end -->

    <!-- about-area -->
    <section class="about-area-four pb-120">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-7 col-md-10 order-0 order-lg-2">
                    <div class="about-img-wrap-four">
                        <div class="mask-img-wrap">
                            <img src="assets/img/images/h3_about_img01.jpg" alt="">
                        </div>
                        <div class="icon"><i class="flaticon-business-presentation"></i></div>
                        <img src="assets/img/images/h3_about_img02.jpg" alt="" class="img-two">
                        <div class="about-shape-wrap-three">
                            <img src="assets/img/images/h3_about_shape01.png" alt="">
                            <img src="assets/img/images/h3_about_shape02.png" alt="">
                            <img src="assets/img/images/h3_about_shape03.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="about-content-four">
                        <div class="section-title-two mb-30 tg-heading-subheading animation-style1">
                            <span class="sub-title tg-element-title">Get To know US</span>
                            <h2 class="title tg-element-title">We are the next gen Business experience</h2>
                        </div>
                        <p>With over 25 years of experience, we have crafted thousands of Strategic discovery process that enables us to peel back which enable us to understand.</p>
                        <div class="about-list-three">
                            <ul class="list-wrap">
                                <li>
                                    <div class="icon">
                                        <i class="flaticon-profit"></i>
                                    </div>
                                    <div class="content">
                                        <h2 class="title">Business Growth</h2>
                                        <p>eiusmod temporincididunt ut labore magna aliqua Quisery.</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="icon">
                                        <i class="flaticon-mission"></i>
                                    </div>
                                    <div class="content">
                                        <h2 class="title">Target Audience</h2>
                                        <p>eiusmod temporincididunt ut labore magna aliqua Quisery.</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about-area-end -->

    <!-- overview-area -->
    <section class="overview-area-two">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 col-md-10">
                    <div class="overview-img-two">
                        <div class="mask-img-two">
                            <img src="assets/img/images/h3_overview_img01.jpg" alt="">
                        </div>
                        <img src="assets/img/images/h3_overview_img02.jpg" alt="" class="img-two" data-parallax='{"y" : 100 }'>
                        <div class="overview-shape-wrap">
                            <img src="assets/img/images/h3_overview_shape01.png" alt="">
                            <img src="assets/img/images/h3_overview_shape02.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="overview-content-two">
                        <div class="section-title-two mb-30 tg-heading-subheading animation-style1">
                            <span class="sub-title tg-element-title">Company Overview</span>
                            <h2 class="title tg-element-title">We Prepare An Effective Strategy For Companies</h2>
                        </div>
                        <p>Morem ipsum dolor sit amet, consectetur adipiscing elita florai psum dolor sit amet, consecteture.</p>
                        <div class="progress-wrap">
                            <div class="progress-item">
                                <h6 class="title">Consulting</h6>
                                <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="85" aria-valuemin="0"
                                    aria-valuemax="100">
                                    <div class="progress-bar wow slideInLeft" data-wow-delay=".1s" style="width: 85%"><span>85%</span></div>
                                </div>
                            </div>
                            <div class="progress-item">
                                <h6 class="title">Investment</h6>
                                <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="76" aria-valuemin="0"
                                    aria-valuemax="100">
                                    <div class="progress-bar wow slideInLeft" data-wow-delay=".2s" style="width: 76%"><span>76%</span></div>
                                </div>
                            </div>
                            <div class="progress-item">
                                <h6 class="title">Investment</h6>
                                <div class="progress" role="progressbar" aria-label="Example with label" aria-valuenow="90" aria-valuemin="0"
                                    aria-valuemax="100">
                                    <div class="progress-bar wow slideInLeft" data-wow-delay=".3s" style="width: 90%"><span>90%</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- overview-area-end -->

    <!-- project-area -->
    <section class="project-area-three pb-90">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-8">
                    <div class="section-title-two mb-40 tg-heading-subheading animation-style1">
                        <span class="sub-title tg-element-title">Complete Projects</span>
                        <h2 class="title tg-element-title">A Complete Solution For Global Business</h2>
                    </div>
                </div>
                <div class="col-lg-7 col-md-4">
                    <div class="view-all-btn text-end mb-30">
                        <a href="project-details.html" class="btn btn-three">See All Projects</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container custom-container-three">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="project-item-three">
                        <div class="project-thumb-three">
                            <a href="project-details.html"><img src="assets/img/project/h3_project_img01.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="project-item-three">
                        <div class="project-thumb-three">
                            <a href="project-details.html"><img src="assets/img/project/h3_project_img02.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="project-item-three">
                        <div class="project-thumb-three">
                            <a href="project-details.html"><img src="assets/img/project/h3_project_img03.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="project-item-three">
                        <div class="project-thumb-three">
                            <a href="project-details.html"><img src="assets/img/project/h3_project_img04.jpg" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- project-area-end -->

    <!-- counter-area -->
    <section class="counter-area-two">
        <div class="container">
            <div class="counter-item-wrap">
                <div class="row justify-content-center">
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="counter-item-two">
                            <h2 class="count"><span class="odometer" data-count="95"></span>%</h2>
                            <p>Success Rate</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="counter-item-two">
                            <h2 class="count"><span class="odometer" data-count="55"></span>k</h2>
                            <p>Complete Projects</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="counter-item-two">
                            <h2 class="count"><span class="odometer" data-count="25"></span>k</h2>
                            <p>Satisfied Clients</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="counter-item-two">
                            <h2 class="count"><span class="odometer" data-count="15"></span>k</h2>
                            <p>Trade In The World</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- counter-area-end -->

    <!-- team-area -->
    <section class="team-area-three">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title-two text-center mb-50 tg-heading-subheading animation-style1">
                        <span class="sub-title tg-element-title">Expert People</span>
                        <h2 class="title tg-element-title">Dedicated Team Members</h2>
                        <p>Ever find yourself staring at your computer screen a good consulting slogan to come to mind? Oftentimes.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                    <div class="team-item-three">
                        <div class="team-thumb-three">
                            <img src="assets/img/team/h3_team_img01.png" alt="">
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
                            <h4 class="title"><a href="team-details.html">Brooklyn Simmons</a></h4>
                            <span>Finance Advisor</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                    <div class="team-item-three">
                        <div class="team-thumb-three">
                            <img src="assets/img/team/h3_team_img02.png" alt="">
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
                            <h4 class="title"><a href="team-details.html">Jenny Wilson</a></h4>
                            <span>Finance Advisor</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                    <div class="team-item-three">
                        <div class="team-thumb-three">
                            <img src="assets/img/team/h3_team_img03.png" alt="">
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
                            <h4 class="title"><a href="team-details.html">Ronald Richards</a></h4>
                            <span>Finance Advisor</span>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-sm-8">
                    <div class="team-item-three">
                        <div class="team-thumb-three">
                            <img src="assets/img/team/h3_team_img04.png" alt="">
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
                            <h4 class="title"><a href="team-details.html">Marvin McKinney</a></h4>
                            <span>Finance Advisor</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- team-area-end -->

    <!-- testimonial-area -->
    <section class="testimonial-area-three">
        <div class="container">
            <div class="row g-0 align-items-end">
                <div class="col-37">
                    <div class="testimonial-img-three">
                        <img src="assets/img/images/h3_testimonial_img.jpg" alt="">
                    </div>
                </div>
                <div class="col-63">
                    <div class="testimonial-item-wrap-three" data-background="assets/img/bg/h3_testimonial_bg.png">
                        <div class="testimonial-active-three">
                            <div class="testimonial-item-three">
                                <div class="testimonial-content-three">
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <p>“ Morem ipsum dolor sit amet, consectetur adipiscing elita florai sum dolor sit amet, consecteture.Borem ipsum dolor sit amet, consectetur adipiscing elita Moremsit amet.</p>
                                    <div class="testimonial-info">
                                        <h2 class="title">Mr.Robey Alexa</h2>
                                        <span>CEO, Gerow Agency</span>
                                    </div>
                                </div>
                            </div>
                            <div class="testimonial-item-three">
                                <div class="testimonial-content-three">
                                    <div class="rating">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                    <p>“ Morem ipsum dolor sit amet, consectetur adipiscing elita florai sum dolor sit amet, consecteture.Borem ipsum dolor sit amet, consectetur adipiscing elita Moremsit amet.</p>
                                    <div class="testimonial-info">
                                        <h2 class="title">Mr.Robey Alexa</h2>
                                        <span>CEO, Gerow Agency</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-nav-three"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial-area-end -->

    <!-- cta-area -->
    <section class="cta-area-two pt-120">
        <div class="container">
            <div class="cta-inner-wrap-two" data-background="assets/img/bg/cta_bg02.jpg">
                <div class="row align-items-center">
                    <div class="col-lg-9">
                        <div class="cta-content">
                            <div class="cta-info-wrap">
                                <div class="icon">
                                    <i class="flaticon-phone-call"></i>
                                </div>
                                <div class="content">
                                    <span>Call For More Info</span>
                                    <a href="tel:0123456789">+123 8989 444</a>
                                </div>
                            </div>
                            <h2 class="title">Let’s Request a Schedule For Free Consultation</h2>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="cta-btn text-end">
                            <a href="contact.html" class="btn btn-three">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- cta-area-end -->

    <!-- blog-area -->
    <section class="blog-area-three pt-120 pb-90">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title-two text-center mb-50 tg-heading-subheading animation-style1">
                        <span class="sub-title tg-element-title">News & Blogs</span>
                        <h2 class="title tg-element-title">Read Our Latest Updates</h2>
                        <p>Ever find yourself staring at your computer screen a good consulting slogan to come to mind? Oftentimes.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="blog-post-item-two">
                        <div class="blog-post-thumb-two">
                            <a href="blog-details.html"><img src="assets/img/blog/h3_blog_img01.jpg" alt=""></a>
                            <a href="blog.html" class="tag tag-two">Development</a>
                        </div>
                        <div class="blog-post-content-two">
                            <h2 class="title"><a href="blog-details.html">Meet AutoManage, the best AI management tools</a></h2>
                            <p>Everything you need to start building area atching presence for your business.</p>
                            <div class="blog-meta">
                                <ul class="list-wrap">
                                    <li>
                                        <a href="blog-details.html"><img src="assets/img/blog/blog_avatar01.png" alt="">Kat Doven</a>
                                    </li>
                                    <li><i class="far fa-calendar"></i>22 Jan, 2023</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="blog-post-item-two">
                        <div class="blog-post-thumb-two">
                            <a href="blog-details.html"><img src="assets/img/blog/h3_blog_img02.jpg" alt=""></a>
                            <a href="blog.html" class="tag tag-two">Business</a>
                        </div>
                        <div class="blog-post-content-two">
                            <h2 class="title"><a href="blog-details.html">Meet AutoManage, the best AI management tools</a></h2>
                            <p>Everything you need to start building area atching presence for your business.</p>
                            <div class="blog-meta">
                                <ul class="list-wrap">
                                    <li>
                                        <a href="blog-details.html"><img src="assets/img/blog/blog_avatar01.png" alt="">Kat Doven</a>
                                    </li>
                                    <li><i class="far fa-calendar"></i>22 Jan, 2023</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-10">
                    <div class="blog-post-item-two">
                        <div class="blog-post-thumb-two">
                            <a href="blog-details.html"><img src="assets/img/blog/h3_blog_img03.jpg" alt=""></a>
                            <a href="blog.html" class="tag tag-two">Tax Advisory</a>
                        </div>
                        <div class="blog-post-content-two">
                            <h2 class="title"><a href="blog-details.html">Meet AutoManage, the best AI management tools</a></h2>
                            <p>Everything you need to start building area atching presence for your business.</p>
                            <div class="blog-meta">
                                <ul class="list-wrap">
                                    <li>
                                        <a href="blog-details.html"><img src="assets/img/blog/blog_avatar01.png" alt="">Kat Doven</a>
                                    </li>
                                    <li><i class="far fa-calendar"></i>22 Jan, 2023</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- blog-area-end -->

@endsection
