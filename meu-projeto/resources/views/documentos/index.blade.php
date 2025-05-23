@extends('layouts.app')

@section('content')

<h2>Lista de documentos</h2>

<table class="table table-bordered text-center align-middle">
  <thead>
    <tr>
      <th>Id</th>
      <th>url</th>
      <th>descricao</th>
      <th>Ação</th>
    </tr>
  </thead>

    <thead>
        <tr>  
    <tbody>
        @foreach($documentos as $documento)
            <td>{{ $documento->id }}</td>
            <td>{{ $documento->url }}</td>
            <td>{{ $documento->descricao }}</td>

                <td>
                    <a class="btn btn-info" href="{{ route('documentos.show', $documento->id) }}">Mais informações</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<a class="btn btn-primary" href="{{ route('documentos.create') }}">Cadastrar Novo documento</a>

@endsection
