<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function showPost(Post $post)
    {
        return view('client.article' , [
            'post' => $post,
            'categories' => Category::where('category_id' , '!=' , NULL)->get()
        ]);
    }
}
