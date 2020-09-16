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

Route::prefix('admin')->group(function(){
    Auth::routes(['register' => false]);
});

Route::namespace('Frontend')->group(function(){
    Route::post('login','MemberController@login');
    Route::name('member.')->group(function(){
        Route::get('login','MemberController@showLoginForm')->name('login');
        Route::middleware('auth.member')->group(function(){
            Route::get('profile','MemberController@profile')->name('profile');
            Route::post('logout','MemberController@logout')->name('logout');
        });
    });
});

Route::middleware('auth.member')->group(function(){
    Route::namespace('Frontend')->group(function(){
        Route::resource('','DashboardController')->only('index');
        Route::resource('feedback', 'FeedbackController')->only('index','store');
        Route::resource('product', 'ProductController')->only('index');
        Route::resource('product.course', 'CourseController')->only('index','show');
    });
});

Route::middleware('auth')->group(function(){
    Route::namespace('Backend')->prefix('admin')->name('admin.')->group(function(){
        Route::resource('dashboard','DashboardController')->only('index');
        Route::resource('information','InformationController')->only('index','update');
        Route::resource('feedback', 'FeedbackController')->only('index','store');
        Route::resource('product', 'ProductController')->only('index','store','destroy');
        Route::resource('member', 'MemberController')->only('index','store');
        Route::resource('user', 'UserController')->only('index','store');
        Route::resource('product.course', 'CourseController')->only('index','store','destroy');
    });
});
