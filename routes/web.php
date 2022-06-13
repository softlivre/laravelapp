<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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

/* original code
Route::get('/', function () {
    return view('welcome');    
});
*/

Route::get('/', [PagesController::class, 'index']);

Route::get('/about', [PagesController::class, 'about']);

Route::get('/services', [PagesController::class, 'services']);

Route::get('/henrique', [PagesController::class, 'henrique']);

//Route::resource('posts', 'PostsController'); //laravel7
Route::resource('posts', App\Http\Controllers\PostsController::class);

// or this alternative, without having do declare the 
// use App\Http\Controllers\PagesController;
/*
Route::get('/', 'App\Http\Controllers\PagesController@index');
*/

Route::get('/users/{id}/{name}', function ($id, $name) {
    return 'this is user id:'.$id.' and name:'.$name;
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
