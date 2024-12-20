<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AgendamentoController;
use App\Http\Controllers\ServicoController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\ProfissionalController;
use App\Http\Controllers\PagamentoController;
use App\Http\Controllers\Servico_DetalhesController;
use App\Http\Controllers\CancelamentoController;


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::get('/historico', [AgendamentoController::class, 'index'])->name('historico');
Route::get('/', [AgendamentoController::class, 'index'])->name('Home.index');
Route::get('/agendamento/{id}', [AgendamentoController::class, 'create'])->name('agendamento.create');
Route::post('/agendamento', [AgendamentoController::class, 'store'])->name('agendamento.store');

Route::get('/feedbacks', [FeedbackController::class, 'index'])->name('feedbacks.index');
Route::get('/feedbacks/create', [FeedbackController::class, 'create'])->name('feedback.create');
Route::post('/feedbacks', [FeedbackController::class, 'store'])->name('feedback.store');

Route::get('/profissionais/create', [ProfissionalController::class, 'create'])->name('profissionais.create');
Route::post('/profissionais', [ProfissionalController::class, 'store'])->name('profissionais.store');

Route::get('/servicos', [ServicoController::class, 'index'])->name('servicos.index');
Route::get('/servicos/create', [ServicoController::class, 'create'])->name('servicos.create');
Route::post('/servicos', [ServicoController::class, 'store'])->name('servicos.store');
Route::get('/servicos/{id}', [ServicoController::class, 'show'])->name('servicos.show');
Route::get('/pesquisar-servicos', [ServicoController::class, 'search'])->name('servicos.search');
// Route::post('/cancelar-servico', [ServicoController::class, 'cancelar'])->name('cancelar_servico');
// routes/web.php
Route::delete('/cancelar-servico/{id}', [ServicoController::class, 'cancelar'])->name('servico.cancelar');


Route::middleware(['auth'])->group(function () {
    // Página de cancelamento (GET)
    Route::get('/cancelar-servico/{agendamentoId}', [CancelamentoController::class, 'showCancellationPage'])->name('cancelamento.page');
    
    // Processamento do cancelamento (POST)
    Route::post('/cancelar-servico/{agendamentoId}', [CancelamentoController::class, 'processCancellation'])->name('cancelamento.process');
});




Route::get('/servico/{id}', [Servico_DetalhesController::class, 'detalhes'])->name('detalhes_servico');


Route::get('/pagamentos', [PagamentoController::class, 'index'])->name('pagamentos_index');
Route::get('/pagamentos/{id}', [PagamentoController::class, 'show'])->name('pagamentos.show');
Route::post('/pagamento', [PagamentoController::class, 'store'])->name('pagamento.store');
Route::get('/pagamento', [PagamentoController::class, 'showForm'])->name('pagamento.form');



Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register'); // Formulário de registro
Route::post('/register', [AuthController::class, 'store'])->name('register.store'); // Processa o registro

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login'); // Formulário de login
Route::post('/login', [AuthController::class, 'login'])->name('login.store'); // Processa o login

Route::post('/logout', [AuthController::class, 'logout'])->name('logout'); // Rota para logout


// Defina a rota para a página exclusiva do profissional
Route::get('/exclusivo-profissional', [ProfissionalController::class, 'exclusivo'])->name('exclusivo_profissional')->middleware('auth', 'profissional');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';