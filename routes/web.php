<?php

use App\Http\Controllers\People\CreateController;
use App\Http\Controllers\People\DeleteController;
use App\Http\Controllers\People\EditController;
use App\Http\Controllers\People\IndexController;
use App\Http\Controllers\People\JsonController;
use App\Http\Controllers\People\JsonOneController;
use App\Http\Controllers\People\ShowController;
use App\Http\Controllers\People\StoreController;
use App\Http\Controllers\People\UpdateController;
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
    Route::get('/json', [JsonController::class, '__invoke'])->name('people.json');
    Route::get('/create', [CreateController::class, '__invoke'])->name('people.create');
    Route::post('/', [StoreController::class, '__invoke'])->name('people.store');
    Route::get('/{people}', [ShowController::class, '__invoke'])->name('people.show');
    Route::get('/{people}/json', [JsonOneController::class, '__invoke'])->name('people.jsonone');
    Route::get('/{people}/edit', [EditController::class, '__invoke'])->name('people.edit');
    Route::patch('/{people}', [UpdateController::class, '__invoke'])->name('people.update');
    Route::delete('/{people}', [DeleteController::class, '__invoke'])->name('people.delete');
});

