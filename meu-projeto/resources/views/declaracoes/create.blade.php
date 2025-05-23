@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h2>Cadastrar Declaração</h2>

        <form action="{{ route('declaracoes.store') }}" method="POST">
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
                <label for="hash" class="form-label">Hash:</label>
                <input type="text" name="hash" id="hash" class="form-control" placeholder="Digite a hash" required>
            </div>

            <div class="mb-3">
                <label for="data" class="form-label">data:</label>
                <input type="date" name="data" id="data" class="form-control" placeholder="Digite a data" required>
            </div>

            <div class="mb-3">
                <label for="aluno_id" class="form-label">Id do aluno:</label>
                <input type="number" name="aluno_id" id="aluno_id" class="form-control" placeholder="Digite o id do aluno" required>
            </div>

            <div class="mb-3">
                <label for="comprovante_id" class="form-label">Id do comprovante:</label>
                <input type="number" name="comprovante_id" id="comprovante_id" class="form-control" placeholder="Digite o id do comprovante" required>
            </div>

            <button type="submit" class="btn btn-success">Cadastrar</button>
            <a href="{{ route('declaracoes.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
@endsection