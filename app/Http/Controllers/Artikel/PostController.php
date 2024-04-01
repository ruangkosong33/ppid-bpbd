<?php

namespace App\Http\Controllers\Artikel;

use App\Models\Post;
use App\Models\User;
use App\Models\Kategori;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $post=Post::with(['kategori'])->orderBy('id', 'DESC')->get();

        return view('layouts.admin.pages.post.index-post', ['post'=>$post]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user=User::orderBy('id')->get();

        $kategori=Kategori::orderBy('id')->get();

        return view('layouts.admin.pages.post.create-post', ['kategori'=>$kategori, 'user'=>$user]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'=>'required',
            'image'=>'nullable|mimes:jpeg,jpg,png|max:5000',
            'status'=>'required',
        ]);

        if($request->file('image'))
        {
            $file=$request->file('image');
            $extension=$file->getClientOriginalName();
            $images=time(). '.' .$extension;

            $img=Image::make($file);
            $img->resize(550,350);

            $path='public/image-post/'.$images;
            Storage::put($path, $img->encode());
        }
        else{
            $images='';
        }

        $post=Post::create([
            'title'=>$request->title,
            'kategori_id'=>$request->kategori_id,
            'body'=>$request->body,
            'date'=>$request->date,
            'image'=>$images,
            'status'=>$request->status,
            'user_id'=>Auth::id(),
        ]);

        flash('Data Berhasil Di Simpan');

        return redirect()->route('post.index');
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
    public function edit(Post $post)
    {
        $kategori=Kategori::orderBy('id')->get();

        return view('layouts.admin.pages.post.edit-post', ['kategori'=>$kategori, 'post'=>$post]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $this->validate($request, [
            'title'=>'required',
            'image'=>'nullable|mimes:jpeg,jpg,png|max:5000',
            'status'=>'required',
        ]);

        if($request->file('image'))
        {
            $file=$request->file('image');
            $extension=$file->getClientOriginalName();
            $images=time(). '.' .$extension;

            $img=Image::make($file);
            $img->resize(550,350);

            $path='public/image-post/'.$images;
            Storage::put($path, $img->encode());
        }
        else{
            $images=$post->image;
        }

        $post->update([
            'title'=>$request->title,
            'kategori_id'=>$request->kategori_id,
            'body'=>$request->body,
            'date'=>$request->date,
            'image'=>$images,
            'status'=>$request->status,
        ]);

        flash('Data Berhasil Di Update');

        return redirect()->route('post.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();

        flash('Data Berhasil Di Hapus');

        return redirect()->route('post.index');
    }
}
