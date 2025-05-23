@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2>Editar Categoria</h2>
 
    <form action="{{ route('categorias.update', $categoria->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nome" class="form-label">Nome:</label>
            <input type="text" name="nome" id="nome" class="form-control" value="{{ $categoria->nome }}" required>
        </div>

        <div class="mb-3">
            <label for="max_horas" class="form-label">Maxímo de horas:</label>
            <input type="text" name="max_horas" id="max_horas" class="form-control" value="{{ $categoria->max_horas }}" required>
        </div>

        <div class="mb-3">
            <label for="curso_id" class="form-label">Id do curso:</label>
            <input type="number" name="curso_id" id="curso_id" class="form-control" value="{{ $categoria->curso_id }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Atualizar</button>
        <a href="{{ route('categorias.show', $categoria->id) }}" class="btn btn-secondary">Cancelar</a>
        <form action="{{ route('categorias.destroy', $categoria->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class='btn btn-danger'>Excluir</button>
    </form>
</div>
@endsection
