@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h2>Cadastrar documento</h2>

        <form action="{{ route('documentos.store') }}" method="POST">
            @csrf

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="mb-3">
                <label for="url" class="form-label">url:</label>
                <input type="text" name="url" id="url" class="form-control" placeholder="Digite a url" required>
            </div>

            <div class="mb-3">
                <label for="descricao" class="form-label">descricao:</label>
                <input type="text" name="descricao" id="descricao" class="form-control" placeholder="Digite a descricao" required>
            </div>

            <div class="mb-3">
                <label for="horas_in" class="form-label">Horas in:</label>
                <input type="text" name="horas_in" id="horas_in" class="form-control" placeholder="Digite o de horas in" required>
            </div>

            <div class="mb-3">
                <label for="status" class="form-label">status:</label>
                <input type="text" name="status" id="status" class="form-control" placeholder="Digite o status" required>
            </div>

            <div class="mb-3">
                <label for="comentario" class="form-label">comentario:</label>
                <input type="text" name="comentario" id="comentario" class="form-control" placeholder="Digite o comentario" required>
            </div>

            <div class="mb-3">
                <label for="horas_out" class="form-label">Horas out:</label>
                <input type="text" name="horas_out" id="horas_out" class="form-control" placeholder="Digite o de horas out" required>
            </div>

            <div class="mb-3">
                <label for="categoria_id" class="form-label">categoria_id:</label>
                <input type="text" name="categoria_id" id="categoria_id" class="form-control" placeholder="Digite o categoria_id" required>
            </div>

            <button type="submit" class="btn btn-success">Cadastrar</button>
            <a href="{{ route('documentos.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
@endsection