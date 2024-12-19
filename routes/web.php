<?php

use App\Http\Controllers\gitftsController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('home');
// });


// Route::get('/about', function () {
//     return view('about');
// });

// Route::get('/blog', function () {
//     return view('blog');
// });

// Route::get('/contact', function                                          sd-fç

// });


Route::view("/", "home")->name("home");

Route::view("/about", "about")->name("about");

Route::get("/blog", [PostController::class, 'index'])->name("blog");

Route::get("/letter", [gitftsController::class, 'index'])->name("letter");

Route::view("/contact", "contact")->name("contact");

Route::view("/gift", "gift")->name("gift");

