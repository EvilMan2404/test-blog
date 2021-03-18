<?php

namespace App\Http\Controllers;

use App\Models\Post;

class MainController extends Controller
{

    public function index()
    {
        $menu  = 'main';
        $items = Post::orderBy('created_at', 'DESC')->take(6)->get();
        return view('welcome',
            [
                'menu'  => $menu,
                'items' => $items
            ]);
    }
}
