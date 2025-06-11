<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrincipalController;

Route::get('/', [PrincipalController::class, 'principal'])->name('site.index');
Route::get('/cursos', [PrincipalController::class, 'cursos'])->name('site.cursos');
Route::get('/oportunidades', [PrincipalController::class, 'oportunidades'])->name('site.oportunidades');
Route::get('/vestibulinho', [PrincipalController::class, 'vestibulinho'])->name('site.vestibulinho');
Route::get('/contato',[PrincipalController::class, 'contato'])->name('site.contato');

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
