<?php

namespace App\Http\Controllers\Landing;

use App\Models\Post;
use App\Models\Kategori;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArtikelController extends Controller
{
    public function semuaBerita()
    {
        $articles = Post::with('kategori')->where('status', 'publish')->orderBy('date', 'DESC')->orderBy('id', 'DESC');
        $recent_posts = $articles->where('status', 'publish')->limit(3)->get();
        $articles = $articles->where('status', 'publish')->paginate(5);
        $categories = Kategori::with('posts')->get();

        return view('layouts.guest.pages.post.index-post', compact(
            'articles',
        ));
    }

    public function detailBerita($slug)
    {
        $item = Post::with('kategoris')->where('slug', $slug)->firstOrFail();

        return view('layouts.guest.pages.post.detail-post', compact(
            'item',
        ));
    }
}
