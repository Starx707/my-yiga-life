<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;

class PostController extends Controller
{
    public function index()//classname $variable name** aka Posts $post
    {
        $posts = Post::all(); //->with('category') >> is quicker: is like JOIN
        return view('post.index', ['posts' => DB::table('posts')->latest()->paginate(3)], compact(var_name: 'posts'));
    }

    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //return data to input fields
        //$variable = new post();

        request()->validate([
            'title' => ['required', 'min:4'],
            'description' => ['required', 'min:1']
        ]);

        Post::create([
            'category_id' => 1,
            'user_id' => $request->user()->id,
            'yiga_points' => 0,
            'title' => request('title'),
            'details' => request('description'),
            'likes' => 0,
            'private' => 0,
            'hidden' => 0
        ]);

        return redirect('/index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) //Post $post
    {
        $post = Post::findOrFail($id);
        return view('post.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $post = Post::findOrFail($id);
        return view('post.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //validate
        request()->validate([
            'title' => ['required', 'min:4'],
            'description' => ['required', 'min:1']
        ]);

        //authorize...

        $post = Post::findOrFail($id);

        $post->update([
            'title' => request('title'),
            'details' => request('description')
            //image
            //location
            //private/public
        ]);
        return redirect('/post/' . $post->id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //authorize

//        $post = Post::findOrFail($id);
//        $post->delete();
        Post::findOrFail($id)->delete();

        return redirect('/index'); //change to my posts page once that works
    }

    public function userPosts()
    {
        if (Auth::guest()) {
            return redirect('/login');
        }
        //get user id
        //compare which posts are connected to those id's
        return view('my-posts');
    }

}
