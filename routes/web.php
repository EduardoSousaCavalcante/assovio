<?php
 
use App\Http\Controllers\PrincipalController;
use App\Http\Controllers\CursosController;
use App\Http\Controllers\OportunidadesController;
use App\Http\Controllers\VestibulinhoController;
use App\Http\Controllers\ContatoController;
use Illuminate\Support\Facades\Route;
 
 
Route::get('/', [PrincipalController::class, 'principal'])->name('site.index');
 
Route::get('/sobrenos', [CursosController::class, 'sobrenos'])->name('site.cursos');
Route::get('/contato', [OportunidadesController::class, 'contato'])->name('site.oportunidades');
Route::get('/blog', [VestibulinhoController::class, 'blog'])->name('site.vestibulinho');
Route::get('/servicos',[ContatoController::class, 'servicos'])->name('site.contato');
