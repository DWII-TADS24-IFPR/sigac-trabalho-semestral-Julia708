@extends('layouts.app')

@section('content')

    <form action="{{ route('alunos.show', $aluno->id) }}" method="POST">

        <div class="container mt-4">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h4>Detalhes de {{ $aluno->nome }}</h4>
                </div>
                <div class="card-body">
                    <p><strong>CPF:</strong> {{ $aluno->cpf }}</p>
                    <p><strong>Email:</strong> {{ $aluno->email }}</p>
                    <p><strong>Curso:</strong> {{ $aluno->curso->nome }}</p>
                    <p><strong>Turma:</strong> {{ $aluno->turma->ano }}</p>
                </div>
            <a class="btn btn-warning" href="{{ route('alunos.edit', $aluno->id) }}">Editar</a>
            </div>
            <h3 class="mt-4">Comprovantes</h3>
            @if($aluno->comprovantes->count())
                <ul class="list-group mb-4">
                    @foreach ($aluno->comprovantes as $comprovante)
                        <li class="list-group-item">
                            {{ $comprovante->atividade }} ({{ $comprovante->horas }}h)
                        </li>
                    @endforeach
                </ul>
            @else
                <p>Sem comprovantes cadastrados.</p>
            @endif
            <div class="card-footer">
                <a href="{{ route('alunos.index') }}" class="btn btn-secondary">Voltar</a>

            </div>
        </div>
@endsection

</form>