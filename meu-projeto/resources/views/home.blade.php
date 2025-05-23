@extends('layouts.app')

@section('title', 'SIGAC')

@section('content')
<div class="container text-center mt-5">
    <div class="p-5 bg-light rounded shadow">
        <h1 class="display-5">Olá! 👋</h1>
        <p class="lead mt-3">Bem-vinda ao <strong>Sistema de Atividades Complementares</strong>.</p>
        <p>Aqui você pode cadastrar seus comprovantes, visualizar horas, emitir declarações e muito mais.</p>

        <div class="mt-4">
            <a href="{{ route('alunos.index') }}" class="btn btn-primary btn-lg me-2">
                📚 Ver Alunos
            </a>
            <a href="{{ route('comprovantes.index') }}" class="btn btn-success btn-lg">
                ✅ Ver Comprovantes
            </a>
        </div>
    </div>
</div>
@endsection
