<?php

use App\Http\Controllers\Users;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('front.index');
// });
Route::view('/','front.index')->name('front.index');

Route::get('post-single-4',function(){
    return view('front.single');
});

// dashnoard routes
Route::group(['prefix'=>'/dashboard'],function(){
    Route::get('/', function(){return view('dashboard.index');});
    Route::get('/create', function(){return view('dashboard.create-article');});
    Route::get('/allnews', function(){return view('dashboard.allNews');});
    Route::get('/profileEdit', function(){return view('dashboard.profileEdit');});
    Route::get('/category', function(){return view('dashboard.category');});
    Route::get('/editNews', function(){return view('dashboard.editNews');});
    Route::get('/editCategory', function(){return view('dashboard.editCategory');});
});

Route::group(['prefix'=>'/auth'],function(){
    Route::view('/register', 'auth.register')->name('register');
    Route::post('/register', [AuthController::class, 'register']);
});

