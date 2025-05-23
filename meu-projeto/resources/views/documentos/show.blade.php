@extends('layouts.app')

@section('content')

    <form action="{{ route('documentos.show', $documento->id) }}" method="POST">

        <div class="container mt-4">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h4>Detalhes de {{ $documento->url }}</h4>
                </div>
                <div class="card-body">
                    <p><strong>descricao:</strong> {{ $documento->descricao }}</p>
                    <p><strong>horas in:</strong> {{ $documento->horas_in }}</p>
                    <p><strong>status:</strong> {{ $documento->status }}</p>
                    <p><strong>comentario:</strong> {{ $documento->comentario }}</p>
                    <p><strong>horas out:</strong> {{ $documento->horas_out }}</p>
                    <p><strong>Id do categoria:</strong> {{ $documento->categoria_id }}</p>
                </div>
            <a class="btn btn-warning" href="{{ route('documentos.edit', $documento->id) }}">Editar</a>
            </div>
             
            <div class="card-footer">
                <a href="{{ route('documentos.index') }}" class="btn btn-secondary">Voltar</a>

            </div>
        </div>
@endsection

</form>