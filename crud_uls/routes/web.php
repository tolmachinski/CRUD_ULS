<?php

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

Route::get('/', [MainController::class, 'index']);
Route::get('/create', [MainController::class, 'create']);
Route::post('/create/new', [MainController::class, 'new']);
Route::get('/edit/{id}', [MainController::class, 'edit'])->name('news.id');
Route::post('/edit/{id}/new', [MainController::class, 'edit_new']);
Route::get('/show/{id}', [MainController::class, 'show'])->name('show.id');
Route::get('/delete/{id}', [MainController::class, 'delete'])->name('delete.id');
Route::get('/search', [MainController::class, 'search'])->name('search');