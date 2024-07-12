<?php

namespace App\Http\Controllers\Media;

use App\Models\Graphic;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManager;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Drivers\Gd\Driver;

class GraphicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $graphic=Graphic::orderBy('id')->get();

        return view('layouts.admin.pages.graphic.index-graphic', ['graphic'=>$graphic]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.admin.pages.graphic.create-graphic');
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
            $img->resize(465,659);

            $path='public/image-grafis/'.$images;
            Storage::put($path, $img->encode());
        }
        else{
            $images='';
        }

        $graphic=Graphic::create([
            'title'=>$request->title,
            'image'=>$images,
            'body'=>$request->body,
        ]);

        flash('Data Berhasil Di Simpan');

        return redirect()->route('graphic.index');
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
    public function edit(Graphic $graphic)
    {
        return view('layouts.admin.pages.graphic.edit-graphic', ['graphic'=>$graphic]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Graphic $graphic)
    {
        $this->validate($request, [
            'title'=>'required',
            'image'=>'mimes:jpeg,jpg,png|max:5000',
        ]);

        if($request->file('image'))
        {
            if ($penghargaan->image) {
                Storage::delete('public/image-grafis/' . $graphic->image);
            }

            $manager= new ImageManager(new Driver());

            $file=$request->file('image');
            $extension=$file->getClientOriginalName();
            $images=time(). '.' .$extension;

            $img=$manager->read($request->file('image'));
            $img->resize(465,659);

            $path='public/image-grafis/'.$images;
            Storage::put($path, $img->encode());
        }
        else{
            $images=$graphic->image;
        }

        $graphic->update([
            'title'=>$request->title,
            'image'=>$images,
            'body'=>$request->body,
        ]);

        flash('Data Berhasil Di Update');

        return redirect()->route('graphic.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Graphic $graphic)
    {
        if ($graphic->image && Storage::exists('public/image-grafis/' . $graphic->image))
        {
            Storage::delete('public/image-grafis/' . $graphic->image);
        }

        $graphic->delete();

        flash('Data Berhasil Di Hapus');

        return redirect()->back();
    }
}
