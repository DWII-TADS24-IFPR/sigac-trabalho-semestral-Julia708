@extends('layouts.app')

@section('content')

<h2>Lista de turmas</h2>

<table class="table table-bordered text-center align-middle">
  <thead>
    <tr>
      <th>Id</th>
      <th>ano</th>
      <th>Ação</th>
    </tr>
  </thead>

    <thead>
        <tr>  
    <tbody>
        @foreach($turmas as $turma)
            <td>{{ $turma->id }}</td>
            <td>{{ $turma->ano }}</td>

                <td>
                    <a class="btn btn-info" href="{{ route('turmas.show', $turma->id) }}">Mais informações</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<a class="btn btn-primary" href="{{ route('turmas.create') }}">Cadastrar Novo turma</a>

@endsection
