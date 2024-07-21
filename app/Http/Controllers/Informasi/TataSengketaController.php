<?php

namespace App\Http\Controllers\Informasi;

use App\Models\Tatasengketa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManager;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Drivers\Gd\Driver;

class TataSengketaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tatasengketa=Tatasengketa::orderBy('id')->get();

        return view('layouts.admin.pages.tata-sengketa.index-tata', ['tatasengketa'=>$tatasengketa]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.admin.pages.tata-sengketa.create-tata');
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
            $img->resize(1920,901);

            $path='public/image-tata-sengketa/'.$images;
            Storage::put($path, $img->encode());
        }
        else{
            $images='';
        }

        $tatasengketa=Tatasengketa::create([
            'title'=>$request->title,
            'image'=>$images,
            'body'=>$request->body,
        ]);

        flash('Data Berhasil Di Simpan');

        return redirect()->route('tatasengketa.index');
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
    public function edit(Tatasengketa $tatasengketa)
    {
        return view('layouts.admin.pages.tata-sengketa.edit-tata', ['tatasengketa'=>$tatasengketa]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tatasengketa $tatasengketa)
    {
        $this->validate($request, [
            'title'=>'required',
            'image'=>'mimes:jpeg,jpg,png|max:5000',
        ]);

        if($request->file('image'))
        {
            if ($tatasengketa->image) {
                Storage::delete('public/image-tata-sengketa/' . $tatasengketa->image);
            }

            $manager= new ImageManager(new Driver());

            $file=$request->file('image');
            $extension=$file->getClientOriginalName();
            $images=time(). '.' .$extension;

            $img=$manager->read($request->file('image'));
            $img->resize(1920,901);

            $path='public/image-tata-sengketa/'.$images;
            Storage::put($path, $img->encode());
        }
        else{
            $images=$tatasengketa->image;
        }

        $tatasengketa->update([
            'title'=>$request->title,
            'image'=>$images,
            'body'=>$request->body,
        ]);

        flash('Data Berhasil Di Update');

        return redirect()->route('tatasengketa.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tatasengketa $tatasengketa)
    {
        if ($tatasengketa->image && Storage::exists('public/image-tata-sengketa/' . $tatasengketa->image))
        {
            Storage::delete('public/image-tata-sengketa/' . $tatasengketa->image);
        }

        $tatasengketa->delete();

        flash('Data Berhasil Di Hapus');

        return redirect()->back();
    }
}
