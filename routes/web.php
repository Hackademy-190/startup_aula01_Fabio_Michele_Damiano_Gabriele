<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

Route::get('/', [PublicController::class, 'homepage'])->name('welcome');

Route::get('/progetti', [PublicController::class, 'blog'])->name('blog');

Route::get('/chi-siamo', [PublicController::class, 'chiSiamo'])->name('chi-siamo');

// MOSTRA il form dei contatti (corretto, definito una sola volta)
Route::get('/contatti', [PublicController::class, 'contatti'])->name('contact');

// INVIA i dati del form a Mailtrap (gestito con POST)
Route::post('/contatti', [PublicController::class, 'contattiSubmit'])->name('contact.submit');
