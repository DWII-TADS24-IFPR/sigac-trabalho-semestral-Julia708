@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h2>Cadastrar nivel</h2>

        <form action="{{ route('nivels.store') }}" method="POST">
            @csrf

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="mb-3">
                <label for="nome" class="form-label">nome:</label>
                <input type="text" name="nome" id="nome" class="form-control" placeholder="Digite a nome" required>
            </div>

            <button type="submit" class="btn btn-success">Cadastrar</button>
            <a href="{{ route('nivels.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
@endsection