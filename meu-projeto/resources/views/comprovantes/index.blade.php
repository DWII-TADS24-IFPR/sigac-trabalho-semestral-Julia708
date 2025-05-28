@extends('layouts.app')

@section('content')

  <h2>Lista de Comprovantes</h2>

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
    @foreach($comprovantes as $comprovante)
      <td>{{ $comprovante->id }}</td>
      <td>{{ $comprovante->atividade }}</td>

      @if (auth()->user()->role->id === 1)
      <td>
      <a class="btn btn-info" href="{{ route('comprovantes.show', $comprovante->id) }}">Mais informações</a>
      </td>
      @endif

      </tr>
    @endforeach
    </tbody>
  </table>
  @if (auth()->user()->role->id === 1)
    <a class="btn btn-primary" href="{{ route('comprovantes.create') }}">Cadastrar Novo Comprovante</a>
  @endif


@endsection