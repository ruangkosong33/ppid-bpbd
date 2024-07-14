 <!-- Widget -->
 <section class="pricing-area-four fix pricing-bg" data-background="assets/img/bg/h7_pricing_bg.jpg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-title-two text-center mb-60 tg-heading-subheading animation-style2">
                    <span class="sib-title tg-element-title">Social Network</span>
                    <h2 class="title tg-element-title">Ikuti Media Sosial Kami</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 col-sm-9">
                <div class="pricing-box active">
                    <span class="popular-tag">INSTAGRAM</span>
                    <div class="pricing-head">
                        <div class="elfsight-app-356fee99-ff74-41b1-874b-6d9542fedad4" data-elfsight-app-lazy></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-9">
                <div class="pricing-box active">
                    <span class="popular-tag">GPR KOMINFO</span>
                    <div class="pricing-head">
                        <div id="gpr-kominfo-widget-container"></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-9">
                <div class="pricing-box active">
                    <span class="popular-tag">YOUTUBE</span>
                    <div class="pricing-head">
                        <div class="elfsight-app-f38e1076-d04a-48aa-8157-990f02a76be3" data-elfsight-app-lazy></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="pricing-shape-two">
        <img src="{{asset('fr/assets/img/images/h7_pricing_shape01.png')}}" alt="shape" data-aos="fade-up" data-aos-delay="400">
        <img src="{{asset('fr/assets/img/images/h7_pricing_shape02.png')}}" alt="shape">
    </div>
</section>
<!-- End Widget-->

@push('script_vendor')
    <script type="text/javascript" src="https://widget.kominfo.go.id/gpr-widget-kominfo.min.js"></script>
    <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
@endpush