<?php

namespace App\Http\Controllers\Media;

use App\Models\Banner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManager;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Drivers\Gd\Driver;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banner=Banner::orderBy('id')->get();

        return view('layouts.admin.pages.banner.index-banner', ['banner'=>$banner]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.admin.pages.banner.create-banner');
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

            $path='public/image-banner/'.$images;
            Storage::put($path, $img->encode());
        }
        else{
            $images='';
        }

        $banner=Banner::create([
            'title'=>$request->title,
            'image'=>$images,
        ]);

        flash('Data Berhasil Di Simpan');

        return redirect()->route('banner.index');
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
    public function edit(Banner $banner)
    {
        return view('layouts.admin.pages.banner.edit-banner', ['banner'=>$banner]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Banner $banner)
    {
        $this->validate($request, [
            'title'=>'required',
            'image'=>'mimes:jpeg,jpg,png|max:5000',
        ]);

        if ($request->file('image')) {
            if ($banner->image) {
                Storage::delete('public/image-banner/' . $banner->image);
            }

            $manager = new ImageManager(new Driver());

            $file = $request->file('image');
            $extension = $file->getClientOriginalName();
            $images = time(). '.' .$extension;

            $img = $manager->read($request->file('image'));
            $img->resize(550, 350);

            $path = 'public/image-banner/'.$images;
            Storage::put($path, $img->encode());

        } else {
            $images = $banner->image;
        }

        $banner->update([
            'title'=>$request->title,
            'image'=>$images,
        ]);

        flash('Data Berhasil Di Update');

        return redirect()->route('banner.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Banner $banner)
    {
        if ($banner->image && Storage::exists('public/image-banner/' . $banner->image))
        {
            Storage::delete('public/image-banner/' . $banner->image);
        }

        $banner->delete();

        flash('Data Berhasil Di Hapus');

        return redirect()->route('banner.index');
    }
}
