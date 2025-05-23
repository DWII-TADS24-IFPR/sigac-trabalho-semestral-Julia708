@extends('layouts.app')

@section('content')

    <form action="{{ route('turmas.show', $turma->id) }}" method="POST">

        <div class="container mt-4">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h4>Detalhes de {{ $turma->id }}</h4>
                </div>
                <div class="card-body">
                    <p><strong>nome:</strong> {{ $turma->ano }}</p>
                    <p><strong>id da turma:</strong> {{ $turma->curso_id }}</p>
                </div>
            <a class="btn btn-warning" href="{{ route('turmas.edit', $turma->id) }}">Editar</a>
            </div>
             
            <div class="card-footer">
                <a href="{{ route('turmas.index') }}" class="btn btn-secondary">Voltar</a>

            </div>
        </div>
@endsection

</form>