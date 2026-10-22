<x-layout>

    @props(['nota'])
    <section class="note-form-card" id="noteForm">
        <form method="POST" action="/notas" id="createNoteForm">
            @csrf
            <div class="form-heading">
                <h2>Nova nota</h2>
            </div>

            <label for="noteTitle">Título</label>
            <input name="titulo" value="{{ $nota['titulo'] ?? '' }}" type="text" id="noteTitle" placeholder="Ex.: Ideias para o projeto" maxlength="120" required>

            <label for="noteContent">Conteúdo</label>
            <textarea name="conteudo" value="{{ $nota['conteudo'] ?? '' }}" id="noteContent" placeholder="Escreva sua nota aqui..." rows="5" required></textarea>

            <div class="form-actions">
                <button onclick="window.location.href='/'" type="button" class="cancel-btn" onclick="closeNoteForm()">
                    Cancelar
                </button>
                <button type="submit" class="save-note-btn">
                    Salvar nota
                </button>
            </div>
        </form>
    </section>
    <style>
        /* Formulário */
        .note-form-card {
            margin-bottom: 28px;
            padding: 28px;
            background: #121712;
            border: 1px solid #293329;
            border-radius: 12px;
        }

        .note-form-card[hidden],
        .empty-state[hidden],
        .table-footer[hidden] {
            display: none !important;
        }

        .form-heading {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 24px;
        }

        .form-heading h2 {
            margin: 0;
            font-size: 20px;
        }

        .close-form {
            border: none;
            background: none;
            color: #aab2aa;
            font-size: 28px;
            cursor: pointer;
        }

        .note-form-card label {
            display: block;
            margin: 18px 0 8px;
            color: #dce3dc;
            font-size: 13px;
            font-weight: 600;
        }

        .note-form-card input,
        .note-form-card textarea {
            width: 100%;
            box-sizing: border-box;
            padding: 13px 14px;
            background: #090c09;
            color: #f4f7f4;
            border: 1px solid #303a30;
            border-radius: 7px;
            font: inherit;
            font-size: 14px;
            outline: none;
        }

        .note-form-card textarea {
            resize: vertical;
        }

        .note-form-card input:focus,
        .note-form-card textarea:focus {
            border-color: #39e75f;
        }

        .note-form-card input::placeholder,
        .note-form-card textarea::placeholder {
            color: #687168;
        }

        .form-actions {
            display: flex;
            justify-content: flex-end;
            gap: 12px;
            margin-top: 22px;
        }

        .cancel-btn {
            border: 1px solid #343d34;
            border-radius: 7px;
            background: transparent;
            color: #c4ccc4;
            padding: 12px 18px;
            cursor: pointer;
        }
    </style>
</x-layout>