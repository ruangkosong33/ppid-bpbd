<?php

namespace App\Http\Controllers\Informasi;

use Illuminate\Http\Request;
use App\Models\Tatakeberatan;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManager;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Drivers\Gd\Driver;

class TataKeberatanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tatakeberatan=Tatakeberatan::orderBy('id')->get();

        return view('layouts.admin.pages.tata-keberatan.index-tata', ['tatakeberatan'=>$tatakeberatan]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.admin.pages.tata-keberatan.create-tata');
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

            $path='public/image-tata-keberatan/'.$images;
            Storage::put($path, $img->encode());
        }
        else{
            $images='';
        }

        $tatakeberatan=Tatakeberatan::create([
            'title'=>$request->title,
            'image'=>$images,
            'body'=>$request->body,
        ]);

        flash('Data Berhasil Di Simpan');

        return redirect()->route('tatakeberatan.index');
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
    public function edit(Tatakeberatan $tatakeberatan)
    {
        return view('layouts.admin.pages.tata-keberatan.edit-tata', ['tatakeberatan'=>$tatakeberatan]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tatakeberatan $tatakeberatan)
    {
        $this->validate($request, [
            'title'=>'required',
            'image'=>'mimes:jpeg,jpg,png|max:5000',
        ]);

        if($request->file('image'))
        {
            if ($tatakeberatan->image) {
                Storage::delete('public/image-tata-keberatan/' . $tatakeberatan->image);
            }

            $manager= new ImageManager(new Driver());

            $file=$request->file('image');
            $extension=$file->getClientOriginalName();
            $images=time(). '.' .$extension;

            $img=$manager->read($request->file('image'));
            $img->resize(1920,901);

            $path='public/image-tata-keberatan/'.$images;
            Storage::put($path, $img->encode());
        }
        else{
            $images=$tatakeberatan->image;
        }

        $tatakeberatan->update([
            'title'=>$request->title,
            'image'=>$images,
            'body'=>$request->body,
        ]);

        flash('Data Berhasil Di Update');

        return redirect()->route('tatakeberatan.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tatakeberatan $tatakeberatan)
    {
        if ($tatakeberatan->image && Storage::exists('public/image-tata-keberatan/' . $tatakeberatan->image))
        {
            Storage::delete('public/image-tata-keberatan/' . $tatakeberatan->image);
        }

        $tatakeberatan->delete();

        flash('Data Berhasil Di Hapus');

        return redirect()->back();
    }
}
