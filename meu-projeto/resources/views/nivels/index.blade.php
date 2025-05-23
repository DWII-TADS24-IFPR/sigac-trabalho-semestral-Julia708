@extends('layouts.app')

@section('content')

<h2>Lista de nivels</h2>

<table class="table table-bordered text-center align-middle">
  <thead>
    <tr>
      <th>Id</th>
      <th>nome</th>
      <th>Ação</th>
    </tr>
  </thead>

    <thead>
        <tr>  
    <tbody>
        @foreach($nivels as $nivel)
            <td>{{ $nivel->id }}</td>
            <td>{{ $nivel->nome }}</td>

                <td>
                    <a class="btn btn-info" href="{{ route('nivels.show', $nivel->id) }}">Mais informações</a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<a class="btn btn-primary" href="{{ route('nivels.create') }}">Cadastrar Novo nivel</a>

@endsection
