<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Slider;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function showCategory(Post $sliderPosts , Category $category)
    {

        $posts = $category->posts()->paginate(9);

        return view('client.category', [
            'categories' => Category::all(),
            'category' => $category,
            'slides' => Slider::orderBy('created_at' , 'desc')->take(4)->get(),
            'sliderPosts' => $sliderPosts->orderby('created_at' , 'desc')->take(4)->get(),
            'readPosts' => Post::orderBy('created_at' , 'desc')->take(8)->get(),
            'posts' => $posts
        ]);
    }
}
