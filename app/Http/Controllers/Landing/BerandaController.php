<?php

namespace App\Http\Controllers\Landing;

use App\Models\Dip;
use App\Models\Foto;
use App\Models\Post;
use App\Models\Team;
use App\Models\Video;
use App\Models\Agenda;
use App\Models\Katdip;
use App\Models\Graphic;
use App\Models\Partner;
use App\Models\Setting;
use App\Models\Kategori;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BerandaController extends Controller
{
    public function beranda()
    {
        $fotos=Foto::orderBy('id')->get();

        $videos=Video::orderBy('id')->get();

        $partners=Partner::orderBy('id')->limit('6')->get();

        $frontTeams=Team::take(4)->get();

        $graphics=Graphic::take(6)->get();

        $postFront = Post::with('kategoris')->where('status', 'publish')->orderBy('date', 'DESC')->orderBy('id', 'DESC')->limit(3)->get();

        $agendas=Agenda::orderBy('date', 'DESC')->orderBy('id', 'DESC')->limit(6)->get();

        $sertamertaFront=  Katdip::where('title', 'Informasi Serta Merta')->get();

        $setiapsaatFront=  Katdip::where('title', 'Informasi Setiap Saat')->get();

        $berkalaFront=  Katdip::where('title', 'Informasi Berkala')->get();

        $kecualikanFront=  Katdip::where('title', 'Informasi Di Kecualikan')->get();

        $totalSertamerta = Katdip::where('title', 'Informasi Serta Merta')->withCount('dips')->get()->sum('dips_count');

        $totalSetiapsaat = Katdip::where('title', 'Informasi Setiap Saat')->withCount('dips')->get()->sum('dips_count');

        $totalBerkala = Katdip::where('title', 'Informasi Berkala')->withCount('dips')->get()->sum('dips_count');

        $totalKecualikan = Katdip::where('title', 'Informasi Di Kecualikan')->withCount('dips')->get()->sum('dips_count');

        return view('layouts.guest.pages.beranda.index-beranda',

        ['frontTeams'=>$frontTeams, 'partners'=>$partners, 'fotos'=>$fotos, 'agendas'=>$agendas, 'postFront'=>$postFront, 'graphics'=>$graphics,
         'sertamertaFront'=>$sertamertaFront, 'setiapsaatFront'=>$setiapsaatFront, 'berkalaFront'=>$berkalaFront, 'kecualikanFront'=>$kecualikanFront,
         'totalSertamerta'=>$totalSertamerta, 'totalSetiapsaat'=>$totalSetiapsaat, 'totalBerkala'=>$totalBerkala, 'totalKecualikan'=>$totalKecualikan,
        ]);
    }
}
