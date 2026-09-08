@extends('layouts.app')

@section('content')
<div class="auth-wrap"><div class="auth-card">
    <p class="eyebrow">TRANSPORTES SEMAR</p>
    <h1>Bienvenido de vuelta</h1>
    <p class="muted">Ingresa a tu cuenta para consultar tu operación.</p>
    @if ($errors->any()) <div class="alert">{{ $errors->first() }}</div> @endif
    <form method="POST" action="{{ route('login') }}" class="form-stack">
        @csrf
        <label>Correo electrónico<input name="email" type="email" value="{{ old('email') }}" required autofocus></label>
        <label>Contraseña<input name="password" type="password" required></label>
        <label class="check"><input type="checkbox" name="remember"> Recordarme</label>
        <button class="button full" type="submit">Iniciar sesión <span>→</span></button>
    </form>
    <p class="form-foot">¿Aún no tienes cuenta? <a href="{{ route('register') }}">Regístrate</a></p>
</div></div>
@endsection
