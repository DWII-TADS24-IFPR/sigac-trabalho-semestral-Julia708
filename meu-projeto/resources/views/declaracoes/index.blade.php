@extends('layouts.app')

@section('content')

  <h2>Lista de declaracoes</h2>

  <table class="table table-bordered text-center align-middle">
    <thead>
    <tr>
      <th>Id</th>
      <th>Hash</th>
      @if (auth()->user()->role->id === 1)
      <th>Ação</th>
    @endif
    </tr>
    </thead>

    <thead>
    <tr>
    <tbody>
    @foreach($declaracoes as $declaracao)
      <td>{{ $declaracao->id }}</td>
      <td>{{ $declaracao->hash }}</td>

      @if (auth()->user()->role->id === 1)
      <td>
      <a class="btn btn-info" href="{{ route('declaracoes.show', $declaracao->id) }}">Mais informações</a>
      </td>
      @endif

      </tr>
    @endforeach
    </tbody>
  </table>
  @if (auth()->user()->role->id === 1)
    <a class="btn btn-primary" href="{{ route('declaracoes.create') }}">Cadastrar Nova Declaração</a>
  @endif
@endsection