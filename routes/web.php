<?php

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

Route::get('/', function () {
    $name = request('name');
    return view('welcome', [
      'name' => $name
    ]);
});

Route::get('/test', function () {
    return view('test', );
});

//  Used as a closure
// Route::get('/posts/{post}', function($post) {
//     $posts=[
//       'my-first-post' => 'Hello, this is my first post.'
//       ,'my-second-post' => 'Hello, this is my second post.'
//     ];
//
//     if (! array_key_exists($post, $posts)) {
//       abort(404, 'This is not the post you were looking for');
//     }
//
//     return view('post', [
//       'post' => $posts[$post]
//     ]);
// });

// Calling a controller
Route::get('/posts/{post}', 'PostsController@show');
