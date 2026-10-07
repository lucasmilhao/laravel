<?php

use App\Http\Controllers\TarefaController;
use Illuminate\Support\Facades\Route;

Route::get('/', [TarefaController::class, 'index'])->name('tarefas.index');

Route::post('/tarefas', [TarefaController::class, 'store'])->name('tarefas.store');

Route::patch('/tarefas/{tarefa}/concluir', [TarefaController::class, 'concluir'])->name('tarefas.concluir');

Route::delete('/tarefas/{tarefa}', [TarefaController::class, 'destroy'])->name('tarefas.destroy');

Route::get('/lucas', function () {
    return view('lucas');
});
