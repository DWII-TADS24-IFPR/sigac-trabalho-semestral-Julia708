@extends('layouts.app')

@section('content')

<h2>Lista de Comprovantes</h2>

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
        @foreach($comprovantes as $comprovante)
            <td>{{ $comprovante->id }}</td>
            <td>{{ $comprovante->atividade }}</td>

                <td>
                    <a class="btn btn-info" href="{{ route('comprovantes.show', $comprovante->id) }}">Mais informações</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<a class="btn btn-primary" href="{{ route('comprovantes.create') }}">Cadastrar Novo Comprovante</a>

@endsection
