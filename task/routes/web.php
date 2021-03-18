<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\MainController;
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

Route::get('/', [MainController::class, 'index'])->name('main-page');
Route::get('/article/{slug}', [ArticleController::class, 'index'])->name('article');
Route::get('/catalog', [CatalogController::class, 'index'])->name('catalog');

Route::prefix('api')->group(static function () {
    Route::post('/article/views', [ApiController::class, 'views'])->name('api.views');
    Route::post('/article/like', [ApiController::class, 'like'])->name('api.like');
    Route::post('/article/comment', [ApiController::class, 'comment'])->name('api.comment');
});
