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

Auth::routes();

Route::get('/main', function () {

    $posts=TCG\Voyager\Models\Post::get();
    $products=\App\Product::orderBy('created_at','DESC')->get();

    return view('welcome',compact('posts','products'));

});

Route::get('/home', 'HomeController@index');

Route::get('{slug}', function ($slug) {

    $post=TCG\Voyager\Models\Post::where('slug',$slug)->first();
    return view('show',compact('post'));

});
