<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index($slug, Request $request)
    {
        $menu = 'catalog';
        $item = Post::with('tags')->where('slug', $slug)->firstOrFail();
        return view('article', ['item' => $item, 'menu' => $menu]);
    }
}
