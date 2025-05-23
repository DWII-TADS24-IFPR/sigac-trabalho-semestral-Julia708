@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h2>Cadastrar Curso</h2>

        <form action="{{ route('cursos.store') }}" method="POST">
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
                <input type="text" name="nome" id="nome" class="form-control" placeholder="Digite a nome" required>
            </div>

            <div class="mb-3">
                <label for="sigla" class="form-label">Sigla:</label>
                <input type="text" name="sigla" id="sigla" class="form-control" placeholder="Digite a sigla" required>
            </div>

            <div class="mb-3">
                <label for="total_horas" class="form-label">Horas totais:</label>
                <input type="text" name="total_horas" id="total_horas" class="form-control" placeholder="Digite o totalde horas" required>
            </div>

            <div class="mb-3">
                <label for="nivel_id" class="form-label">Id do nivel:</label>
                <input type="number" name="nivel_id" id="nivel_id" class="form-control" placeholder="Digite o id do nivel" required>
            </div>

            <button type="submit" class="btn btn-success">Cadastrar</button>
            <a href="{{ route('cursos.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
@endsection