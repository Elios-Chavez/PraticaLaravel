@extends('layouts.app')

@section('content')
<div class="auth-wrap"><div class="auth-card">
    <p class="eyebrow">ÚNETE A SEMAR</p>
    <h1>Crea tu cuenta</h1>
    <p class="muted">Administra tus envíos desde un solo lugar.</p>
    @if ($errors->any()) <div class="alert"><ul>@foreach ($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul></div> @endif
    <form method="POST" action="{{ route('register') }}" class="form-stack">
        @csrf
        <label>Nombre completo<input name="name" value="{{ old('name') }}" required autofocus></label>
        <label>Correo electrónico<input name="email" type="email" value="{{ old('email') }}" required></label>
        <label>Contraseña<input name="password" type="password" required></label>
        <label>Confirmar contraseña<input name="password_confirmation" type="password" required></label>
        <button class="button full" type="submit">Crear cuenta <span>→</span></button>
    </form>
    <p class="form-foot">¿Ya tienes una cuenta? <a href="{{ route('login') }}">Inicia sesión</a></p>
</div></div>
@endsection
