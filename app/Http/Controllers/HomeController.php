<?php

namespace App\Http\Controllers;

use App\Models\Dip;
use App\Models\Sop;
use App\Models\Post;
use App\Models\Team;
use App\Models\Hukum;
use App\Models\Agenda;
use App\Models\Katdip;
use App\Models\Laporan;
use App\Models\Kategori;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        $sumpost=Post::count();
        $sumagenda=Agenda::count();
        $sumpost=Post::count();
        $sumteam=Team::count();
        $sumkategori=Kategori::count();
        $sumdip = Katdip::withCount('dips')->get()->sum('dips_count');
        $sumhukum=Hukum::count();
        $sumlaporan=Laporan::count();
        $sumsop=Sop::count();

        return view('home-admin', ['sumpost'=>$sumpost, 'sumagenda'=>$sumagenda, 'sumpost'=>$sumpost, 'sumteam'=>$sumteam, 'sumkategori'=>$sumkategori,

                    'sumdip'=>$sumdip, 'sumhukum'=>$sumhukum, 'sumlaporan'=>$sumlaporan, 'sumsop'=>$sumsop]);
    }
}
