<?php

namespace App\Http\Controllers\Landing;

use App\Models\Team;
use App\Models\Visi;
use App\Models\Dasar;
use App\Models\Fungsi;
use App\Models\Struktur;
use App\Models\Keputusan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TentangController extends Controller
{
    public function visis()
    {
        $visis=Visi::first();

        return view('layouts.guest.pages.visi.index-visi', ['visis'=>$visis]);
    }

    public function fungsis()
    {
        $fungsis=Fungsi::first();

        return view('layouts.guest.pages.fungsi.index-fungis', ['fungsis'=>$fungsis]);
    }

    public function dasars()
    {
        $dasars=Dasar::first();

        return view('layouts.guest.pages.dasar.index-dasar', ['dasars'=>$dasars]);
    }

    public function keputusans()
    {
        $keputusans=Keputusan::first();

        return view('layouts.guest.pages.keputusan.index-keputusan', ['keputusans'=>$keputusans]);
    }

    public function strukturs()
    {
        $strukturs=Struktur::first();

        return view('layouts.guest.pages.struktur.index-struktur', ['strukturs'=>$strukturs]);
    }

    public function teams()
    {
        $teams=Team::orderBy('id')->get();

        return view('layouts.guest.pages.team.front-team', ['teams'=>$teams]);
    }
}
