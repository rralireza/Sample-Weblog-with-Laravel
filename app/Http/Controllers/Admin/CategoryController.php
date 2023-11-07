<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    public function index()
    {
        return view('admin.categories.index', [
            'categories' => Category::all()
        ]);
    }

    public function create()
    {
        return view('admin.categories.create', [
            'categories' => Category::all()
        ]);
    }

    public function store(CategoryRequest $request)
    {
        Category::query()->create([
            'title' => $request->get('title'),
            'slug' => $request->get('slug'),
            'category_id' => $request->get('category_id')
        ]);

        Session::flash('success' , 'دسته بندی جدید با موفقیت ایجاد شد.');
        return redirect()->back();
    }

    public function edit(Category $category)
    {
        return view('admin.categories.edit', [
           'category' => $category,
            'categories' => Category::all()
        ]);
    }

    public function update(Category $category , CategoryRequest $request)
    {
        $category->update([
            'title' => $request->get('title'),
            'slug' => $request->get('slug'),
            'category_id' => $request->get('category_id')
        ]);

        Session::flash('success' , 'دسته بندی موردنظر با موفقیت بروزرسانی شد.');
        return redirect(route('categories.list'));
    }

    public function delete(Category $category)
    {
        $category->delete();
        Session::flash('error' , 'دسته بندی موردنظر با موفقیت حذف شد.');
        return redirect(route('categories.list'));
    }
}
