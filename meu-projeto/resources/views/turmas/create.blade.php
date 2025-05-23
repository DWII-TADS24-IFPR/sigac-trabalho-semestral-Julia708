@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h2>Cadastrar turma</h2>

        <form action="{{ route('turmas.store') }}" method="POST">
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
                <label for="ano" class="form-label">ano:</label>
                <input type="text" name="ano" id="ano" class="form-control" placeholder="Digite a ano" required>
            </div>

            <div class="mb-3">
                <label for="curso_id" class="form-label">curso_id:</label>
                <input type="number" name="curso_id" id="curso_id" class="form-control" placeholder="Digite a curso_id" required>
            </div>

            <button type="submit" class="btn btn-success">Cadastrar</button>
            <a href="{{ route('turmas.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
@endsection