<?php

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

Route::get('/', function () {
    return view('exam1');
});
// Route::get('suntech/hoc-online', function() {
//     return 'Hoc lap trinh Php Laravel';
// });
// Route::get('suntech/{id?}', function($id = null){
//     return "Bai viet co so ID la ${id} ";
// })->where('id', '[0-9]+');
// Route::middleware('backend.auth')->prefix('backend')->group(function(){
//     Route::get('/', function(){
//     return view('backend');
//     })->name('backend.index');

//     Route::get('product', function () {
//         return view('form_product');
//     })->name('product.index');

//     Route::post('product/store', function () {
//         return 'Product Store';
//     })->name('product.store');

//     Route::put('product/put', function () {
//         return 'Product Put';
//     })->name('product.put');

//     Route::delete('product/delete', function () {
//         return 'Product Delete';
//     })->name('product.delete');

//     Route::patch('product/patch', function () {
//         return 'Product Patch';
//     })->name('product.patch');

//     Route::get('category', function(){
//         return 'Category Page';
//     })->name('category.index');

//     Route::get('newpages', function(){
//         return 'News Page';
//     })->name('news.index');

//     Route::get('user', function(){
//         return 'User Page';
//     })->name('user.index');
// });

// Route::get('product', 'ProductController@index');
// Route::get('product/create', 'ProductController@create');

// Route::namespace('Backend')->prefix('backend')->group(function() {
//     Route::get('product', 'ProductController@index');
//     Route::get('category', 'CategoryController@index');
// });

//use Illuminate\Http\Request;

// Route::get('/go-to-profile', function () {
//     dump('Im in profile page');
// })->block($lockSeconds = 10, $waitSeconds = 10);

// Route::get('session-in-laravel', function (Request $request) {
//     //khoi tao 
    
//     $request->session()->put('session1', 'Nguyen Van A');
//     $request->session()->push('session2', 'Nguyen Van B');
//     //Get session by Key
//     //$sessionOn = $request->session()->get('session1');
//     //dd($sessionOn);  

//     //Kiem tra su ton tai cua Key
//     dump($request->session()->has('session1'));

//     //Xoa 1 hoac nhieu session 
//     //session()->pull();
//     session()->forget('session2');
//     session()->flush();

//     //Lay ra tat ca cac session dang co
//     $all = $request->session()->all();
//     dump($all);

// });

Route::namespace('Frontend')->group(function(){
    Route::get('/', 'HomeController@index') -> name('frontend.home');
    Route::get('gio-hang', 'CartController@index') -> name('cart.index');
    Route::get('san-pham', 'ProductController@index');
    Route::get('{slug}', 'CategoryController@show') -> name('frontend.category.show');
    Route::get('cart/{productId}', 'CartController@store') ->name('cart.store');
    Route::post('cart/update', 'CartController@update')->name('cart.update');
    Route::get('cart/remove-product/{productId}', 'CartController@destroy') -> name('cart.destroy');
    Route::post('cart/checkout', 'CartController@checkout')->name('cart.checkout');
});

