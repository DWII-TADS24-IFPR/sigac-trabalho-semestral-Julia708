@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Solicitações de Horas</h2>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Aluno</th>
                    <th>Descrição</th>
                    <th>Carga Horária</th>
                    <th>Status</th>
                    <th>Arquivo</th>
                    @if (auth()->user()->role->id === 1)
                        <th>Ações</th>
                    @endif
                </tr>
            </thead>
            <tbody>
                @foreach($solicitacoes as $solicitacao)
                    <tr>
                        <td>{{ $solicitacao->user_id ?? '-' }}</td>
                        <td>{{ $solicitacao->descricao }}</td>
                        <td>{{ $solicitacao->carga_horaria }}h</td>
                        <td>{{ ucfirst($solicitacao->status) }}</td>
                        <td>
                            @if($solicitacao->arquivo)
                                <a href="{{ asset('storage/' . $solicitacao->arquivo) }}" target="_blank">Ver arquivo</a>
                            @else
                                -
                            @endif
                        </td>
                        @if (auth()->user()->role->id === 1)
                            <td>
                                <a href="{{ route('solicitacoes.show', $solicitacao) }}" class="btn btn-sm btn-info">Avaliar</a>
                            </td>
                        @endif
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @if (auth()->user()->role->id === 2)
        <a class="btn btn-primary" href="{{ route('solicitacoes.create') }}">Solicitar Horas</a>
    @endif
@endsection