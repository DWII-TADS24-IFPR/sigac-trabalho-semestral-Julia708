@extends('layouts.app')

@section('content')

  <h2>Lista de turmas</h2>

  <table class="table table-bordered text-center align-middle">
    <thead>
    <tr>
      <th>Id</th>
      <th>ano</th>
      @if (auth()->user()->role->id === 1)
      <th>Ação</th>
    @endif
    </tr>
    </thead>

    <thead>
    <tr>
    <tbody>
    @foreach($turmas as $turma)
      <td>{{ $turma->id }}</td>
      <td>{{ $turma->ano }}</td>

      @if (auth()->user()->role->id === 1)
      <td>
      <a class="btn btn-info" href="{{ route('turmas.show', $turma->id) }}">Mais informações</a>
      </td>
      @endif

      </tr>
    @endforeach
    </tbody>
  </table>
  @if (auth()->user()->role->id === 1)
    <a class="btn btn-primary" href="{{ route('turmas.create') }}">Cadastrar Novo turma</a>
  @endif
@endsection