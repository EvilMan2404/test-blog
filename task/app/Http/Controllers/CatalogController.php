<?php

namespace App\Http\Controllers;

use App\Models\Post;

class CatalogController extends Controller
{
    public function index()
    {
        $items = Post::orderBy('created_at', 'DESC')->paginate(10);
        $menu  = 'catalog';
        return view('catalog', ['menu' => $menu, 'items' => $items]);
    }
}
