@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h2>Editar turma</h2>

        <form action="{{ route('turmas.update', $turma->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="ano" class="form-label">ano:</label>
                <input type="text" name="ano" id="ano" class="form-control" placeholder="Digite a ano"
                    value="{{ $turma->ano }}" required>
            </div>

            <div class="mb-3">
                <label for="curso_id" class="form-label">curso_id:</label>
                <input type="number" name="curso_id" id="curso_id" class="form-control" placeholder="Digite a curso_id"
                    value="{{ $turma->curso_id }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Atualizar</button>
            <a href="{{ route('turmas.show', $turma->id) }}" class="btn btn-secondary">Cancelar</a>
            <form action="{{ route('turmas.destroy', $turma->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class='btn btn-danger'>Excluir</button>
            </form>
    </div>
@endsection