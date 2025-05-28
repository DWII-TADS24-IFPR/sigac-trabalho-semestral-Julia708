@extends('layouts.app')

@section('content')

  <h2>Lista de Alunos</h2>

  <table class="table table-bordered text-center align-middle">
    <thead>
    <tr>
      <th>Id</th>
      <th>Nome</th>
      <th>Curso</th>
      <th>Ação</th>
    </tr>
    </thead>

    <thead>
    <tbody>
    <tr>
      @foreach($alunos as $aluno)
      <td>{{ $aluno->user_id }}</td>
      <td>{{ $aluno->user->nome }}</td>
      <td>{{ $aluno->curso->nome ?? '-' }}</td>


      @if(auth()->user()->role->id === 1)
      <td>
      <a class="btn btn-info" href="{{ route('alunos.show', $aluno->user_id) }}">Mais informações</a>
      </td>
    @elseif(auth()->id() === $aluno->user_id)
      <td>
      <a class="btn btn-info" href="{{ route('alunos.show', $aluno->user_id) }}">Seus dados</a>
      </td>
    @else
      <td></td>
    @endif


    </tr>
    @endforeach
    </tbody>
  </table>


@endsection