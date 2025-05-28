@extends('layouts.app')

@section('content')

  <h2>Lista de categorias</h2>

  <table class="table table-bordered text-center align-middle">
    <thead>
    <tr>
      <th>Id</th>
      <th>Nome</th>
      @if (auth()->user()->role->id === 1)
      <th>Ação</th>
    @endif
    </tr>
    </thead>

    <thead>
    <tr>
    <tbody>
    @foreach($categorias as $categoria)
      <td>{{ $categoria->id }}</td>
      <td>{{ $categoria->nome }}</td>

      @if (auth()->user()->role->id === 1)
      <td>
      <a class="btn btn-info" href="{{ route('categorias.show', $categoria->id) }}">Mais informações</a>
      </td>
      @endif

      </tr>
    @endforeach
    </tbody>
  </table>
  @if (auth()->user()->role->id === 1)
    <a class="btn btn-primary" href="{{ route('categorias.create') }}">Cadastrar Nova Categoria</a>
  @endif

@endsection