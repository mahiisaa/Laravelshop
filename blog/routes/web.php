<?php

use Illuminate\Support\Facades\Route;
use \App\Models\Product;
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
Route::get('/',function(){
   return view('main');
});
Route::get('/admin','/Admin/PanelController@index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::prefix('/admin')->group(function(){
    Route::get('/products/create',function(){
        return view('Admin.product.create');
    });
    Route::post('/products/create',function(){
        $product=new Product();
        $product->title=request('title');
        $product->User_id=request('title');
        $product->body=request('body');
        $product->slug=request('title');           
        $product->description=request('title');
        $product->price=request('title');
        $product->imageUrl=request('title');
        $product->save();
    });

});