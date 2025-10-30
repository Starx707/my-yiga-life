<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Post extends Model
{
    //may want to use Laravel -> Generate Helper Code
    //Still add the relations here -> Tip: look up on Laravel site
    //use SoftDeletes

}

$posts = Post::all();

