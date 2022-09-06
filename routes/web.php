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
    Route::post('/store', [\App\Http\Controllers\Contract\MContractGroupController::class, 'store'])->name('news.store');
    Route::get('/choices', [\App\Http\Controllers\Contract\MContractGroupController::class, 'choices'])->name('news.choices');
    Route::get('/{id}', [\App\Http\Controllers\Contract\MContractGroupController::class, 'show'])->name('news.show');
    Route::put('/{id}', [\App\Http\Controllers\Contract\MContractGroupController::class, 'update'])->name('news.update');
    Route::get('/{id}/edit', [\App\Http\Controllers\Contract\MContractGroupController::class, 'edit'])->name('news.edit');
});
