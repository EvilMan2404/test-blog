<?php

namespace App\Http\Controllers;

use App\Models\Likes;

class LikesController extends Controller
{
    public static function like($id_post, $ip)
    {
        $views = Likes::where('id_post', $id_post)->where('ip', $ip)->first();
        if (!$views) {
            $views          = new Likes();
            $views->id_post = $id_post;
            $views->ip      = $ip;
            $views->save();
        } else {
            $views->delete();
        }
    }
}
