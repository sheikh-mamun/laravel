<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('master');
});

Route::get('/home', function () {
    return view('pages/home');
})->name('home');

Route::get('/shop', function () {
    return view('pages/shop');
})->name('shop');

Route::get('/about', function () {
    return view('pages/about');
})->name('about');

Route::get('/service', function () {
    return view('pages/service');
});

Route::get('/blog', function () {
    return view('pages/blog');
});

Route::get('/contact', function () {
    return view('pages/contact');
});

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');



######################################admin#####################

Route::get('/admin-master', function () {
    return view('admin-master');
});



