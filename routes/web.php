<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

Route::get('/', [PublicController::class, 'homepage'])->name('welcome');

Route::get('/contatti', [PublicController::class, 'contatti'])->name('contatti');

Route::get('/progetti', [PublicController::class, 'blog'])->name('blog');

Route::get('/chi-siamo', [PublicController::class, 'chiSiamo'])->name('chi-siamo');

// Rotta per vedere la pagina dei contatti
Route::get('/contatti', [PublicController::class, 'contatti'])->name('contact');

// Rotta per inviare il form (quella usata nell'action del form)
Route::post('/contatti', [PublicController::class, 'contattiSubmit'])->name('contact.submit');
