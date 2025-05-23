@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h2>Cadastrar Comprovante</h2>

        <form action="{{ route('comprovantes.store') }}" method="POST">
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
                <label for="atividade" class="form-label">Atividade:</label>
                <input type="text" name="atividade" id="atividade" class="form-control" placeholder="Digite a atividade" required>
            </div>

            <div class="mb-3">
                <label for="horas" class="form-label">Horas de atividade:</label>
                <input type="text" name="horas" id="horas" class="form-control" placeholder="Digite as Horas" required>
            </div>

            <div class="mb-3">
                <label for="categoria_id" class="form-label">Id da Categoria:</label>
                <input type="number" name="categoria_id" id="categoria_id" class="form-control" placeholder="Digite o id da categoria" required>
            </div>

            <div class="mb-3">
                <label for="aluno_id" class="form-label">Id do Aluno:</label>
                <input type="number" name="aluno_id" id="aluno_id" class="form-control" placeholder="Digite o id do aluno" required>
            </div>

            <button type="submit" class="btn btn-success">Cadastrar</button>
            <a href="{{ route('comprovantes.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
@endsection