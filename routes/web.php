<?php

use App\Http\Controllers\People\CreateController;
use App\Http\Controllers\People\DeleteController;
use App\Http\Controllers\People\EditController;
use App\Http\Controllers\People\IndexController;
use App\Http\Controllers\People\ShowController;
use App\Http\Controllers\People\StoreController;
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

Route::group(['nemespace' => 'People', 'prefix' => 'peoples'], function() {
    Route::get('/', [IndexController::class, '__invoke'])->name('people.index');
    Route::get('/create', [CreateController::class, '__invoke'])->name('people.create');
    Route::post('/', [StoreController::class, '__invoke'])->name('people.store');
    Route::get('/{person}', [ShowController::class, '__invoke'])->name('people.show');
    Route::patch('/{person}', [EditController::class, '__invoke'])->name('people.edit');
    Route::delete('/{person}', [DeleteController::class, '__invoke'])->name('people.delete');
});

