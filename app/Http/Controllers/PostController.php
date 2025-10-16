<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()//classname $variable name** aka Posts $post
    {
        $post_d = new Post();
        $post_d->yiga_points = 0;
        $post_d->details = 'Some information';
        $post_d->likes = 0;
        $post_d->img = 'img.png';
        $post_d->location = 'Hyrule field';
        $post_d->private = 0;

        foreach (Post::all() as $post) {
            echo $post->id;
        }

        $post_location = Post::where('id', 1)->first(); //this not needed if= **
        //dd() = done & die; to not accidentally run any more code
        //findorFail -> standard 404 page if can't find what it's been given

        return view('posts', compact(var_name: 'post_location'));
    }

    public function create()
    {
        //database table -> migration
        // Model (singular)
        // send to view
        //<select>

        //$categories = Category::all() -> poops array
        //return view('page.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validate
        $request->validate([
            //'name' => 'required|max:100' //left to right & | functions as ,
        ]);
        //show errors
        //security
        //return data to input fields
        //insert into sql

        //$variable = new post();
        //$variable->title = $request->input('nameofinputfield')
        //$variable -> save()

        //return redirect()->route('page.index',pageController@index);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

}
