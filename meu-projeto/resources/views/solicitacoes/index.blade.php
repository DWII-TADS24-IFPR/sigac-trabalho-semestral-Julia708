<form action="{{ route('solicitacoes.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <label>Descrição:</label>
    <input type="text" name="descricao" class="form-control" required>

    <label>Carga Horária:</label>
    <input type="number" name="carga_horaria" class="form-control" required>

    <label>Comprovante (opcional):</label>
    <input type="file" name="arquivo" class="form-control">

    <button type="submit" class="btn btn-success mt-2">Enviar Solicitação</button>
</form>
