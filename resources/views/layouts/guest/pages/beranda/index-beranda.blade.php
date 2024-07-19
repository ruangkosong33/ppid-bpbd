@extends('layouts.guest.master.f-master')

@section('content')

    <!-- Banner -->
    @include('layouts.guest.pages.banner.front-banner')
    <!-- End Banner -->

    <!-- Daftar Informasi Publik -->
    @include('layouts.guest.pages.dip.front-dip')
    <!-- End Daftar Informasi Publik -->

    <!-- Alur Proses -->
    @include('layouts.guest.pages.alur-permohonan.alur-permohonan')
    <!-- End Alur Proses -->

    <!-- Total DIP -->
    @include('layouts.guest.pages.dip.total-dip')
    <!-- End Total DIP -->

    <!-- Alur Proses -->
    {{-- @include('layouts.guest.pages.alur-keberatan.alur-keberatan') --}}
    <!-- End Alur Proses -->

    <!-- TIM PPID -->
    @include('layouts.guest.pages.team.front-team')
    <!-- End TIM PPID -->

    <!-- Berita -->
    @include('layouts.guest.pages.post.front-post')
    <!-- End Berita -->

    <!-- Infogragis -->
    @include('layouts.guest.pages.infografis.front-infografis')
    <!-- Enf Infografis -->

    <!-- Media Sosial -->
    @include('layouts.guest.pages.medsos.front-medsos')
    <!-- End Media Sosial -->

    <br>
    
    <!-- Partner -->
    @include('layouts.guest.pages.partner.front-partner')
    <!-- End Partner -->


@endsection
