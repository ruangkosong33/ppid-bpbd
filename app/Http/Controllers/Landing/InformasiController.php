<?php

namespace App\Http\Controllers\Landing;

use App\Models\Dip;
use App\Models\Katdip;
use App\Models\Notulen;
use App\Models\Anggaran;
use App\Models\Definisi;
use App\Models\Pengadaan;
use App\Models\Tatasengketa;
use Illuminate\Http\Request;
use App\Models\Formpengajuan;
use App\Models\Tatakeberatan;
use App\Models\Tatapermohonan;
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
        $pengadaans=Pengadaan::orderBy('id', 'DESC')->paginate(9);

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
        $notulens=Notulen::orderBy('id', 'DESC')->paginate(10);

        return view('layouts.guest.pages.notulen.index-notulen', ['notulens'=>$notulens]);
    }

    public function tatapermohonans()
    {
        $tatapermohonans=Tatapermohonan::orderBy('id')->get();

        return view('layouts.guest.pages.tata-cara.index-permohonan', ['tatapermohonans'=>$tatapermohonans]);
    }

    public function tatakeberatans()
    {
        $tatakeberatans=Tatakeberatan::orderBy('id')->get();

        return view('layouts.guest.pages.tata-cara.index-keberatan', ['tatakeberatans'=>$tatakeberatans]);
    }

    public function tatasengketas()
    {
        $tatasengketas=Tatasengketa::orderBy('id')->get();

        return view('layouts.guest.pages.tata-cata.index-sengketa', ['tatasengketa'=>$tatasengketas]);
    }

    public function detailNotulens($slug)
    {
        $detailNotulens=Notulen::where('slug', $slug)->firstOrFail();

        return view('layouts.guest.pages.notulen.detail-notulen', ['detailNotulens'=>$detailNotulens]);
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

    public function formPermohonans()
    {
        $categories = Katdip::orderBy('title')->get();
        
        return view('layouts.guest.pages.form-dip.form-permohonan', ['categories'=>$categories]);
    }

    public function requestPermohonans()
    {
        return redirect()->back();
    }

    public function requestPengajuans()
    {
        return view('layouts.guest.pages.form-dip.form-pengajuan');
    }

    public function formPengajuans(Request $request)
    {
        $this->validate($request, [
            'name'=>'required',
            'email'=>'required',
            'ktp'=>'required',
            'image'=>'required|mimes:jpeg,jpg,png|max:5000',
            'phone'=>'required',
            'alamat'=>'required',
            'rincian'=>'required',
            'keterangan'=>'required',
            'salinan'=>'required',
        ]);

        if($request->file('image'))
        {
            $manager= new ImageManager(new Driver());

            $file=$request->file('image');
            $extension=$file->getClientOriginalName();
            $images=time(). '.' .$extension;

            $img=$manager->read($request->file('image'));
            $img->resize(550,350);

            $path='public/image-ktp/'.$images;
            Storage::put($path, $img->encode());
        }

        $formpengajuans=Formpengajuan::create([
            'name'=>htmlspecialchars($request->name),
            'email'=>htmlspecialchars($request->email),
            'ktp'=>htmlspecialchars($request->ktp),
            'image'=>htmlspecialchars($images),
            'phone'=>htmlspecialchars($request->phone),
            'alamat'=>htmlspecialchars($request->alamat),
            'rincian'=>htmlspecialchars($request->rincian),
            'keterangan'=>htmlspecialchars($request->keterangan),
            'salinan'=>htmlspecialchars($request->salinan),
            'g-recaptcha-response' => 'required|captcha'
        ]);

        flash('Formulir Anda Berhasil Di Kirim');

        return redirect()->back();
    }
}
