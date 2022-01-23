<?php

use Illuminate\Support\Facades\Route;




Route::get('/', function () {
    return view('welcome');
})->name('home');




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth','verified'])->name('dashboard');

Route::get('/profile', [ProfileInformationController::class, 'edit'])->name('profile');
Route::put('/profile', [ProfileInformationController::class, 'update'])->name('profile.update');


require __DIR__.'/auth.php';
