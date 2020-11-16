<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TitleController;
use App\Http\Controllers\NewsController;

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

Route::get('/', [HomeController::class,'index']);



// Route::get('/welcome', function () {
//     return view('welcome');
// });

Route::redirect('/admin', '/admin/title');
// Route::prefix('admin')->middleware('auth')->group(function () {
Route::prefix('admin')->group(function () {
    //get
    Route::get('/title', [TitleController::class, 'index']);
    Route::get('/news', [NewsController::class, 'index']);

    //post
    Route::post('/title', [TitleController::class, 'store']);
    Route::post('/news', [NewsController::class, 'store']);

    //update
    Route::patch("/title/{id}", [TitleController::class, 'update']);
    Route::patch("/news/{id}", [NewsController::class, 'update']);
    
    //delete
    Route::delete("/title/{id}", [TitleController::class, 'destroy']);
    Route::delete("/news/{id}", [NewsController::class, 'destroy']);

    //show
    Route::patch("/title/sh/{id}",[TitleController::class, 'display']);
    Route::patch("/news/sh/{id}",[NewsController::class, 'display']);
});