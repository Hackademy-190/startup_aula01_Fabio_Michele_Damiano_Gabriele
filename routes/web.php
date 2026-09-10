<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PublicController::class, 'homepage'])->name('welcome');

Route::get('/contatti', [PublicController::class, 'contatti'])->name('contatti');

Route::get('/blog', [PublicController::class, 'blog'])->name('blog');

Route::get('/blog/{id}', [PublicController::class, 'blogShow'])->name('blog-show');

Route::get('/chi-siamo', [PublicController::class, 'chiSiamo'])->name('chi-siamo');

Route::get('/chi-siamo/{id}', [PublicController::class, 'chiSiamoShow'])->name('chi-siamo-show');

// Rotta per vedere la pagina dei contatti
Route::get('/contatti', [PublicController::class, 'contatti'])->name('contact');

// Rotta per inviare il form (quella usata nell'action del form)
Route::post('/contatti', [PublicController::class, 'contattiSubmit'])->name('contact.submit');
