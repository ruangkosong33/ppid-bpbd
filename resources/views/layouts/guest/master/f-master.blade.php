<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>PPID - KALTIM</title>
        <meta name="description" content="Gerow - Business Consulting HTML Template">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="shortcut icon" type="image/x-icon" href="{{asset('fr/assets/img/pemprov-kaltim.png')}}">
        <!-- Place favicon.ico in the root directory -->

        @stack('css_vendor')
        @vite([ 'resources/sass/app-guest.scss'])
    </head>
    <body>

		<!-- Scroll-top -->
        <button class="scroll-top scroll-to-target" data-target="html">
            <i class="fas fa-angle-up"></i>
        </button>
        <!-- Scroll-top-end-->

        <!-- header-area -->
        @include('layouts.guest.master.f-header')
        <!-- header-area-end -->

        <!-- main-area -->
        <main class="fix">
            @yield('content')
        </main>
        <!-- main-area-end -->

        <!-- footer-area -->
        @include('layouts.guest.master.f-footer')
        <!-- footer-area-end -->

        <!-- JS Area -->
        @include('layouts.guest.master.f-js')
        <!-- End JS Area -->

    </body>
</html>
