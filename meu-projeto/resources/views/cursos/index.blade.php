@extends('layouts.app')

@section('content')

  <h2>Lista de Cursos</h2>

  <table class="table table-bordered text-center align-middle">
    <thead>
    <tr>
      <th>Id</th>
      <th>Atividade</th>
      @if (auth()->user()->role->id === 1)
      <th>Ação</th>
    @endif
    </tr>
    </thead>

    <thead>
    <tr>
    <tbody>
    @foreach($cursos as $curso)
      <td>{{ $curso->id }}</td>
      <td>{{ $curso->nome }}</td>

      @if (auth()->user()->role->id === 1)
      <td>
      <a class="btn btn-info" href="{{ route('cursos.show', $curso->id) }}">Mais informações</a>
      </td>
      @endif

      </tr>
    @endforeach
    </tbody>
  </table>
  @if (auth()->user()->role->id === 1)
    <a class="btn btn-primary" href="{{ route('cursos.create') }}">Cadastrar Novo Curso</a>
  @endif
@endsection