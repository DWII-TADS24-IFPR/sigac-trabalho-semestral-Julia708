@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2>Editar Curso</h2>
 
    <form action="{{ route('cursos.update', $curso->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nome" class="form-label">nome:</label>
            <input type="text" name="nome" id="nome" class="form-control" value="{{ $curso->nome }}" required>
        </div>

        <div class="mb-3">
            <label for="sigla" class="form-label">sigla:</label>
            <input type="text" name="sigla" id="sigla" class="form-control" value="{{ $curso->sigla }}" required>
        </div>

        <div class="mb-3">
            <label for="total_horas" class="form-label">horas totais:</label>
            <input type="text" name="total_horas" id="total_horas" class="form-control" value="{{ $curso->total_horas }}" required>
        </div>

        <div class="mb-3">
            <label for="nivel_id" class="form-label">Id do nivel:</label>
            <input type="number" name="nivel_id" id="nivel_id" class="form-control" value="{{ $curso->nivel_id }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Atualizar</button>
        <a href="{{ route('cursos.show', $curso->id) }}" class="btn btn-secondary">Cancelar</a>
        <form action="{{ route('cursos.destroy', $curso->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class='btn btn-danger'>Excluir</button>
    </form>
</div>
@endsection
