<?php

namespace App\Http\Controllers;

use App\Models\Katdip;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $sumkatdip=Katdip::count();
        $sumpost=Post::count();
        $sumagenda=Agenda::count();

        return view('home', ['sumkatdip'=>$sumkatdip, 'sumpost'=>$sumpost, 'sumagenda'=>$sumagenda]);
    }

    public function admin()
    {
        return view('home-admin');
    }
}
