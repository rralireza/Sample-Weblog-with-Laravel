<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Client\HomeController as ClientHomeController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Client\PostController as ClientPostController;
use App\Http\Controllers\Client\CategoryController as ClientCategoryController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/article', function () {
    return view('client.article');
});

Route::prefix('/')->name('client.')->group(function () {
    Route::get('/' , [ClientHomeController::class , 'home'])->name('home');
    Route::get('/about' , [ClientHomeController::class , 'aboutUs'])->name('about');
    Route::get('/contact', [ClientHomeController::class , 'contactUsView'])->name('contact');

    Route::prefix('/articles')->group(function () {
        Route::get('/{post}' , [ClientPostController::class , 'showPost'])->name('article.show');
    });
    Route::prefix('/categories')->group(function () {
        Route::get('/{category}' , [ClientCategoryController::class , 'showCategory'])->name('category.show');
    });
});

Route::middleware(['guest'])->group(function () {
    Route::get('/register' , [RegisterController::class , 'index'])->name('register');
    Route::post('/register/store', [RegisterController::class, 'create'])->name('registerStore');

    Route::get('/login' , [LoginController::class , 'index'])->name('login');
    Route::post('/login/store', [LoginController::class, 'authenticate'])->name('loginStore');
});

Route::middleware(['auth'])->group(function () {

    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    Route::prefix('/dashboard')->group(function () {
        //This route will return dashboard view
        Route::get('/', [HomeController::class, 'index'])->name('dashboard');

        //This route group will return all of the Categories section routes
        Route::prefix('/categories')->group(function () {
            Route::get('/' , [CategoryController::class , 'index'])->name('categories.list');
            Route::get('/create' , [CategoryController::class , 'create'])->name('categories.create');
            Route::post('/create/store', [CategoryController::class, 'store'])->name('categories.store');
            Route::get('/update/{category}' , [CategoryController::class , 'edit'])->name('categories.edit');
            Route::patch('/update/{category}/edit' , [CategoryController::class , 'update'])->name('categories.update');
            Route::delete('/delete/{category}' , [CategoryController::class , 'delete'])->name('categories.delete');
        });
        //This route group will return all of Posts section routes
        Route::prefix('/posts')->group(function () {
            Route::get('/' , [PostController::class , 'index'])->name('posts.index');
            Route::get('/create' , [PostController::class , 'create'])->name('posts.create');
            Route::post('/create/store' , [PostController::class , 'store'])->name('posts.store');
            Route::get('/update/{post}' , [PostController::class , 'edit'])->name('posts.edit');
            Route::patch('/update/{post}/edit' , [PostController::class , 'update'])->name('posts.update');
            Route::delete('/delete/{post}' , [PostController::class , 'delete'])->name('posts.delete');
            Route::get('/search', [PostController::class, 'search'])->name('posts.search');
        });

        //This route group will return all of Sliders section routes
        Route::prefix('/sliders')->group(function () {
            Route::get('/' , [SliderController::class , 'index'])->name('sliders.index');
            Route::get('/create' , [SliderController::class , 'create'])->name('sliders.create');
            Route::post('/create/store', [SliderController::class, 'store'])->name('sliders.store');
            Route::get('/update/{slider}' , [SliderController::class , 'edit'])->name('sliders.edit');
            Route::patch('/update/{slider}/edit' , [SliderController::class , 'update'])->name('sliders.update');
            Route::delete('/update/{slider}' , [SliderController::class , 'delete'])->name('sliders.delete');
            Route::get('/search', [SliderController::class, 'search'])->name('sliders.search');
        });

    });
});
