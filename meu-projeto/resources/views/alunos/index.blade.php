@extends('layouts.app')

@section('content')

<h2>Lista de Alunos</h2>

<table class="table table-bordered text-center align-middle">
  <thead>
    <tr>
      <th>Id</th>
      <th>Nome</th>
      <th>Ação</th>
    </tr>
  </thead>

    <thead>
        <tr>  
    <tbody>
        @foreach($alunos as $aluno)
            <td>{{ $aluno->id }}</td>
            <td>{{ $aluno->nome }}</td>

                <td>
                    <a class="btn btn-info" href="{{ route('alunos.show', $aluno->id) }}">Mais informações</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<a class="btn btn-primary" href="{{ route('alunos.create') }}">Cadastrar Novo Aluno</a>

@endsection
