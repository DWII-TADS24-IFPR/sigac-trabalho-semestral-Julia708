@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2>Editar Comprovante</h2>
 
    <form action="{{ route('comprovantes.update', $comprovante->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="atividade" class="form-label">Atividade:</label>
            <input type="text" name="atividade" id="atividade" class="form-control" value="{{ $comprovante->atividade }}" required>
        </div>

        <div class="mb-3">
            <label for="horas" class="form-label">Horas:</label>
            <input type="text" name="horas" id="horas" class="form-control" value="{{ $comprovante->horas }}" required>
        </div>

        <div class="mb-3">
            <label for="categoria_id" class="form-label">Id da Categoria:</label>
            <input type="number" name="categoria_id" id="categoria_id" class="form-control" value="{{ $comprovante->categoria_id }}" required>
        </div>

        <div class="mb-3">
            <label for="aluno_id" class="form-label">Id do Aluno:</label>
            <input type="number" name="aluno_id" id="aluno_id" class="form-control" value="{{ $comprovante->aluno_id }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Atualizar</button>
        <a href="{{ route('comprovantes.show', $comprovante->id) }}" class="btn btn-secondary">Cancelar</a>
        <form action="{{ route('comprovantes.destroy', $comprovante->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class='btn btn-danger'>Excluir</button>
    </form>
</div>
@endsection
