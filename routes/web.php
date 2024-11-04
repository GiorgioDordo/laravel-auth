<?php

use App\Http\Controllers\Admin\PostController as AdminPostController;
use App\Http\Controllers\Guest\PostController as GuestPostController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get("/posts", [AdminPostController::class, "index"]) ->name("admin.posts.index");
Route::get("/posts/{}id", [AdminPostController::class, "show"])->name("admin.posts.show");
Route::get("/posts/create", [AdminPostController::class, "create"])->name("admin.posts.create");
Route::get("/posts", [AdminPostController::class, "store"])->name("admin.posts.store");