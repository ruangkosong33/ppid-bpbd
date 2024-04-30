<?php

namespace App\Http\Controllers\Media;

use App\Models\Partner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManager;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Drivers\Gd\Driver;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $partner=Partner::orderBy('id')->get();

        return view('layouts.admin.pages.partner.index-partner', ['partner'=>$partner]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.admin.pages.partner.create-partner');
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

            $path='public/image-partner/'.$images;
            Storage::put($path, $img->encode());
        }
        else{
            $images='';
        }

        $partner=Partner::create([
            'title'=>$request->title,
            'image'=>$images,
            'link'=>$request->link,
        ]);

        flash('Data Berhasil Di Simpan');

        return redirect()->route('partner.index');
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
    public function edit(Partner $partner)
    {
        return view('layouts.admin.pages.partner.edit-partner', ['partner'=>$partner]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Partner $partner)
    {
        $this->validate($request, [
            'title'=>'required',
            'image'=>'mimes:jpeg,jpg,png|max:5000',
        ]);

        if ($request->file('image')) {
            if ($partner->image) {
                Storage::delete('public/image-partner/' . $partner->image);
            }

            $manager = new ImageManager(new Driver());

            $file = $request->file('image');
            $extension = $file->getClientOriginalName();
            $images = time(). '.' .$extension;

            $img = $manager->read($request->file('image'));
            $img->resize(550, 350);

            $path = 'public/image-partner/'.$images;
            Storage::put($path, $img->encode());

        } else {
            $images = $partner->image;
        }

        $partner->update([
            'title'=>$request->title,
            'image'=>$images,
            'link'=>$request->link,
        ]);

        flash('Data Berhasil Di Update');

        return redirect()->route('partner.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Partner $partner)
    {
        if ($partner->image && Storage::exists('public/image-partner/' . $partner->image))
        {
            Storage::delete('public/image-partner/' . $partner->image);
        }

        $partner->delete();

        flash('Data Berhasil Di Hapus');

        return redirect()->route('partner.index');
    }
}
