<?php

namespace App\Http\Controllers\Informasi;

use App\Models\Pengadaan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManager;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Drivers\Gd\Driver;

class PengadaanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pengadaan=Pengadaan::orderBy('id')->get();

        return view('layouts.admin.pages.pengadaan.index-pengadaan', ['pengadaan'=>$pengadaan]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.admin.pages.pengadaan.create-pengadaan');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'=>'required',
            'image'=>'mimes:png,jpg,jpeg|max:2000',
        ]);

        if($request->file('image'))
        {
            $manager= new ImageManager(new Driver());

            $file=$request->file('image');
            $extension=$file->getClientOriginalName();
            $images=time(). '.' .$extension;

            $img=$manager->read($request->file('image'));
            $img->resize(550,350);

            $path='public/image-pengadaan/'.$images;
            Storage::put($path, $img->encode());
        }
        else{
            $images='';
        }

        $pengadaan=Pengadaan::create([
            'title'=>$request->title,
            'file'=>$files,
            'date'=>$request->date,
            'link'=>$request->link,
        ]);

        flash('Data Berhasil Di Simpan');

        return redirect()->route('pengadaan.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pengadaan $pengadaan)
    {
        return view('layouts.admin.pages.pengadaan.edit-pengadaan', ['pengadaan'=>$pengadaan]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pengadaan $pengadaan)
    {
        $this->validate($request, [
            'title'=>'required',
            'image'=>'mimes:png,jpg,jpeg|max:2000',
        ]);

        if ($request->file('image')) {
            if ($pengadaan->image) {
                Storage::delete('public/image-pengadaan/' . $pengadaan->image);
            }

            $manager = new ImageManager(new Driver());

            $file = $request->file('image');
            $extension = $file->getClientOriginalName();
            $images = time(). '.' .$extension;

            $img = $manager->read($request->file('image'));
            $img->resize(550, 350);

            $path = 'public/image-pengadaan/'.$images;
            Storage::put($path, $img->encode());

        } else {
            $images = $pengadaan->image;
        }

        $pengadaan->update([
            'title'=>$request->title,
            'image'=>$images,
            'date'=>$request->date,
            'link'=>$request->link,
        ]);

        flash('Data Berhasil Di Update');

        return redirect()->route('pengadaan.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pengadaan $pengadaan)
    {
        if ($pengadaan->file && Storage::exists('public/image-pengadaan/' . $pengadaan->image))
        {
            Storage::delete('public/image-pengadaan/' . $pengadaan->file);
        }

        $pengadaan->delete();

        flash('Data Berhasil Di Hapus');

        return redirect()->back();
    }
}
