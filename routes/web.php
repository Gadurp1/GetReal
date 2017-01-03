<?php
use Vinkla\Instagram\Instagram;


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

Route::get('/', function () {

    $instagram = new Instagram();
    $instagram = $instagram->get('getrealclothing');

    $posts=TCG\Voyager\Models\Post::get();
    $products=\App\Product::orderBy('created_at','DESC')->get();

    return view('welcome',compact('posts','instagram','products'));

});

Route::get('/home', 'HomeController@index');

Route::get('Products/{slug}', function ($slug) {

    $product=\App\Product::where('slug',$slug)->first();
    return view('products.show',compact('product'));

});

Route::get('Lookbook-2017', function () {
    $files=File::files('storage/lookbook');
    return view('lookbook')->with('files',$files);

});

Route::get('{slug}', function ($slug) {

    $post=TCG\Voyager\Models\Post::where('slug',$slug)->first();
    return view('show',compact('post'));

});
