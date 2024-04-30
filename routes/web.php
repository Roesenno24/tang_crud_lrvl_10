<?php

use Illuminate\Support\Facades\Route;
Route::get('/',function(){
    return view('Welcome');
});
//route resource
Route::resource('/posts', \App\Http\Controllers\PostController::class);
