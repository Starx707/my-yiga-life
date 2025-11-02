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
    public function index()
    {
        $posts = Post::all(); //->with('category') >> is quicker: is like JOIN
        return view('post.index', ['posts' => DB::table('posts')->latest()->paginate(10)], compact(var_name: 'posts'));
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

        if (request('postType')) {
            $private = request('postType');
        } else if (request('postType') === null) {
            $private = "0";
        }

        Post::create([
            'category_id' => 1,
            'user_id' => $request->user()->id,
            'yiga_points' => 0,
            'title' => request('title'),
            'details' => request('description'),
            'likes' => 0,
            'private' => $private,
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

//        Gate::define('edit-post', function (User $user, Post $post) {
//            return $post->user->is($user);
//        });
//        if (Auth::guest()) {
//            return redirect('/login');
//        }
//        if ($post->user->isNot(Auth::user())) {
//            abort(403);
//        }

        Gate::authorize('edit-post', $post);

        return view('post.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        request()->validate([
            'title' => ['required', 'min:4'],
            'description' => ['required', 'min:1']
        ]);

        $post = Post::findOrFail($id);
        $post->update([
            'title' => request('title'),
            'details' => request('description'),
            'private' => $this->privateOrPublic(request('postType'))
        ]);

        return redirect('/post/' . $post->id);
    }

    private function privateOrPublic($data)
    {
        if ($data) {
            return $data;
        } else if ($data === null) {
            return "0";
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Post::findOrFail($id)->delete();
        return redirect('/index');
    }

    public function userPosts(Request $request)
    {
        if (Auth::guest()) {
            return redirect('/login');
        }

        $posts = Post::all()->where('user_id', $request->user()->id);
        return view('my-posts', compact('posts'));

        //, ['posts' => DB::table('posts')->latest()->paginate(3)]
    }

    public function allPosts(Request $request)
    {//same as index but neater to keep separate
        $posts = Post::all();

        if (Auth::guest()) {
            return redirect('/login');
        }
        if ($request->user()->admin !== 1) {
            abort(403);
        }

        return view('all-posts', compact(var_name: 'posts'));
    }

    public function hidePost($id) //gives admin right to hide a post
    {
        $post = Post::findOrFail($id);
        $post->update([
            'private' => "1"
        ]);

        return redirect('/all-posts');
    }

    public function filters($filter) //get id number
    {
        $posts = Post::all()->where('category_id', $filter);
        return view('post.index', compact(var_name: 'posts'));
    }

    public function search(Request $request)
    {

        request()->validate([
            'search' => ['required', 'max:10']
        ]);

        // Get the search value from the request
        $search = $request->input('search');

        // Search in the title and body columns from the posts table
        $posts = Post::query()
            ->where('title', 'LIKE', "%{$search}%")
            ->orWhere('id', 'LIKE', "%{$search}%")
            ->get();

        return view('post.index', compact('posts'));
    }

}
