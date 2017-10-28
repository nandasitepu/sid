<?php

namespace  App\Http\ViewComposers;

use Illuminate\View\View;
use App\Model\Berita;

class BeritaComposer 
{
    public function compose (View $view) 
    {
        $berita = Berita::orderBy('id', 'desc')->paginate(10);
        $populer = Berita::orderBy('hits', 'desc')->paginate(5);

        $view->with('berita', $berita);
        $view->with('populer', $populer);  
    }
}