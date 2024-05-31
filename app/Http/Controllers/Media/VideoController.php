<?php

namespace App\Http\Controllers\Media;

use App\Models\Video;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManager;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Drivers\Gd\Driver;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $video=Video::orderBy('id')->get();

        return view('layouts.admin.pages.video.index-video', ['video'=>$video]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.admin.pages.video.create-video');
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

            $path='public/image-video/'.$images;
            Storage::put($path, $img->encode());
        }
        else{
            $images='';
        }

        $video=Video::create([
            'title'=>$request->title,
            'image'=>$images,
            'link'=>$request->link,
        ]);

        flash('Data Berhasil Di Simpan');

        return redirect()->route('video.index');
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
    public function edit(Video $video)
    {
        return view('layouts.admin.pages.video.edit-video', ['video'=>$video]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Video $video)
    {
        $this->validate($request, [
            'title'=>'required',
            'image'=>'mimes:jpeg,jpg,png|max:5000',
        ]);

        if ($request->file('image')) {
            if ($video->image) {
                Storage::delete('public/image-video/' . $video->image);
            }

            $manager = new ImageManager(new Driver());

            $file = $request->file('image');
            $extension = $file->getClientOriginalName();
            $images = time(). '.' .$extension;

            $img = $manager->read($request->file('image'));
            $img->resize(550, 350);

            $path = 'public/image-video/'.$images;
            Storage::put($path, $img->encode());

        } else {
            $images = $video->image;
        }

        $video->update([
            'title'=>$request->title,
            'image'=>$images,
            'link'=>$request->link,
        ]);

        flash('Data Berhasil Di Update');

        return redirect()->route('video.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Video $video)
    {
        if ($video->image && Storage::exists('public/image-video/' . $video->image))
        {
            Storage::delete('public/image-video/' . $video->image);
        }

        $video->delete();

        flash('Data Berhasil Di Hapus');

        return redirect()->route('video.index');
    }
}
