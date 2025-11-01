<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Post extends Model
{
    //may want to use Laravel -> Generate Helper Code
    //Still add the relations here -> Tip: look up on Laravel site
    //use SoftDeletes

    protected $fillable = ['category_id', 'user_id', 'yiga_points', 'title', 'details', 'likes', 'private', 'hidden'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

$posts = Post::all();

