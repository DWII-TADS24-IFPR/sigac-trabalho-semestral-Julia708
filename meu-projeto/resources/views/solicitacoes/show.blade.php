@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Detalhes da Solicitação</h2>

    <p><strong>Aluno:</strong> {{ $solicitacao->user_id }}</p>
    <p><strong>Descrição:</strong> {{ $solicitacao->descricao }}</p>
    <p><strong>Carga Horária:</strong> {{ $solicitacao->carga_horaria }}h</p>
    <p><strong>Status Atual:</strong> {{ ucfirst($solicitacao->status) }}</p>

    @if($solicitacao->arquivo)
        <p><strong>Arquivo:</strong> <a href="{{ asset('storage/' . $solicitacao->arquivo) }}" target="_blank">Visualizar</a></p>
    @endif

    <form action="{{ route('solicitacoes.update', $solicitacao) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="status" class="form-label">Atualizar Status:</label>
            <select name="status" class="form-select" required>
                <option value="pendente" {{ $solicitacao->status == 'pendente' ? 'selected' : '' }}>Pendente</option>
                <option value="aprovada" {{ $solicitacao->status == 'aprovada' ? 'selected' : '' }}>Aprovada</option>
                <option value="rejeitada" {{ $solicitacao->status == 'rejeitada' ? 'selected' : '' }}>Rejeitada</option>
            </select>
        </div>

        <button type="submit" class="btn btn-success">Atualizar</button>
    </form>
</div>
@endsection
