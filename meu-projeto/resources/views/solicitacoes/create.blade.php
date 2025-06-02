@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Solicitar Horas Complementares</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('solicitacoes.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição:</label>
            <input type="text" name="descricao" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="carga_horaria" class="form-label">Carga Horária:</label>
            <input type="number" name="carga_horaria" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="arquivo" class="form-label">Comprovante (PDF/JPG/PNG):</label>
            <input type="file" name="arquivo" class="form-control">
        </div>

        <button type="submit" class="btn btn-success">Enviar Solicitação</button>
    </form>
</div>
@endsection
