<?php

namespace App\Http\Controllers\Tentang;

use App\Models\Struktur;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManager;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Drivers\Gd\Driver;

class StrukturController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $struktur=Struktur::orderBy('id')->get();

        return view('layouts.admin.pages.struktur.index-struktur', ['struktur'=>$struktur]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.admin.pages.struktur.create-struktur');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'=>'required',
            'image'=>'mimes:jpg,jpeg,png|max:5000',
        ]);

        if($request->file('image'))
        {
            $manager = new ImageManager(new Driver());
            $file=$request->file('image');
            $extension=$file->getClientOriginalName();
            $images=time(). '.' .$extension;

            $img=Image::make($file);
            $img->resize(1920,901);

            $path='public/image-struktur/'.$images;
            Storage::put($path, $img->encode());
        }
        else{
            $images='';
        }

        $struktur=Struktur::create([
            'title'=>$request->title,
            'image'=>$images,
            'body'=>$request->body,
        ]);

        flash('Data Berhasil Di Simpan');

        return redirect()->route('struktur.index');
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
    public function edit(Struktur $struktur)
    {
        return view('layouts.admin.pages.struktur.edit-struktur', ['struktur'=>$struktur]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Struktur $struktur)
    {
        $this->validate($request, [
            'title'=>'required',
            'image'=>'mimes:jpeg,jpg,png|max:5000',
        ]);

        if($request->file('image'))
        {
            if ($struktur->image) {
                Storage::delete('public/image-struktur/' . $struktur->image);
            }

            $manager= new ImageManager(new Driver());

            $file=$request->file('image');
            $extension=$file->getClientOriginalName();
            $images=time(). '.' .$extension;

            $img=$manager->read($request->file('image'));
            $img->resize(1920,901);

            $path='public/image-struktur/'.$images;
            Storage::put($path, $img->encode());
        }
        else{
            $images=$struktur->image;
        }

        $struktur->update([
            'title'=>$request->title,
            'image'=>$images,
            'body'=>$request->body,
        ]);

        flash('Data Berhasil Di Update');

        return redirect()->route('struktur.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Struktur $struktur)
    {
        if ($struktur->image && Storage::exists('public/image-struktur/' . $struktur->image))
        {
            Storage::delete('public/image-struktur/' . $struktur->image);
        }

        $struktur->delete();

        flash('Data Berhasil Di Hapus');

        return redirect()->back();
    }
}
