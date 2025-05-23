@extends('layouts.app')

@section('content')

    <form action="{{ route('categorias.show', $categoria->id) }}" method="POST">

        <div class="container mt-4">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h4>Detalhes de {{ $categoria->nome }}</h4>
                </div>
                <div class="card-body">
                    <p><strong>Horas:</strong> {{ $categoria->max_horas }}</p>
                    <p><strong>Curso:</strong> {{ $categoria->curso_id }}</p>
                </div>
            <a class="btn btn-warning" href="{{ route('categorias.edit', $categoria->id) }}">Editar</a>
            </div>
            
            <div class="card-footer">
                <a href="{{ route('categorias.index') }}" class="btn btn-secondary">Voltar</a>

            </div>
        </div>
@endsection

</form>