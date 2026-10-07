<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Minhas tarefas</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <div class="container">

        <h1>Minhas tarefas</h1>

        <form method="POST" action="{{ route('tarefas.store') }}" class="add-form">

            @csrf

            <input type="text" name="titulo" placeholder="Nova tarefa">

            <button type="submit">
                Adicionar
            </button>

        </form>

        <ul>
            @foreach ($tarefas as $tarefa)

                <li>

                    @if ($tarefa->concluida)

                        <s>{{ $tarefa->titulo }}</s>

                    @else

                        {{ $tarefa->titulo }}

                        <form method="POST" action="{{ route('tarefas.concluir', $tarefa) }}">
                            @csrf
                            @method('PATCH')

                            <button type="submit">
                                Concluir
                            </button>
                        </form>

                    @endif

                    <form method="POST" action="{{ route('tarefas.destroy', $tarefa) }}">
                        @csrf
                        @method('DELETE')

                        <button type="submit">
                            Excluir
                        </button>
                    </form>

                </li>

            @endforeach
        </ul>

    </div>

</body>

</html>