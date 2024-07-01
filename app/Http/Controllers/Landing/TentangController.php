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

        return view('layouts.guest.pages.fungsi.index-fungsi', ['fungsis'=>$fungsis]);
    }

    public function dasars()
    {
        $dasars=Dasar::first();

        return view('layouts.guest.pages.dasar.index-dasar', ['dasars'=>$dasars]);
    }

    public function keputusans()
    {
        $keputusans=Keputusan::orderBy('id')->get();

        return view('layouts.guest.pages.keputusan.index-keputusan', ['keputusans'=>$keputusans]);
    }

    public function detailsKeputusan($slug)
    {
        $item=Keputusan::where('slug', $slug)->first();

        return view('layouts.guest.pages.keputusan.detail-keputusan', ['item'=>$item]);
    }

    public function strukturs()
    {
        $strukturs=Struktur::first();

        return view('layouts.guest.pages.struktur.index-struktur', ['strukturs'=>$strukturs]);
    }

    public function semuaTeams()
    {
        $semuateams=Team::orderBy('id', 'DESC')->get();

        return view('layouts.guest.pages.team.index-team', ['semuateams'=>$semuateams]);
    }

    public function detailTeams($slug)
    {
        $detailteams=Team::where('slug', $slug)->firstOrFail();

        return view('layouts.guest.pages.team.detail-team', ['detailteams'=>$detailteams]);
    }
}
