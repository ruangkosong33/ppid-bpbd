<?php

namespace App\Http\Controllers\Tentang;

use App\Models\Team;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Intervention\Image\ImageManager;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Drivers\Gd\Driver;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $team=Team::orderBy('id')->get();

        return view('layouts.admin.pages.team.index-team', ['team'=>$team]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.admin.pages.team.create-team');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'=>'required',
            'image'=>'mimes:jpg,jpeg,png|max:5000',
        ]);

        if($request->file('image'))
        {
            $manager= new ImageManager(new Driver());

            $file=$request->file('image');
            $extension=$file->getClientOriginalName();
            $images=time(). '.' .$extension;

            $img=$manager->read($request->file('image'));
            $img->resize(288,306);

            $path='public/image-team/'.$images;
            Storage::put($path, $img->encode());
        }
        else{
            $images='';
        }

        $team=Team::create([
            'name'=>$request->name,
            'image'=>$images,
            'job'=>$request->job,
        ]);

        flash('Data Berhasil Di Simpan');

        return redirect()->route('team.index');
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
    public function edit(Team $team)
    {
        return view('layouts.admin.pages.team.edit-team', ['team'=>$team]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Team $team)
    {
        $this->validate($request, [
            'name'=>'required',
            'image'=>'mimes:jpeg,jpg,png|max:5000',
        ]);

        if ($request->file('image')) {
            if ($team->image) {
                Storage::delete('public/image-team/' . $team->image);
            }

            $manager = new ImageManager(new Driver());

            $file = $request->file('image');
            $extension = $file->getClientOriginalName();
            $images = time(). '.' .$extension;

            $img = $manager->read($request->file('image'));
            $img->resize(288,306);

            $path = 'public/image-team/'.$images;
            Storage::put($path, $img->encode());

        } else {
            $images = $team->image;
        }

        $team->update([
            'name'=>$request->name,
            'image'=>$images,
            'job'=>$request->job,
        ]);

        flash('Data Berhasil Di Simpan');

        return redirect()->route('team.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Team $team)
    {
        if ($team->image && Storage::exists('public/image-team/' . $team->image))
        {
            Storage::delete('public/image-team/' . $team->image);
        }

        $team->delete();

        flash('Data Berhasil Di Hapus');

        return redirect()->route('team.index');
    }
}
