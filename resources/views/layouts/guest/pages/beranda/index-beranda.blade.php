@extends('layouts.guest.master.f-master')

@section('content')

    <!-- Banner -->
    @include('layouts.guest.pages.banner.front-banner')
    <!-- End Banner -->

    <!-- Daftar Informasi Publik -->
    @include('layouts.guest.pages.dip.front-dip')
    <!-- End Daftar Informasi Publik -->

    <!-- Infogragis -->
    @include('layouts.guest.pages.infografis.front-infografis')
    <!-- Enf Infografis -->

    <!-- team-area -->
    @include('layouts.guest.pages.team.front-team')
    <!-- team-area-end -->

    <!-- blog-area -->
    @include('layouts.guest.pages.post.front-post')
    <!-- blog-area-end -->

    <br>
    
    <!-- Partner -->
    @include('layouts.guest.pages.partner.front-partner')
    <!-- End Partner -->


@endsection
