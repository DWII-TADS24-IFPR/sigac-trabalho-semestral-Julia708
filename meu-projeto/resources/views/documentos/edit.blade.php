@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <h2>Editar documento</h2>
 
    <form action="{{ route('documentos.update', $documento->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
                <label for="url" class="form-label">url:</label>
                <input type="text" name="url" id="url" class="form-control" placeholder="Digite a url" value="{{ $documento->url }}" required>
            </div>

            <div class="mb-3">
                <label for="descricao" class="form-label">descricao:</label>
                <input type="text" name="descricao" id="descricao" class="form-control" placeholder="Digite a descricao" value="{{ $documento->descricao }}"required>
            </div>

            <div class="mb-3">
                <label for="horas_in" class="form-label">Horas in:</label>
                <input type="text" name="horas_in" id="horas_in" class="form-control" placeholder="Digite o de horas in" value="{{ $documento->horas_in }}" required>
            </div>

            <div class="mb-3">
                <label for="status" class="form-label">status:</label>
                <input type="text" name="status" id="status" class="form-control" placeholder="Digite o status" value="{{ $documento->status }}" required>
            </div>

            <div class="mb-3">
                <label for="comentario" class="form-label">comentario:</label>
                <input type="text" name="comentario" id="comentario" class="form-control" placeholder="Digite o comentario" value="{{ $documento->comentario }}" required>
            </div>

            <div class="mb-3">
                <label for="horas_out" class="form-label">Horas out:</label>
                <input type="text" name="horas_out" id="horas_out" class="form-control" placeholder="Digite o de horas out" value="{{ $documento->horas_out }}" required>
            </div>

            <div class="mb-3">
                <label for="categoria_id" class="form-label">categoria_id:</label>
                <input type="text" name="categoria_id" id="categoria_id" class="form-control" placeholder="Digite o categoria_id" value="{{ $documento->categoria_id }}" required>
            </div>

        <button type="submit" class="btn btn-primary">Atualizar</button>
        <a href="{{ route('documentos.show', $documento->id) }}" class="btn btn-secondary">Cancelar</a>
        <form action="{{ route('documentos.destroy', $documento->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class='btn btn-danger'>Excluir</button>
    </form>
</div>
@endsection
