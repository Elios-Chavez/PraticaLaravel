<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Transportes Semar' }}</title>
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>
<body>
    <header class="navbar">
        <div class="navbar-bar">
            <a class="navbar-brand" href="{{ route('home') }}" aria-label="Transportes Semar, inicio">
                <svg class="brand-logo" viewBox="0 0 48 48" role="img" aria-hidden="true">
                    <path d="M6 34.5 13 10h7l-2 7h18l-2 7H16l-2 10.5H6Z" fill="currentColor"/>
                    <path d="M25 17h12l5 6-3 11.5H23L25 17Z" fill="#ee7c35"/>
                    <circle cx="29" cy="35.5" r="3.5" fill="#f9fafb"/><circle cx="38" cy="35.5" r="3.5" fill="#f9fafb"/>
                </svg>
                <span>Transportes <strong>Semar</strong></span>
            </a>
            <button class="navbar-toggle" type="button" aria-label="Abrir menú" aria-expanded="false" data-menu-toggle>
                <span></span><span></span><span></span>
            </button>
        </div>
        <div class="navbar-menu" data-menu>
            <nav class="navbar-left" aria-label="Navegación principal">
                @if (request()->routeIs('login', 'register'))
                    <a class="navbar-link" href="{{ route('home') }}">Inicio</a>
                @endif
                @auth <a class="navbar-link {{ request()->routeIs('dashboard') ? 'is-active' : '' }}" href="{{ route('dashboard') }}">Mi panel</a> @endauth
            </nav>
            <div class="navbar-session">
                @auth
                    <div class="session-user"><strong>{{ auth()->user()->name }}</strong><span>{{ auth()->user()->email }}</span></div>
                    <form method="POST" action="{{ route('logout') }}">@csrf<button class="btn-logout" type="submit">Cerrar sesión</button></form>
                @else
                    <a class="navbar-link" href="{{ route('login') }}">Iniciar sesión</a>
                    <a class="btn-register" href="{{ route('register') }}">Crear cuenta</a>
                @endauth
            </div>
        </div>
    </header>
    <main><div class="page-shell">@yield('content')</div></main>
    <footer class="footer"><p>© {{ date('Y') }} Transportes Semar · Movemos lo que importa</p></footer>
</body>
</html>
