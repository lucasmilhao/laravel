<?php

namespace App\Http\Controllers;

use App\Models\Tarefa;
use Illuminate\Http\Request;

class TarefaController extends Controller
{
    public function index() {
        $tarefas = Tarefa::all();

        return view('tarefas.index', [
            'tarefas' => $tarefas
        ]);
    }

    public function store(Request $request) {
        $request->validate([
            'titulo' => 'required|string|max:255'
        ]);

        Tarefa::create([
            'titulo' => $request->titulo
        ]);


        return redirect()->route('tarefas.index');
    }

    public function concluir(Tarefa $tarefa) {
        $tarefa->update([
            'concluida' => true
        ]);

        return redirect()->route('tarefas.index');
    }

    public function destroy(Tarefa $tarefa) {
        $tarefa->delete();

        return redirect()->route('tarefas.index');
    }
}
