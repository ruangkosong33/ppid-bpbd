<?php

namespace App\Http\Controllers\Landing;

use App\Models\Foto;
use App\Models\Graphic;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MediaController extends Controller
{
    public function fotos()
    {
        $fotos=Foto::orderBy('id', 'DESC')->get();

        return view('layouts.guest.pages.foto.index-foto', ['fotos'=>$fotos]);
    }

    public function semuaGraphics()
    {
        $item=Graphic::orderBy('id', 'DESC')->limit(12)->get();

        return view('layouts.guest.pages.infografis.index-infografis', ['item'=>$item]);
    }

    public function detailGraphics($slug)
    {
        $items=Graphic::orderBy('slug', $slug)->get();

        return view('layouts.guest.pages.infografis.detail-infografis', ['items'=>$items]);
    }
}
