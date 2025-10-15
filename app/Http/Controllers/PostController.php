<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $post = new Post();
        $post->yiga_points = 0;
        $post->details = 'Some information';
        $post->likes = 0;
        $post->img = 'img.png';
        $post->location = 'Hyrule field';
        $post->private = 0;
        return view('about', compact(var_name: 'post'));
        //to rename:
    }
}
