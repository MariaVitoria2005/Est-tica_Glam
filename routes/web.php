<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AgendamentoController;
use App\Http\Controllers\ServicoController;

use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/', [AgendamentoController::class, 'index'])->name('Home.index');
Route::post('/agendamento', [AgendamentoController::class, 'store'])->name('agendamento.store');
Route::get('/', [ServicoController::class, 'index'])->name('Home.index');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';