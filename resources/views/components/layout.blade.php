<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @vite(['resources/css/header.css', 'resources/js/app.js'])
    @vite(['resources/css/footer.css', 'resources/js/app.js'])
    @vite(['resources/css/notas.css', 'resources/js/app.js'])
</head>

<body>
    <header class="site-header">
        <div class="header-container">

            <a href="{{ url('/') }}" class="brand">
                <span class="brand-symbol">V</span>
                <span class="brand-name">verde<span>novo</span></span>
            </a>

            <nav class="main-nav">
                <a href="{{ url('/') }}">Início</a>
                <a href="{{ url('/sobre') }}">Sobre nós</a>
                <a href="{{ url('/produtos') }}">Produtos</a>
                <a href="{{ url('/contato') }}">Contato</a>
            </nav>

            <a href="{{ url('/contato') }}" class="header-cta">
                Fale conosco <span>↗</span>
            </a>

            <button class="menu-toggle" aria-label="Abrir menu" onclick="document.querySelector('.main-nav')
                .classList.toggle('active')">
                ☰
            </button>

        </div>
    </header>
    <main>
        {{ $slot }}
    </main>

    <footer class="site-footer">
        <div class="footer-container">

            <div class="footer-brand">
                <a href="{{ url('/') }}" class="brand">
                    <span class="brand-symbol">V</span>
                    <span class="brand-name">
                        verde<span>novo</span>
                    </span>
                </a>

                <p>
                    Novas ideias, novas possibilidades.<br>
                    Um futuro construído com propósito.
                </p>
            </div>

            <div class="footer-column">
                <h3>Navegação</h3>
                <a href="{{ url('/') }}">Início</a>
                <a href="{{ url('/sobre') }}">Sobre nós</a>
                <a href="{{ url('/produtos') }}">Produtos</a>
                <a href="{{ url('/contato') }}">Contato</a>
            </div>

            <div class="footer-column">
                <h3>Contato</h3>
                <a href="{{ url('/contato') }}">Entre em contato</a>
                <a href="mailto:contato@verdenovo.com.br">
                    contato@verdenovo.com.br
                </a>
            </div>

            <div class="footer-column footer-social">
                <h3>Redes sociais</h3>
                <a href="#" aria-label="Instagram">Instagram ↗</a>
                <a href="#" aria-label="LinkedIn">LinkedIn ↗</a>
            </div>

        </div>

        <div class="footer-bottom">
            <p>
                © {{ date('Y') }} Verde Novo.
                Todos os direitos reservados.
            </p>

            <span>Feito para evoluir. <strong>●</strong></span>
        </div>
    </footer>
</body>

</html>