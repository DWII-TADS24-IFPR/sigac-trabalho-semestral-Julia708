@extends('layouts.app')

@section('content')

    <form action="{{ route('nivels.show', $nivel->id) }}" method="POST">

        <div class="container mt-4">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    <h4>Detalhes de {{ $nivel->id }}</h4>
                </div>
                <div class="card-body">
                    <p><strong>nome:</strong> {{ $nivel->nome }}</p>
                </div>
            <a class="btn btn-warning" href="{{ route('nivels.edit', $nivel->id) }}">Editar</a>
            </div>
             
            <div class="card-footer">
                <a href="{{ route('nivels.index') }}" class="btn btn-secondary">Voltar</a>

            </div>
        </div>
@endsection

</form>