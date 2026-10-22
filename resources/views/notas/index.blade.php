<x-layout>

    <div class="notes-page">

        <div class="notes-container">

            <div class="notes-heading">
                <div>
                    <span class="section-label">ORGANIZAÇÃO</span>
                    <h1>Minhas <span>notas.</span></h1>
                    <p>Suas ideias, sempre em um só lugar.</p>
                </div>

                <button onclick="window.location.href='/notas/create'" type="button" class="add-note-btn"
                    onclick="openNoteForm()">
                    <span>+</span> Nova nota
                </button>
            </div>

            {{-- Lista de notas --}}
            <section class="notes-table-card">
                <div class="table-top">
                    <div>
                        <h2>Suas notas</h2>
                        <p id="notesCount">{{ $notas->count() }} notas cadastradas</p>
                    </div>

                    <span class="notes-indicator">
                        <span></span> Suas anotações
                    </span>
                </div>
                <div class="table-responsive">
                    <div class="notes-grid">
                        @forelse ($notas as $nota)
                            <article onclick="window.location.href=`/notas/{{ $nota['id'] }}/edit`" class="note-card">

                                <div class="note-card-header">
                                    <h3 class="note-card-title">
                                        {{ $nota['titulo'] }}
                                    </h3>

                                    <form action="{{ route('notas.destroy', $nota['id']) }}" method="POST"
                                        onsubmit="return confirm('Tem certeza que deseja excluir esta nota?')">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="delete-note-btn"
                                            aria-label="Excluir nota {{ $nota['titulo'] }}" title="Excluir nota">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M3 6h18" />
                                                <path d="M8 6V4h8v2" />
                                                <path d="m19 6-1 14H6L5 6" />
                                                <path d="M10 11v5" />
                                                <path d="M14 11v5" />
                                            </svg>
                                        </button>
                                    </form>
                                </div>

                                <p class="note-card-content">
                                    {{ $nota['conteudo'] }}
                                </p>

                                <div class="note-card-footer">
                                    <span>
                                        {{ $nota['created_at']->format('d/m/Y') }}
                                    </span>
                                    <span class="note-status-dot"></span>
                                </div>

                            </article>
                        @empty
                            <div class="notes-empty">
                                <div class="empty-icon">+</div>
                                <h3>Nenhuma nota por aqui</h3>
                                <p>Crie sua primeira nota e organize suas ideias.</p>

                                <button type="button" class="add-note-btn" onclick="openNoteForm()">
                                    + Criar primeira nota
                                </button>
                            </div>
                        @endforelse
                    </div>
                </div>

                @if($notas->count() <= 0)
                    <div class="table-footer" id="tableFooter">
                        <span id="footerCount">{{ $notas->count() }} notas</span>
                        <button onclick="window.location.href='/notas/create'" type="button" class="add-note-btn"
                            onclick="openNoteForm()">
                            + Adicionar nota
                        </button>
                    </div>
                    <div class="empty-state" id="emptyState">
                        <div class="empty-icon">+</div>
                        <h3>Nenhuma nota por aqui</h3>
                        <p>Comece organizando suas ideias com sua primeira nota.</p>
                        <button onclick="window.location.href='/notas/create'" type="button" class="add-note-btn">
                            + Adicionar primeira nota
                        </button>
                    </div>
                @endif

                {{-- Botão no final da tabela --}}
                <div class="table-footer" id="tableFooter" hidden>
                    <span id="footerCount">0 notas</span>
                    <button onclick="window.location.href='/notas/create'" type="button" class="add-note-btn"
                        onclick="openNoteForm()">
                        + Adicionar nota
                    </button>
                </div>
            </section>

        </div>

    </div>
</x-layout>