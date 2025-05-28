@extends('layouts.app')

@section('content')

  <h2>Lista de documentos</h2>

  <table class="table table-bordered text-center align-middle">
    <thead>
    <tr>
      <th>Id</th>
      <th>url</th>
      <th>descricao</th>
      @if (auth()->user()->role->id === 1)
      <th>Ação</th>
    @endif
    </tr>
    </thead>

    <thead>
    <tr>
    <tbody>
    @foreach($documentos as $documento)
      <td>{{ $documento->id }}</td>
      <td>{{ $documento->url }}</td>
      <td>{{ $documento->descricao }}</td>

      @if (auth()->user()->role->id === 1)
      <td>
      <a class="btn btn-info" href="{{ route('documentos.show', $documento->id) }}">Mais informações</a>
      </td>
      @endif

      </tr>
    @endforeach
    </tbody>
  </table>
  @if (auth()->user()->role->id === 1)
    <a class="btn btn-primary" href="{{ route('documentos.create') }}">Cadastrar Novo documento</a>
  @endif
@endsection