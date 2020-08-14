<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


// Route::get('/',function(){
//     return view('question/index');
// })->name('index');

// Route::get('/tutorial',function(){
//     return view('tutorial');
// })->name('tutorial');

// Route::get('/test',function(){
//     return view('test');
// })->name('test');

// Route::get('/blog',function(){
//     return view('blog');
// })->name('blog');

// Route::get('/about',function(){
//     return view('about');
// })->name('about');

// Route::get('/contact',function(){
//     return view('contact');
//  })->name('contact');

// Route::get('','QuestionController@index')->name('index');
Route::get('/','QuestionController@index')->name('question.index');
Route::resource('/question','QuestionController')->except('index')->middleware('auth');
Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/question/{question}/answer', 'AnswerController');
Route::post('/answer/{answer}/like','LikeController@like')->name('like');
Route::post('/answer/{answer}/unlike','LikeController@unlike')->name('unlike');
Route::resource('/question/category', 'CategoryrController');
