<?php

namespace App\Http\Controllers\Informasi;

use Illuminate\Http\Request;
use App\Models\Tatapermohonan;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManager;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Drivers\Gd\Driver;

class TataPermohonanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tatapermohonan=Tatapermohonan::orderBy('id')->get();

        return view('layouts.admin.pages.tata-permohonan.index-tata', ['tatapermohonan'=>$tatapermohonan]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.admin.pages.tata-permohonan.create-tata');
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

            $path='public/image-tata-permohonan/'.$images;
            Storage::put($path, $img->encode());
        }
        else{
            $images='';
        }

        $tatapermohonan=Tatapermohonan::create([
            'title'=>$request->title,
            'image'=>$images,
            'body'=>$request->body,
        ]);

        flash('Data Berhasil Di Simpan');

        return redirect()->route('tatapermohonan.index');
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
    public function edit(Tatapermohonan $tatapermohonan)
    {
        return view('layouts.admin.pages.tata-permohonan.edit-tata', ['tatapermohonan'=>$tatapermohonan]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tatapermohonan $tatapermohonan)
    {
        $this->validate($request, [
            'title'=>'required',
            'image'=>'mimes:jpeg,jpg,png|max:5000',
        ]);

        if($request->file('image'))
        {
            if ($tatapermohonan->image) {
                Storage::delete('public/image-tata-permohonan/' . $tatapermohonan->image);
            }

            $manager= new ImageManager(new Driver());

            $file=$request->file('image');
            $extension=$file->getClientOriginalName();
            $images=time(). '.' .$extension;

            $img=$manager->read($request->file('image'));
            $img->resize(1920,901);

            $path='public/image-tata-permohonan/'.$images;
            Storage::put($path, $img->encode());
        }
        else{
            $images=$tatapermohonan->image;
        }

        $tatapermohonan->update([
            'title'=>$request->title,
            'image'=>$images,
            'body'=>$request->body,
        ]);

        flash('Data Berhasil Di Update');

        return redirect()->route('tatapermohonan.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tatapermohonan $tatapermohonan)
    {
        if ($tatapermohonan->image && Storage::exists('public/image-tata-permohonan/' . $tatapermohonan->image))
        {
            Storage::delete('public/image-tata-permohonan/' . $tatapermohonan->image);
        }

        $tatapermohonan->delete();

        flash('Data Berhasil Di Hapus');

        return redirect()->back();
    }
}
