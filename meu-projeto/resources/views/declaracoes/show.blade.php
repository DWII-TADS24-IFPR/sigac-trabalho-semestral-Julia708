@extends('layouts.app')

@section('content')

    <form action="{{ route('declaracoes.show', $declaracao->id) }}" method="POST">

        <div class="container mt-4">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h4>Detalhes de {{ $declaracao->hash }}</h4>
                </div>
                <div class="card-body">
                    <p><strong>data:</strong> {{ $declaracao->data }}</p>
                    <p><strong>aluno:</strong> {{ $declaracao->aluno_id }}</p>
                    <p><strong>comprovante:</strong> {{ $declaracao->comprovante_id }}</p>
                </div>
            <a class="btn btn-warning" href="{{ route('declaracoes.edit', $declaracao->id) }}">Editar</a>
            </div>
             
            <div class="card-footer">
                <a href="{{ route('declaracoes.index') }}" class="btn btn-secondary">Voltar</a>

            </div>
        </div>
@endsection

</form>