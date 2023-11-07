<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(Post $sliderPosts)
    {
        return view('client.index', [
            'posts' => Post::orderBy('created_at' , 'desc')->paginate(9),
            'slides' => Slider::orderBy('created_at' , 'desc')->take(4)->get(),
            'sliderPosts' => $sliderPosts->orderby('created_at' , 'desc')->take(4)->get(),
            'categories' => Category::all(),
            'readPosts' => Post::orderBy('created_at' , 'desc')->take(8)->get()
        ]);
    }

    public function aboutUs()
    {
        return view('client.about-us', [
            'categories' => Category::where('category_id' , '!=' , NULL)->get()
        ]);
    }

    public function contactUsView()
    {
        return view('client.contact-us' , [
            'categories' => Category::where('category_id' , '!=' , NULL)->get()
        ]);
    }

    public function contactUsProcess()
    {
        //Do something
    }
}
