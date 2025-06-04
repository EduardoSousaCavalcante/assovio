<?php

use App\Http\Controllers\PrincipalController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PrincipalController::class, 'principal'])->name('site.index');
Route::get('/cursos', [PrincipalController::class, 'cursos'])->name('site.cursos');
Route::get('/oportunidades', [PrincipalController::class, 'oportunidades'])->name('site.oportunidades');
Route::get('/vestibulinho', [PrincipalController::class, 'vestibulinho'])->name('site.vestibulinho');
Route::get('/contato',[PrincipalController::class, 'contato'])->name('site.contato');
