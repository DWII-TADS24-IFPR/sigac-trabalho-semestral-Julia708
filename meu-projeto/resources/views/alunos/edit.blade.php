@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h2>Editar Aluno</h2>

        <form action="{{ route('alunos.update', $aluno->user_id) }}" method="POST">
            @csrf
            @method('PUT')

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
                <input type="text" name="nome" id="nome" class="form-control" value="{{ $aluno->user->nome }}" required>
            </div>

            <div class="mb-3">
                <label for="cpf" class="form-label">CPF:</label>
                <input type="text" name="cpf" id="cpf" class="form-control" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}"
                    value="{{ $aluno->cpf }}" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">E-mail:</label>
                <input type="email" name="email" id="email" class="form-control" value="{{ $aluno->user->email }}" required>
            </div>

            <div class="mb-3">
                <label for="curso_id" class="form-label">Curso:</label>
                <select name="curso_id" id="curso_id" class="form-select" required>
                    @foreach ($cursos as $curso)
                        <option value="{{ $curso->id }}" {{ $curso->id == $aluno->curso_id ? 'selected' : '' }}>
                            {{ $curso->nome }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="turma_id" class="form-label">Turma:</label>
                <select name="turma_id" id="turma_id" class="form-select" required>
                    @foreach ($turmas as $turma)
                        <option value="{{ $turma->id }}" {{ $turma->id == $aluno->turma_id ? 'selected' : '' }}>
                            {{ $turma->ano }}
                        </option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Atualizar</button>

            <a href="{{ route('alunos.show', $aluno->user_id) }}" class="btn btn-secondary">Cancelar</a>

        </form>

    </div>
@endsection