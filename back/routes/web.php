<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get(
    '/',
    function () {
        return redirect( route('backend.dashboard') );
        // return view('dashboard.video-single');
    }
);

Route::get(
    '/login',
    function () {
        if (Auth::check())
            return redirect( route('backend.dashboard') );
        else
        return view('auth.login');
    }
)->name('login');

Route::get(
    '/register',
    function () {
        if (Auth::check())
            return redirect( route('backend.dashboard') );
        else
        return view('auth.register');
    }
)->name('register');

Route::post('/register', 'AuthController@register')->name('auth.register');
Route::post('/login', 'AuthController@login')->name('auth.login');
Route::post('/logout', 'AuthController@logout')->name('auth.logout');

// Route Affliated to User and Guest
Route::get('/dashboard', 'AuthController@index')->name('backend.dashboard');

Route::get('video/{video}', 'VideoController@show')->name('videos.show');

Route::group(
    ['middleware' => ['auth']],
    function () {


        Route::get('/channel/{user}', 'AuthController@channelVideos')->name('channel.videos');

        Route::get('/channel/{user}/edit', 'AuthController@profileEdit')->name('channel.edit');
        Route::put('/channel/{user}/edit', 'AuthController@updateProfile')->name('channel.update');
        
        Route::resource('videos', 'VideoController', ['except' => ['show']]);
        Route::resource('comments', 'CommentController');

        Route::post('video-upload', 'VideoController@store')->name('videos.store');
        Route::get('videosdelete/{video}', 'VideoController@destroy')->name('videos.destroy');
        
    }
);
