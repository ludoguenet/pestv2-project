<?php

declare(strict_types=1);

use App\Http\Controllers\Ebook\StoreController;
use App\Http\Controllers\Ebook\UpdateController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('homepage');

Route::post('/ebooks/store', StoreController::class)
    ->name('ebooks.store');

Route::put('/ebooks/{ebook}', UpdateController::class)
    ->name('ebooks.update');
