@extends('layouts.app')

@section('content')
<div class="dashboard-content">
<section class="dashboard-head"><div><p class="eyebrow">PANEL DE CLIENTE</p><h1>Hola, {{ auth()->user()->name }}.</h1><p class="lead">Qué gusto tenerte de nuevo. Aquí podrás consultar el estado de tus operaciones.</p></div><span class="status-pill">● Cuenta activa</span></section>
<section class="dashboard-grid"><article class="dashboard-card highlight"><span class="card-label">OPERACIONES EN CURSO</span><strong>0</strong><p>No tienes envíos activos por ahora.</p><a href="{{ route('home') }}">Conocer nuestros servicios →</a></article><article class="dashboard-card"><span class="card-label">TU CUENTA</span><h2>{{ auth()->user()->email }}</h2><p>Sesión iniciada correctamente.</p><div class="secure">✓ Acceso protegido</div></article></section>
</div>
@endsection
