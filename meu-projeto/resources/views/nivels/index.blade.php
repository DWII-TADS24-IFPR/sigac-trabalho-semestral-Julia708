@extends('layouts.app')

@section('content')

  <h2>Lista de nivels</h2>

  <table class="table table-bordered text-center align-middle">
    <thead>
    <tr>
      <th>Id</th>
      <th>nome</th>
      @if (auth()->user()->role->id === 1)
      <th>Ação</th>
    @endif
    </tr>
    </thead>

    <thead>
    <tr>
    <tbody>
    @foreach($nivels as $nivel)
      <td>{{ $nivel->id }}</td>
      <td>{{ $nivel->nome }}</td>

      @if (auth()->user()->role->id === 1)
      <td>
      <a class="btn btn-info" href="{{ route('nivels.show', $nivel->id) }}">Mais informações</a>
      </td>
      @endif

      </tr>
    @endforeach
    </tbody>
  </table>
  @if (auth()->user()->role->id === 1)
    <a class="btn btn-primary" href="{{ route('nivels.create') }}">Cadastrar Novo nivel</a>
  @endif
@endsection