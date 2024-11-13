<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AgendamentoController;
use App\Http\Controllers\ServicoController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\ProfissionalController;
use App\Http\Controllers\PagamentoController;
use App\Models\Feedback;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/', [AgendamentoController::class, 'index'])->name('Home.index');
Route::get('/agendamento/create', [AgendamentoController::class, 'create'])->name('novo_agendamento');
Route::post('/agendamento', [AgendamentoController::class, 'store'])->name('agendamento.store');

Route::get('/feedbacks/create', [FeedbackController::class, 'create'])->name('feedback.create');
Route::post('/feedbacks', [FeedbackController::class, 'store'])->name('feedback.store');

Route::get('/profissionais/create', [ProfissionalController::class, 'create'])->name('profissionais.create');
Route::post('/profissionais', [ProfissionalController::class, 'store'])->name('profissionais.store');

Route::get('/servicos/create', [ServicoController::class, 'create'])->name('servicos.create');
Route::post('/servicos', [ServicoController::class, 'store'])->name('servicos.store');
Route::get('/servicos/{id}', [ServicoController::class, 'show'])->name('servicos.show');







Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';