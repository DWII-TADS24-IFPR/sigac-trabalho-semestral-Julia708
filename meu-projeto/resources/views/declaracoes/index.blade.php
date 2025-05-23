@extends('layouts.app')

@section('content')

<h2>Lista de declaracoes</h2>

<table class="table table-bordered text-center align-middle">
  <thead>
    <tr>
      <th>Id</th>
      <th>Hash</th>
      <th>Ação</th>
    </tr>
  </thead>

    <thead>
        <tr>  
    <tbody>
        @foreach($declaracoes as $declaracao)
            <td>{{ $declaracao->id }}</td>
            <td>{{ $declaracao->hash }}</td>

                <td>
                    <a class="btn btn-info" href="{{ route('declaracoes.show', $declaracao->id) }}">Mais informações</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<a class="btn btn-primary" href="{{ route('declaracoes.create') }}">Cadastrar Nova Declaração</a>

@endsection
