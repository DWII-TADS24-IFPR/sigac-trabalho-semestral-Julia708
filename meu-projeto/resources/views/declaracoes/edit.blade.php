@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2>Editar Declaração</h2>
 
    <form action="{{ route('declaracoes.update', $declaracao->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="hash" class="form-label">hash:</label>
            <input type="text" name="hash" id="hash" class="form-control" value="{{ $declaracao->hash }}" required>
        </div>

        <div class="mb-3">
            <label for="data" class="form-label">data:</label>
            <input type="date" name="data" id="data" class="form-control" value="{{ $declaracao->data }}" required>
        </div>

        <div class="mb-3">
            <label for="aluno_id" class="form-label">Id do aluno:</label>
            <input type="number" name="aluno_id" id="aluno_id" class="form-control" value="{{ $declaracao->aluno_id }}" required>
        </div>

        <div class="mb-3">
            <label for="comprovante_id" class="form-label">Id do comprovante:</label>
            <input type="number" name="comprovante_id" id="comprovante_id" class="form-control" value="{{ $declaracao->comprovante_id }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Atualizar</button>
        <a href="{{ route('declaracoes.show', $declaracao->id) }}" class="btn btn-secondary">Cancelar</a>
        <form action="{{ route('declaracoes.destroy', $declaracao->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class='btn btn-danger'>Excluir</button>
    </form>
</div>
@endsection
