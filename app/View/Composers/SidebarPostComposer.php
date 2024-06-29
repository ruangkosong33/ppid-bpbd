<?php

namespace App\View\Composers;

use App\Models\Post;
use App\Models\Setting;
use App\Models\Kategori;
use Illuminate\View\View;

class SidebarPostComposer
{
    /**
     * Bind data to the view.
     */
    public function compose(View $view): void
    {
        $recent_posts = Post::orderBy('date', 'desc')->where('status', 'publish')->orderBy('id', 'desc')->limit(6)->get();
        $categories = Kategori::with('posts')->get();
        $view->with(['recent_posts'=>$recent_posts, 'categories'=>$categories]);
    }
}
