@extends('layouts.app')

@section('content')

<h2>Lista de Cursos</h2>

<table class="table table-bordered text-center align-middle">
  <thead>
    <tr>
      <th>Id</th>
      <th>Atividade</th>
      <th>Ação</th>
    </tr>
  </thead>

    <thead>
        <tr>  
    <tbody>
        @foreach($cursos as $curso)
            <td>{{ $curso->id }}</td>
            <td>{{ $curso->nome }}</td>

                <td>
                    <a class="btn btn-info" href="{{ route('cursos.show', $curso->id) }}">Mais informações</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<a class="btn btn-primary" href="{{ route('cursos.create') }}">Cadastrar Novo Curso</a>

@endsection
