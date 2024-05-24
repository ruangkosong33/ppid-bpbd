<?php

namespace App\Http\Controllers\Media;

use App\Models\Foto;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManager;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Drivers\Gd\Driver;

class FotoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $foto=Foto::orderBy('id')->get();

        return view('layouts.admin.pages.foto.index-foto', ['foto'=>$foto]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.admin.pages.foto.create-foto');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'=>'required',
            'image'=>'mimes:jpg,jpeg,png|max:10000',
        ]);

        if($request->file('image'))
        {
            $manager= new ImageManager(new Driver());

            $file=$request->file('image');
            $extension=$file->getClientOriginalName();
            $images=time(). '.' .$extension;

            $img=$manager->read($request->file('image'));
            $img->resize(550,350);

            $path='public/image-foto/'.$images;
            Storage::put($path, $img->encode());
        }
        else{
            $images='';
        }

        $foto=Foto::create([
            'title'=>$request->title,
            'image'=>$images,
            'body'=>$request->body,
            'date'=>$request->date,
        ]);

        flash('Data Berhasil Di Simpan');

        return redirect()->route('foto.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Foto $foto)
    {
        return view('layouts.admin.pages.foto.show-foto', ['foto'=>$foto]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Foto $foto)
    {
        return view('layouts.admin.pages.foto.edit-foto', ['foto'=>$foto]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Foto $foto)
    {
        $this->validate($request, [
            'title'=>'required',
            'image'=>'mimes:jpg,jpeg,png|max:10000',
        ]);

        if($request->file('image'))
        {
            if ($foto->image) {
                Storage::delete('public/image-foto/' . $foto->image);
            }

            $manager= new ImageManager(new Driver());

            $file=$request->file('image');
            $extension=$file->getClientOriginalName();
            $images=time(). '.' .$extension;

            $img=$manager->read($request->file('image'));
            $img->resize(550,350);

            $path='public/image-foto/'.$images;
            Storage::put($path, $img->encode());
        }
        else{
            $images=$foto->image;
        }

        $foto->update([
            'title'=>$request->title,
            'image'=>$images,
            'body'=>$request->body,
            'date'=>$request->date,
        ]);

        flash('Data Berhasil Di Update');

        return redirect()->route('foto.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Foto $foto)
    {
        if ($foto->image && Storage::exists('public/image-banner/' . $foto->image))
        {
            Storage::delete('public/image-banner/' . $foto->image);
        }

        $foto->delete();

        flash('Data Berhasil Di Hapus');

        return redirect()->route('foto.index');
    }
}
