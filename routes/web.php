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

//------------ PRAKTIKUM 1 -------------
// Route::get('/', function () {
//     return 'Selamat Datang';
// });

// Route::get('/about', function () {
//     return 'NIM = 1941720106 <br> Nama = Fransiska Lidya Kartika';
// });

// Route::get('/articles/{id}', function ($id) {
//     return 'Halaman Artikel dengan ID '. $id;
// });

// ----------- AKHIR PRAKTIKUM 1 ----------

// ---------- PRAKTIKUM 2 -----------------

// Route::get('/', [App\Http\Controllers\PageController::class, 'index']);
// Route::get('/about', [App\Http\Controllers\PageController::class, 'about']);
// Route::get('/articles/{id}', [App\Http\Controllers\PageController::class, 'articles']);

// ------------ AKHIR PRAKTIKUM 2 -----------

// ---------- PRAKTIKUM 2 single action controller-----------------

// Route::get('/', [App\Http\Controllers\HomeController::class, '__invoke']);
// Route::get('/about', [App\Http\Controllers\AboutController::class, '__invoke']);
// Route::get('/articles/{id}', [App\Http\Controllers\ArticleController::class, '__invoke']);

// ------------ AKHIR PRAKTIKUM 2 single action controller-----------


//---------------- PRAKTIKUM 3 -----------------
Route::prefix('')->group(function(){
    Route::get('/', [App\Http\Controllers\Home3Controller::class,'index']);
});

Route::prefix('category')->group(function(){
    Route::get('/{id}', [App\Http\Controllers\ProductController::class,'product']);
});

Route::get('/news/{id?}',[App\Http\Controllers\NewsController::class,'news']);

Route::prefix('program')->group(function(){
    Route::get('/{id}', [App\Http\Controllers\ProgramController::class,'program']);
});

Route::get('/aboutus',[App\Http\Controllers\AboutUsController::class,'aboutus']);

Route::resource('contact', App\Http\Controllers\ContactController::class);
//---------------- AKHIR PRAKTIKUM 3-------------