<?php

namespace App\Http\Controllers\Landing;

use App\Models\Dip;
use App\Models\Katdip;
use App\Models\Notulen;
use App\Models\Anggaran;
use App\Models\Definisi;
use App\Models\Pengadaan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InformasiController extends Controller
{
    public function anggarans()
    {
        $anggarans=Anggaran::orderBy('id', 'DESC')->paginate(10);

        return view('layouts.guest.pages.anggaran.index-anggaran', ['anggarans'=>$anggarans]);
    }

    public function detailAnggarans($slug)
    {
        $detailAnggarans=Anggaran::where('slug', $slug)->firstOrFail();

        return view('layouts.guest.pages.anggaran.detail-anggaran', ['detailAnggarans'=>$detailAnggarans]);
    }

    public function pengadaans()
    {
        $pengadaans=Pengadaan::orderBy('id', 'DESC')->paginate(10);

        return view('layouts.guest.pages.pengadaan.index-pengadaan', ['pengadaans'=>$pengadaans]);
    }

    public function detailPengadaans($slug)
    {
        $detailPengadaans=Pengadaan::where('slug', $slug)->firstOrFail();

        return view('layouts.guest.pages.pengadaan.detail-pengadaan', ['detailPengadaans'=>$detailPengadaans]);
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

    public function sertamerta()
    {
        $sertamerta= Dip::with('katdips')->whereHas('katdips', function($q)
        {
            $q->where('title', 'Informasi Serta Merta');
        })->orderBy('id', 'DESC')->paginate(10);

        return view('layouts.guest.pages.dip.serta-merta-index', compact('sertamerta'));
    }

    public function sertamertaDetail($slug)
    {
        $sertamertas = Dip::with('katdips')->where('slug', $slug)->firstOrFail();

        return view('layouts.guest.pages.dip.serta-merta-detail', compact('sertamertas'));
    }

    public function setiapsaat()
    {
        $setiapsaat= Dip::with('katdips')->whereHas('katdips', function($q)
        {
            $q->where('title', 'Informasi Setiap Saat');
        })->orderBy('id', 'DESC')->paginate(10);

        return view('layouts.guest.pages.dip.setiap-saat-index', compact('setiapsaat'));
    }

    public function setiapsaatDetail($slug)
    {
        $setiapsaats = Dip::with('katdips')->where('slug', $slug)->firstOrFail();

        return view('layouts.guest.pages.dip.setiap-saat-detail', compact('setiapsaats'));
    }

    public function kecualikan()
    {
        $kecualikan= Dip::with('katdips')->whereHas('katdips', function($q)
        {
            $q->where('title', 'Informasi Di Kecualikan');
        })->orderBy('id', 'DESC')->paginate(10);

        return view('layouts.guest.pages.dip.kecualikan-index', compact('kecualikan'));
    }

    public function kecualikanDetail($slug)
    {
        $kecualikans = Dip::with('katdips')->where('slug', $slug)->firstOrFail();

        return view('layouts.guest.pages.dip.kecualikan-detail', compact('kecualikans'));
    }

    public function berkala()
    {
        $berkala= Dip::with('katdips')->whereHas('katdips', function($q)
        {
            $q->where('title', 'Informasi Berkala');
        })->orderBy('id', 'DESC')->paginate(10);

        return view('layouts.guest.pages.dip.berkala-index', compact('berkala'));
    }

    public function berkalaDetail($slug)
    {
        $berkalas = Dip::with('katdips')->where('slug', $slug)->firstOrFail();

        return view('layouts.guest.pages.dip.berkala-detail', compact('berkalas'));
    }
}
