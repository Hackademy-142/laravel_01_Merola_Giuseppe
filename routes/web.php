<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\StudentController;

Route::get('/', [PublicController::class, 'homepage'])->name('welcome');

Route::get('/pagina1', [PublicController::class, 'pagina1'])->name('pagina1');

Route::get('/pagina2', [StudentController::class, 'studenti'])->name('pagina2');

