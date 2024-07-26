<!-- JS here -->
<script src="{{asset('fr/assets/js/vendor/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('fr/assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('fr/assets/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('fr/assets/js/jquery.odometer.min.js')}}"></script>
<script src="{{asset('fr/assets/js/jquery.appear.js')}}"></script>
<script src="{{asset('fr/assets/js/gsap.js')}}"></script>
<script src="{{asset('fr/assets/js/ScrollTrigger.js')}}"></script>
<script src="{{asset('fr/assets/js/SplitText.js')}}"></script>
<script src="{{asset('fr/assets/js/gsap-animation.js')}}"></script>
<script src="{{asset('fr/assets/js/jarallax.min.js')}}"></script>
<script src="{{asset('fr/assets/js/jquery.parallaxScroll.min.js')}}"></script>
<script src="{{asset('fr/assets/js/particles.min.js')}}"></script>
<script src="{{asset('fr/assets/js/jquery.easypiechart.min.js')}}"></script>
<script src="{{asset('fr/assets/js/jquery.inview.min.js')}}"></script>
<script src="{{asset('fr/assets/js/swiper-bundle.min.js')}}"></script>
<script src="{{asset('fr/assets/js/slick.min.js')}}"></script>
<script src="{{asset('fr/assets/js/ajax-form.js')}}"></script>
<script src="{{asset('fr/assets/js/aos.js')}}"></script>
<script src="{{asset('fr/assets/js/wow.min.js')}}"></script>
<script src="{{asset('fr/assets/js/main.js')}}"></script>

<!-- Voice Speech -->
<script src="https://code.responsivevoice.org/responsivevoice.js?key=F4R6r0uo"></script>
<script>
    $(document).ready(function() {
        responsiveVoice.setDefaultVoice("Indonesian Male");
        $('a').mouseenter(function() {
            responsiveVoice.cancel();
            responsiveVoice.speak($(this)
        .text());
        });
        $(document).mouseup(function(e) {
            setTimeout(function() {
                responsiveVoice.cancel();
                responsiveVoice.speak(
            getSelectionText());
            }, 1);
        });
    });

    function getSelectionText() {
        var text = "";
        if (window.getSelection) {
            text = window.getSelection().toString();
        } else if (document.selection && document.selection.type != "Control") {
            text = document.selection.createRange().text;
        }
        return text;
    }
</script>
<!-- End Voice Speech -->

<!-- Widget Disabilitas -->
<script src="https://cdn.userway.org/widget.js" data-account="LMKiBTt2Mr"></script>
<!-- End Widget -->

@stack('script_vendor')
{{-- @vite('resources/js/app-guest.js') --}}

<!-- END JS -->