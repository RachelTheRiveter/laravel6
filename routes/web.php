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
    return view('welcome');
});

Route::get('/about', function (){
    return view('about', [
        'articles' => App\Article::take(3)->latest()->get()
    ]);
});


Route::get('/articles', 'ArticlesController@index')->name('article.index');
Route::post('/articles', 'ArticlesController@store');
Route::get('/articles/create', 'ArticlesController@create');
Route::get('/articles/{article}', 'ArticlesController@show')->name('articles.show');
Route::get('/articles/{article}/edit', 'ArticlesController@edit');
Route::put('articles/{article}', 'ArticlesController@update');
//Route::post();
//Route::delete();

// GET /videos -> List of all videos
// GET /videos/create -> create a new video
// POST /videos -> stores the new video you created
// GET /videos/2 -> Gets a specific video
// GET /videos/2/edit -> Edits a specific video
// PUT /videos/2 -> stores the edits to the specific video
// DELETE /videos/2 -> Deletes the video
