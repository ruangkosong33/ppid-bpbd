<?php

namespace App\View\Composers;

use App\Models\Setting;
use Illuminate\View\View;

class HeaderComposer
{
    /**
     * Bind data to the view.
     */
    public function compose(View $view): void
    {
        $settings=Setting::all();
        $view->with(['settings'=>$settings]);
    }
}
