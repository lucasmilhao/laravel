<?php

use App\Http\Controllers\NotaController;
use App\Http\Controllers\TarefaController;
use Illuminate\Support\Facades\Route;

Route::get('/', [NotaController::class, 'index']);

Route::view('/notas/create', 'notas.create')->name('notas.create');

Route::post('/notas', [NotaController::class, 'store'])->name('notas.store');

Route::post('/tarefas', [TarefaController::class, 'store'])->name('tarefas.store');

Route::delete('/notas/{nota}', [NotaController::class, 'destroy'])->name('notas.destroy');

Route::get('/notas/{nota}/edit', [NotaController::class, 'edit'])->name('notas.edit');

Route::patch('/tarefas/{tarefa}/concluir', [TarefaController::class, 'concluir'])->name('tarefas.concluir');

Route::delete('/tarefas/{tarefa}', [TarefaController::class, 'destroy'])->name('tarefas.destroy');