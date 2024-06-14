<?php

namespace App\Http\Controllers\Landing;

use App\Models\Foto;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MediaController extends Controller
{
    public function fotos()
    {
        $fotos=Foto::orderBy('id', 'DESC')->get();

        return view('layouts.guest.pages.foto.index-foto', ['fotos'=>$fotos]);
    }
}
