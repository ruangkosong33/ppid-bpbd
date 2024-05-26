<?php

namespace App\Http\Controllers\Informasi;

use Illuminate\Http\Request;
use App\Models\Formpengajuan;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManager;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Drivers\Gd\Driver;

class FormPengajuanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $formpengajuan=Formpengajuan::orderBy('id', 'DESC')->get();

        return view('layouts.admin.pages.formpengajuan.index-form', ['formpengajuan'=>$formpengajuan]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.admin.pages.formpengajuan.create-form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'=>'required',
            'email'=>'required',
            'ktp'=>'required|mimes:jpeg,jpg,png|max:5000',
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
        else{
            $images='';
        }

        $formpengajuan=Formpengajuan::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'ktp'=>$images,
            'phone'=>$request->phone,
            'alamat'=>$request->alamat,
            'rincian'=>$request->rincian,
            'keterangan'=>$request->keterangan,
            'salinan'=>$request->salinan
        ]);

        flash('Data Berhasil Di Simpan');

        return redirect()->route('formpengajuan.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Formpengajuan $formpengajuan)
    {
        return view('layouts.admin.pages.formpengajuan.show-form', ['formpengajuan'=>$formpengajuan]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Formpengajuan $formpengajuan)
    {
        return view('layouts.admin.pages.formpengajuan.edit-form', ['formpengajuan'=>$formpengajuan]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Formpengajuan $formpengajuan)
    {
        $this->validate($request, [
            'name'=>'required',
            'email'=>'required',
            'ktp'=>'required|mimes:jpeg,jpg,png|max:5000',
            'phone'=>'required',
            'alamat'=>'required',
            'rincian'=>'required',
            'keterangan'=>'required',
            'salinan'=>'required',
        ]);

        if($request->file('image'))
        {
            if ($formpengajuan->image) {
                Storage::delete('public/image-ktp/' . $formpengajuan->image);
            }

            $manager= new ImageManager(new Driver());

            $file=$request->file('image');
            $extension=$file->getClientOriginalName();
            $images=time(). '.' .$extension;

            $img=$manager->read($request->file('image'));
            $img->resize(550,350);

            $path='public/image-ktp/'.$images;
            Storage::put($path, $img->encode());
        }
        else{
            $images=$formpengajuan->image;
        }

        $formpengajuan->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'ktp'=>$images,
            'phone'=>$request->phone,
            'alamat'=>$request->alamat,
            'rincian'=>$request->rincian,
            'keterangan'=>$request->keterangan,
            'salinan'=>$request->salinan
        ]);

        flash('Data Berhasil Di Update');

        return redirect()->route('formpengajuan.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Formpengajuan $formpengajuan)
    {
        if ($formpengajuan->image && Storage::exists('public/image-ktp/' . $formpengajuan->image))
        {
            Storage::delete('public/image-ktp/' . $formpengajuan->image);
        }

        $formpengajuan->delete();

        flash('Data Berhasil Di Hapus');

        return redirect()->route('formpengajuan.index');
    }
}
