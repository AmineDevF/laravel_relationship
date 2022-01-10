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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/p', [App\Http\Controllers\RelationShip_one_to_many::class, 'posts']);
Route::get('/c', [App\Http\Controllers\RelationShip_one_to_many::class, 'categories']);
Route::get('/b', [App\Http\Controllers\RelationShip_one_to_many::class, 'many_to_many']);

Route::fallback(function () {
    return view("404"); // template should exists
});