<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Front\UserController;


Route::get('/admin', function () {
    return "Admin";
})->name('admin');


Route::namespace('Front')->group(function() {

    Route::prefix('admin')->group(function() {
        Route::get('users', 'UserController@getUsername');
    });
    
    Route::get('users', 'UserController@getUsername');
});


Route::group(['prefix' => 'users'], function() {
    Route::get('/', function(){
        return "It works";
    });
    Route::get('delete/{id?}', function($id){
        return "Users Delete ID $id";
    });
});