<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

Route::get('/', [PublicController::class, 'homepage'])->name('welcome');

Route::get('/contatti', [PublicController::class, 'contatti'])->name('contatti');

Route::get('/progetti', [PublicController::class, 'progetti'])->name('progetti');

Route::get('/chi-siamo', [PublicController::class, 'chiSiamo'])->name('chi-siamo');