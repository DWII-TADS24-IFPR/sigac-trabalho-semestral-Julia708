@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h2>Cadastrar Categoria</h2>

        <form action="{{ route('categorias.store') }}" method="POST">
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
                <label for="nome" class="form-label">Nome:</label>
                <input type="text" name="nome" id="nome" class="form-control" placeholder="Digite seu nome" required>
            </div>

            <div class="mb-3">
                <label for="max_horas" class="form-label">Maxímo de horas:</label>
                <input type="text" name="max_horas" id="max_horas" class="form-control" placeholder="Digite o maxímo de horas" required>
            </div>

            <div class="mb-3">
                <label for="curso_id" class="form-label">Id do curso:</label>
                <input type="number" name="curso_id" id="curso_id" class="form-control" placeholder="Digite o id do curso" required>
            </div>

            <button type="submit" class="btn btn-success">Cadastrar</button>
            <a href="{{ route('categorias.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
@endsection