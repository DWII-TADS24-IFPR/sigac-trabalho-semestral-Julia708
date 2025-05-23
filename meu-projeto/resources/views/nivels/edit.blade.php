@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h2>Editar nivel</h2>

        <form action="{{ route('nivels.update', $nivel->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="nome" class="form-label">nome:</label>
                <input type="text" name="nome" id="nome" class="form-control" placeholder="Digite a nome"
                    value="{{ $nivel->nome }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Atualizar</button>
            <a href="{{ route('nivels.show', $nivel->id) }}" class="btn btn-secondary">Cancelar</a>
            <form action="{{ route('nivels.destroy', $nivel->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class='btn btn-danger'>Excluir</button>
            </form>
    </div>
@endsection