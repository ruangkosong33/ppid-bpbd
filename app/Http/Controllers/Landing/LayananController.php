<?php

namespace App\Http\Controllers\Landing;

use App\Models\Hak;
use App\Models\Etik;
use App\Models\Waktu;
use App\Models\Sarana;
use App\Models\Standar;
use App\Models\Maklumat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LayananController extends Controller
{
    public function saranas()
    {
        $saranas=Sarana::first();

        return view('layouts.guest.pages.sarana.index-sarana', ['saranas'=>$saranas]);
    }

    public function standars()
    {
        $standars=Standar::first();

        return view('layouts.guest.pages.standar.index-standar', ['standars'=>$standars]);
    }
    
    public function waktus()
    {
        $waktus=Waktu::first();

        return view('layouts.guest.pages.waktu.index-waktu', ['waktus'=>$waktus]);
    }

    public function etiks()
    {
        $etiks=Etik::first();

        return view('layouts.guest.pages.etik.index-etik', ['etiks'=>$etiks]);
    }

    public function haks()
    {
        $haks=Hak::first();

        return view('layouts.guest.pages.hak.index-hak', ['haks'=>$haks]);
    }

    public function maklumats()
    {
        $maklumats=Maklumat::first();

        return view('layouts.guest.pages.maklumat.index-maklumat', ['maklumats'=>$maklumats]);
    }
}
