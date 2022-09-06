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
    return view('welcome');
});

Route::prefix("news")->group(function(){
    Route::get('/',[\App\Http\Actions\News\NewsIndexAction::class,'__invoke'])->name("news.index");
    Route::get('/{id}', [\App\Http\Actions\News\NewsShowAction::class, '__invoke'])->name('news.show');
});
