@extends('layouts.app')

@section('content')
<div class="home-content">
<section class="hero">
    <div class="hero-copy">
        <p class="eyebrow">LOGÍSTICA QUE AVANZA CONTIGO</p>
        <h1>Tu carga,<br><span>nuestro rumbo.</span></h1>
        <p class="lead">Soluciones de transporte confiables para que tus productos lleguen seguros, a tiempo y a cualquier destino.</p>
        @auth
            <a class="button" href="{{ route('dashboard') }}">Entrar a mi panel <span>→</span></a>
        @else
            <a class="button" href="{{ route('register') }}">Comienza ahora <span>→</span></a>
        @endauth
    </div>
    <div class="hero-art" aria-hidden="true">
        <div class="sun"></div><div class="cloud cloud-one"></div><div class="cloud cloud-two"></div>
        <div class="road"><span></span><span></span></div>
        <svg class="truck-svg" viewBox="0 0 430 230" role="img">
            <path d="M32 55h246v111H32z" fill="#102c3b"/><path d="M278 91h62l57 55v20H278z" fill="#ee7c35"/>
            <path d="M299 103h36l31 31h-67z" fill="#d7e8e5"/><path d="M46 72h218v13H46z" fill="#ee7c35"/>
            <path d="M45 96h139v12H45zM45 119h100v12H45z" fill="#d7e8e5"/>
            <circle cx="104" cy="174" r="27" fill="#111827"/><circle cx="104" cy="174" r="11" fill="#f7bd5a"/>
            <circle cx="334" cy="174" r="27" fill="#111827"/><circle cx="334" cy="174" r="11" fill="#f7bd5a"/>
        </svg>
    </div>
</section>
<section class="service-grid">
    <article><span class="service-icon">↗</span><h2>Entrega puntual</h2><p>Planeamos cada ruta para cumplir tus tiempos.</p></article>
    <article><span class="service-icon">◇</span><h2>Operación segura</h2><p>Cuidamos tu mercancía durante todo el trayecto.</p></article>
    <article><span class="service-icon">◎</span><h2>Seguimiento cercano</h2><p>Información clara para que siempre estés al tanto.</p></article>
</section>
</div>
@endsection
