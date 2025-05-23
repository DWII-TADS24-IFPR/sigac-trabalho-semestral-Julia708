@extends('layouts.app')

@section('content')

    <form action="{{ route('comprovantes.show', $comprovante->id) }}" method="POST">

        <div class="container mt-4">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h4>Detalhes de {{ $comprovante->atividade }}</h4>
                </div>
                <div class="card-body">
                    <p><strong>Horas:</strong> {{ $comprovante->horas }}</p>
                    <p><strong>Categoria:</strong> {{ $comprovante->categoria_id }}</p>
                </div>
            <a class="btn btn-warning" href="{{ route('comprovantes.edit', $comprovante->id) }}">Editar</a>
            </div>
            
            <div class="card-footer">
                <a href="{{ route('comprovantes.index') }}" class="btn btn-secondary">Voltar</a>

            </div>
        </div>
@endsection

</form>