@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Horas Complementares por Turma</h2>

    <form method="GET" action="{{ route('graficos.index') }}" class="mb-4">
        <label for="turma_id">Selecione a Turma:</label>
        <select name="turma_id" id="turma_id" class="form-control">
            <option value="">Selecione uma turma</option>
                    @foreach ($turmas as $turma)
                        <option value="{{ $turma->id }}">{{ $turma->ano }}</option>
                    @endforeach
        </select>
        <button type="submit" class="btn btn-primary mt-2">Ver Gráfico</button>
    </form>

    @if($dados)
        <canvas id="graficoHoras"></canvas>
    @endif
</div>

@if($dados)
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('graficoHoras').getContext('2d');
    const chart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: {!! json_encode(array_column($dados, 'nome')) !!},
            datasets: [{
                label: 'Horas Aprovadas',
                data: {!! json_encode(array_column($dados, 'horas')) !!},
                backgroundColor: 'rgba(54, 162, 235, 0.6)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: { beginAtZero: true }
            }
        }
    });
</script>
@endif
@endsection
