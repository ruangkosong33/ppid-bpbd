<?php

namespace App\Http\Controllers\Layanan;

use App\Models\Sarana;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManager;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Drivers\Gd\Driver;

class SaranaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sarana=Sarana::orderBy('id')->get();

        return view('layouts.admin.pages.sarana.index-sarana', ['sarana'=>$sarana]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.admin.pages.sarana.create-sarana');
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
            $manager= new ImageManager(new Driver());

            $file=$request->file('image');
            $extension=$file->getClientOriginalName();
            $images=time(). '.' .$extension;

            $img=$manager->read($request->file('image'));
            $img->resize(550,350);

            $path='public/image-sarana/'.$images;
            Storage::put($path, $img->encode());
        }
        else{
            $images='';
        }

        $sarana=Sarana::create([
            'title'=>$request->title,
            'image'=>$images,
            'body'=>$request->body,
        ]);

        flash('Data Berhasil Di Simpan');

        return redirect()->route('sarana.index');
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
    public function edit(Sarana $sarana)
    {
        return view('layouts.admin.pages.sarana.edit-sarana', ['sarana'=>$sarana]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Sarana $sarana)
    {
        $this->validate($request, [
            'title'=>'required',
            'image'=>'mimes:jpeg,jpg,png|max:5000',
        ]);

        if ($request->file('image')) {
            if ($sarana->image) {
                Storage::delete('public/image-sarana/' . $sarana->image);
            }

            $manager = new ImageManager(new Driver());

            $file = $request->file('image');
            $extension = $file->getClientOriginalName();
            $images = time(). '.' .$extension;

            $img = $manager->read($request->file('image'));
            $img->resize(550, 350);

            $path = 'public/image-sarana/'.$images;
            Storage::put($path, $img->encode());

        } else {
            $images = $sarana->image;
        }

        $sarana->update([
            'title'=>$request->title,
            'image'=>$images,
            'body'=>$request->body,
        ]);

        flash('Data Berhasil Di Update');

        return redirect()->route('sarana.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sarana $sarana)
    {
        if ($sarana->image && Storage::exists('public/image-sarana/' . $sarana->image))
        {
            Storage::delete('public/image-sarana/' . $sarana->image);
        }

        $sarana->delete();

        flash('Data Berhasil Di Hapus');

        return redirect()->route('sarana.index');
    }
}
