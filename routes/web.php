<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/about', 'AboutController@index')->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/posts/{id?}', function ($id=null) {
    return "Post ID $id";
});

Route::get('/categories/{id?}', function ($id=null) {
    return "Category ID $id";
});

Route::get('profile','ProfileController@display');

// Route::group(['namespace' => 'Front'], function() {
//     Route::get('user','UserController@display');
// });

Route::namespace('Front')->group(function() {
    Route::get('user/display', 'UserController@display');
});

// Route::get('user','Front\UserController@display');

Route::get('login', function() {
    return 'Login is required';
})->name('login');

Route::get('check', function() {
    return 'Middleware';
})->middleware('auth');

Route::resource('news', NewsController::class);

Auth::routes(['verify'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');