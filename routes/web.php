<?php

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

Route::view("/blog", "blog")->name("blog");

Route::view("/contact", "contact")->name("contact");