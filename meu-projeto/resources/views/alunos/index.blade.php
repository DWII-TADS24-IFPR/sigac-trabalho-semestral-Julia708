@extends('layouts.app')

@section('content')

  <h2>Lista de Alunos</h2>

  <table class="table table-bordered text-center align-middle">
    <thead>
    <tr>
      <th>Id</th>
      <th>Nome</th>
      <th>Curso</th>

      @if(auth()->user()->role->id === 1)
      <th>Ação</th>
    @endif

    </tr>
    </thead>

    <thead>
    <tr>
    <tbody>
    @foreach($alunos as $aluno)
      <td>{{ $aluno->user_id }}</td>
      <td>{{ $aluno->user->nome }}</td>
      <td>{{ $aluno->curso->nome }}</td>


      @if(auth()->user()->role->id === 1)
      <td>
      <a class="btn btn-info" href="{{ route('alunos.show', $aluno->user_id) }}">Mais informações</a>
      </td>
      @endif

    @endforeach
    </tr>

    </tbody>
  </table>

  @if(auth()->user()->role->nome === 'admin')
    <a href="{{ route('alunos.create') }}" class="btn btn-primary mb-3">Cadastrar Novo Aluno</a>
  @endif

@endsection