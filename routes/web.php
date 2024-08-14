<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NarutoController;
use App\Http\Controllers\SasukeController;
use App\Http\Controllers\HinataController;
use App\Http\Controllers\SakuraController;
use App\Http\Controllers\HijosController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/naruto', [NarutoController::class, 'naruto']);
Route::get('/sasuke', [SasukeController::class, 'sasuke']);
Route::get('/hinata', [HinataController::class, 'hinata']);
Route::get('/sakura', [SakuraController::class, 'sakura']);
Route::get('/hijos', [HijosController::class, 'hijos']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
