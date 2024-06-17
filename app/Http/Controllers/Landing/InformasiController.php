<?php

namespace App\Http\Controllers\Landing;

use App\Models\Notulen;
use App\Models\Anggaran;
use App\Models\Definisi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InformasiController extends Controller
{
    public function anggarans()
    {
        $anggarans=Anggaran::orderBy('id', 'DESC')->get();

        return view('layouts.guest.pages.anggaran.index-anggaran', ['anggarans'=>$anggarans]);
    }

    public function definisis()
    {
        $definisis=Definisi::first();

        return view('layouts.guest.pages.definisi.index-definisi', ['definisis'=>$definisis]);
    }

    public function notulens()
    {
        $notulens=Notulen::orderBy('id', 'DESC')->get();

        return view('layouts.guest.pages.notulen.index-notulen', ['notulens'=>$notulens]);
    }
}
