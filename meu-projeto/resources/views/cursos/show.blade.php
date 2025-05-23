@extends('layouts.app')

@section('content')

    <form action="{{ route('cursos.show', $curso->id) }}" method="POST">

        <div class="container mt-4">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h4>Detalhes de {{ $curso->nome }}</h4>
                </div>
                <div class="card-body">
                    <p><strong>Sigla:</strong> {{ $curso->sigla }}</p>
                    <p><strong>Total de horas:</strong> {{ $curso->total_horas }}</p>
                    <p><strong>Id do nivel:</strong> {{ $curso->nivel_id }}</p>
                </div>
            <a class="btn btn-warning" href="{{ route('cursos.edit', $curso->id) }}">Editar</a>
            </div>
             
            <div class="card-footer">
                <a href="{{ route('cursos.index') }}" class="btn btn-secondary">Voltar</a>

            </div>
        </div>
@endsection

</form>