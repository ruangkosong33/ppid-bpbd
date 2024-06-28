<?php

namespace App\Http\Controllers\Landing;

use App\Models\Dip;
use App\Models\Foto;
use App\Models\Post;
use App\Models\Team;
use App\Models\Video;
use App\Models\Agenda;
use App\Models\Katdip;
use App\Models\Partner;
use App\Models\Setting;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BerandaController extends Controller
{
    public function beranda()
    {
        $fotos=Foto::orderBy('id')->get();

        $videos=Video::orderBy('id')->get();

        $partners=Partner::orderBy('id')->limit('6')->get();

        $teams=Team::orderBy('id')->get();

        $postFront = Post::with('kategoris')->where('status', 'publish')->orderBy('date', 'DESC')->orderBy('id', 'DESC')->limit(3)->get();

        $agendas=Agenda::orderBy('date', 'DESC')->orderBy('id', 'DESC')->limit(6)->get();

        $sertamertaFront=  Katdip::where('title', 'Informasi Serta Merta')->get();

        $setiapsaatFront=  Katdip::where('title', 'Informasi Setiap Saat')->get();

        $berkalaFront=  Katdip::where('title', 'Informasi Berkala')->get();

        $kecualikanFront=  Katdip::where('title', 'Informasi Di Kecualikan')->get();

        return view('layouts.guest.pages.beranda.index-beranda',

        ['teams'=>$teams, 'partners'=>$partners, 'fotos'=>$fotos, 'agendas'=>$agendas, 'postFront'=>$postFront,
         'sertamertaFront'=>$sertamertaFront, 'setiapsaatFront'=>$setiapsaatFront, 'berkalaFront'=>$berkalaFront, 'kecualikanFront'=>$kecualikanFront,

        ]);
    }
}
