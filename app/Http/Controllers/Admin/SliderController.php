<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\SliderRequest;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SliderController extends Controller
{

    public function index()
    {
        return view('admin.sliders.index' , [
            'sliders' => Slider::orderBy('created_at' , 'desc')->paginate(4)
        ]);
    }

    public function create()
    {
        return view('admin.sliders.create');
    }

    public function store(SliderRequest $request)
    {
        $path = $request->file('image')
            ->storeAs('public/images/sliders' , $request->file('image')->getClientOriginalName());
        Slider::query()->create([
            'title' => $request->get('title'),
            'slug' => $request->get('slug'),
            'image' => $path
        ]);

        Session::flash('success' , 'اسلایدر جدید با موفقیت ایجاد شد.');
        return redirect()->back();
    }

    public function edit(Slider $slider)
    {
        return view('admin.sliders.edit' , [
            'slider' => $slider
        ]);
    }

    public function update(Slider $slider , SliderRequest $request)
    {
        $path = $slider->image;

        if ($request->hasFile('image')) {
            $path = $request->file('image')->storeAs('public/images/sliders' , $request->file('image')->getClientOriginalName());
        }

        $slider->update([
           'title' => $request->get('title'),
           'slug' => $request->get('slug'),
            'image' => $path
        ]);

        Session::flash('success' , 'اسلاید موردنظر با موفقیت بروزرسانی شد.');
        return redirect(route('sliders.index'));
    }

    public function delete(Slider $slider)
    {
        $slider->delete();
        Session::flash('error' , 'اسلاید موردنظر با موفقیت حذف شد.');
        return redirect(route('sliders.index'));
    }

    public function search(Request $request)
    {
        $search = $request->input('search');

        $sliders = Slider::where('title' , 'like' , '%' . $search . '%')->paginate(4);

        return view('admin.sliders.index', [
            'sliders' => $sliders
        ]);
    }
}
