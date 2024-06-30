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

    public function semuaGrafis()
    {
        $grafis=Graphic::orderBy('id', 'DESC')->limit(12)->get();

        return view('layouts.guest.pages.infografis.index-infografis', ['grafis'=>$grafis]);
    }

    public function detailGrafis($slug)
    {
        $grafiss=Graphic::where('slug', $slug)->firstOrFail();

        return view('layouts.guest.pages.infografis.detail-infografis', ['grafiss'=>$grafiss]);
    }
}
