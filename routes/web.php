<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
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
Route::prefix('todo')->group(function() {
    Route::get('list', [\App\Http\Controllers\TodoController::class, 'showList'])->name('todo list');
    Route::get('show/{todo}', [\App\Http\Controllers\TodoController::class, 'show'])->name('show todo');
    Route::delete('delete/{todo}', [\App\Http\Controllers\TodoController::class, 'delete'])->name('delete todo');
    Route::get('create', [\App\Http\Controllers\TodoController::class, 'create'])->name('create todo');
    Route::post('store', [\App\Http\Controllers\TodoController::class, 'store'])->name('store todo');
    Route::get('edit/{todo}', [\App\Http\Controllers\TodoController::class, 'edit'])->name('edit todo');
    Route::put('update/{todo}', [\App\Http\Controllers\TodoController::class, 'update'])->name('update todo');
});

