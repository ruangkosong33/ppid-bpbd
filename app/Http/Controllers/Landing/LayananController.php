<?php

namespace App\Http\Controllers\Landing;

use App\Models\Hak;
use App\Models\Sop;
use App\Models\Etik;
use App\Models\Hukum;
use App\Models\Waktu;
use App\Models\Sarana;
use App\Models\Filesop;
use App\Models\Standar;
use App\Models\Maklumat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LayananController extends Controller
{
    public function saranas()
    {
        $saranas=Sarana::first();

        return view('layouts.guest.pages.sarana.index-sarana', ['saranas'=>$saranas]);
    }

    public function standars()
    {
        $standars=Standar::first();

        return view('layouts.guest.pages.standar.index-standar', ['standars'=>$standars]);
    }
    
    public function waktus()
    {
        $waktus=Waktu::first();

        return view('layouts.guest.pages.waktu.index-waktu', ['waktus'=>$waktus]);
    }

    public function etiks()
    {
        $etiks=Etik::first();

        return view('layouts.guest.pages.etik.index-etik', ['etiks'=>$etiks]);
    }

    public function haks()
    {
        $haks=Hak::first();

        return view('layouts.guest.pages.hak.index-hak', ['haks'=>$haks]);
    }

    public function maklumats()
    {
        $maklumats=Maklumat::first();

        return view('layouts.guest.pages.maklumat.index-maklumat', ['maklumats'=>$maklumats]);
    }

    public function sopIndex()
    {
        $sopIndex=Sop::orderBy('id', 'DESC')->paginate(10);

        return view('layouts.guest.pages.sop.index-sop', ['sopIndex'=>$sopIndex]);
    }

    public function sopList($slug)
    {
        $sopList=Sop::where('slug', $slug)->firstOrFail();
        $itemList = Filesop::whereHas('sops', function ($q) use ($slug) {
            $q->where('slug', $slug);
        })->paginate(10);

        return view('layouts.guest.pages.sop.list-sop', ['sopList'=>$sopList, 'itemList'=>$itemList]);
    }

    public function sopDetail($slug)
    {
        $item = Filesop::with('sops')->where('slug', $slug)->first();
        return view('layouts.guest.pages.sop.detail-sop', compact('item'));
    }

    public function hukums()
    {
        $hukums=Hukum::orderBy('id', 'DESC')->paginate(10);

        return view('layouts.guest.pages.hukum.index-hukum', ['hukums'=>$hukums]);
    }

    public function detailHukums ($slug)
    {
        $detailHukums=Hukum::where('slug', $slug)->firstOrFail();

        return view('layouts.guest.pages.hukum.detail-hukum', ['detailHukums'=>$detailHukums]);
    }
}
