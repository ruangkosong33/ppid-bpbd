<?php

namespace App\Http\Controllers\Landing;

use App\Models\Hak;
use App\Models\Etik;
use App\Models\Visi;
use App\Models\Dasar;
use App\Models\Waktu;
use App\Models\Standar;
use App\Models\Definisi;
use App\Models\Maklumat;
use App\Models\Struktur;
use App\Models\Keputusan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TentangController extends Controller
{
    public function visis()
    {
        $visis=Visi::first()->get();

        return view('layouts.guest.pages.visi.index-visi', ['visis'=>$visis]);
    }

    public function haks()
    {
        $haks=Hak::first()->get();

        return view('layouts.guest.pages.hak.index-hak', ['haks'=>$haks]);
    }

    public function dasars()
    {
        $dasars=Dasar::first()->get();

        return view('layouts.guest.pages.dasar.index-dasar', ['dasars'=>$dasars]);
    }

    public function keputusans()
    {
        $keputusans=Keputusan::first()->get();

        return view('layouts.guest.pages.keputusan.index-keputusan', ['keputusans'=>$keputusans]);
    }

    public function definisis()
    {
        $definisis=Definisi::first()->get();

        return view('layouts.guest.pages.definisi.index-definisi', ['definisis'=>$definisis]);
    }

    public function etiks()
    {
        $etiks=Etik::first()->get();

        return view('layouts.guest.pages.etik.index-etik', ['etiks'=>$etiks]);
    }

    public function waktus()
    {
        $waktus=Waktu::first()->get();

        return view('layouts.guest.pages.waktu.index-waktu', ['waktus'=>$waktus]);
    }

    public function maklumats()
    {
        $maklumats=Maklumat::first();

        return view('layouts.guest.pages.maklumat.index-maklumat', ['maklumats'=>$maklumats]);
    }

    public function standars()
    {
        $standars=Standar::first()->get();

        return view('layouts.guest.pages.standar.index-standar', ['standars'=>$standars]);
    }

    public function strukturs()
    {
        $strukturs=Struktur::first()->get();

        return view('layouts.guest.pages.struktur.index-struktur', ['strukturs'=>$strukturs]);
    }
}
