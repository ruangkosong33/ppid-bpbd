<?php

namespace App\Http\Controllers\Media;

use App\Models\Penghargaan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManager;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Drivers\Gd\Driver;

class PenghargaanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $penghargaan=Penghargaan::orderBy('id')->get();

        return view('layouts.admin.pages.penghargaan.index-penghargaan', ['penghargaan'=>$penghargaan]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.admin.pages.penghargaan.create-penghargaan');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'=>'required',
            'image'=>'mimes:jpeg,jpg,png|max:5000',
        ]);

        if($request->file('image'))
        {
            $manager= new ImageManager(new Driver());

            $file=$request->file('image');
            $extension=$file->getClientOriginalName();
            $images=time(). '.' .$extension;

            $img=$manager->read($request->file('image'));
            $img->resize(550,350);

            $path='public/image-penghargaan/'.$images;
            Storage::put($path, $img->encode());
        }
        else{
            $images='';
        }

        $penghargaan=Penghargaan::create([
            'title'=>$request->title,
            'image'=>$images,
            'body'=>$request->body,
        ]);

        flash('Data Berhasil Di Simpan');

        return redirect()->route('penghargaan.index');
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
    public function edit(Penghargaan $penghargaan)
    {
        return view('layouts.admin.pages.penghargaan.edit-penghargaan', ['penghargaan'=>$penghargaan]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Penghargaan $penghargaan)
    {
        $this->validate($request, [
            'title'=>'required',
            'image'=>'mimes:jpeg,jpg,png|max:5000',
        ]);

        if($request->file('image'))
        {
            if ($penghargaan->image) {
                Storage::delete('public/image-penghargaan/' . $penghargaan->image);
            }

            $manager= new ImageManager(new Driver());

            $file=$request->file('image');
            $extension=$file->getClientOriginalName();
            $images=time(). '.' .$extension;

            $img=$manager->read($request->file('image'));
            $img->resize(550,350);

            $path='public/image-penghargaan/'.$images;
            Storage::put($path, $img->encode());
        }
        else{
            $images=$penghargaan->image;
        }

        $penghargaan->update([
            'title'=>$request->title,
            'image'=>$images,
            'body'=>$request->body,
        ]);

        flash('Data Berhasil Di Update');

        return redirect()->route('penghargaan.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Penghargaan $penghargaan)
    {
        if ($penghargaan->image && Storage::exists('public/image-penghargaan/' . $penghargaan->image))
        {
            Storage::delete('public/image-penghargaan/' . $penghargaan->image);
        }

        $penghargaan->delete();

        flash('Data Berhasil Di Hapus');

        return redirect()->back();
    }
}
