<?php

namespace App\Http\Controllers\Landing;

use App\Models\Foto;
use App\Models\Team;
use App\Models\Video;
use App\Models\Agenda;
use App\Models\Partner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BerandaController extends Controller
{
    public function beranda()
    {
        $fotos=Foto::orderBy('id')->get();

        $videos=Video::orderBy('id')->get();

        $partners=Partner::orderBy('id')->get();

        $teams=Team::orderBy('id')->get();

        $agendas=Agenda::orderBy('date', 'DESC')->orderBy('id', 'DESC')->limit(6)->get();

        return view('layouts.guest.pages.beranda.index-beranda',

        ['teams'=>$teams, 'partners'=>$partners, 'fotos'=>$fotos, 'partners'=>$partners, 'agendas'=>$agendas]);
    }
}
