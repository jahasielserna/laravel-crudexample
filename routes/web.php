<?php

use App\Http\Controllers\ObjectsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ObjectsController::class, 'get'])->name('objects');
Route::post('/', [ObjectsController::class, 'create'])->name('create');
Route::patch('/{object}', [ObjectsController::class, 'update'])->name('update');
Route::delete('/{object}', [ObjectsController::class, 'delete'])->name('delete');
Route::view('/new', 'new')->name('new object');
Route::get('/edit/{object}', [ObjectsController::class, 'edit'])->name('edit object');