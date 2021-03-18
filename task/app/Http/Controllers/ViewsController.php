<?php

namespace App\Http\Controllers;

use App\Models\Views;

class ViewsController extends Controller
{
    /**
     * @param $id_post
     * @param $ip
     */
    public static function addView($id_post, $ip)
    {
        $views = Views::where('id_post', $id_post)->where('ip', $ip)->first();
        if (!$views) {
            $views          = new Views();
            $views->id_post = $id_post;
            $views->ip      = $ip;
            $views->save();
        }
    }
}
