<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    public function index()
    {
        return view('admin.posts.index' , [
            'posts' => Post::orderBy('created_at' , 'desc')->paginate(4),
            'categories' => Category::all()
        ]);
    }

    public function create()
    {
        return view('admin.posts.create', [
            'categories' => Category::all()
        ]);
    }

    public function store(PostRequest $request)
    {

        $path = $request->file('image')->storeAs('public/images/posts' , $request->file('image')->getClientOriginalName());

        Post::query()->create([
            'user_id' => Auth::user()->id,
            'title' => $request->get('title'),
            'sub_title' => $request->get('sub_title'),
            'slug' => $request->get('slug'),
            'content' => $request->get('content'),
            'image' => $path,
            'category_id' => $request->get('category_id')
        ]);

        Session::flash('success' , 'نوشته جدید با موفقیت ایجاد شد.');
        return redirect()->back();
    }

    public function edit(Post $post)
    {
        return view('admin.posts.edit', [
           'post' => $post,
            'categories' => Category::all()
        ]);
    }

    //This function will update posts
    public function update(UpdatePostRequest $request , Post $post)
    {
        $path = $post->image;

        if ($request->hasFile('image')) {
            $path = $request->file('image')
                ->storeAs('public/images/posts', $request->file('image')
                ->getClientOriginalName());
        }

        $post->update([
            'title' => $request->get('title'),
            'sub_title' => $request->get('sub_title'),
            'slug' => $request->get('slug'),
            'category_id' => $request->get('category_id'),
            'content' => $request->get('content'),
            'image' => $path
        ]);

        Session::flash('success' , 'نوشته موردنظر با موفقیت بروزرسانی شد.');
        return redirect(route('posts.index'));
    }

    public function delete(Post $post)
    {
        $post->delete();
        Session::flash('error' , 'نوشته موردنظر با موفقیت حذف شد.');
        return redirect(route('posts.index'));
    }

    public function search(Request $request)
    {
        $search = $request->input('search');

        $posts = Post::where('title' , 'like' , '%' . $search . '%')->paginate(4);

        return view('admin.posts.index', [
            'posts' => $posts
        ]);
    }
}
