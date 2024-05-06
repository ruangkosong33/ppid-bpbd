<?php

namespace App\Http\Controllers\Landing;

use App\Models\Sarana;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LayananController extends Controller
{
    public function saranas()
    {
        $saranas=Sarana::first();

        return view('layouts.guest.pages.sarana.index-sarana', ['saranas'=>$saranas]);
    }
}
