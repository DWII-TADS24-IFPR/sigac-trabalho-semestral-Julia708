<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand">SIGAC</a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">

      <li class="nav-item">
        <a class="nav-link" href="/home">Home</a>
      </li>

      <li class="nav-item">
      <a class="nav-link" href="{{ route('alunos.index') }}">Aluno</a>
      </li>

      @if(auth()->user()->role->id === 1)
      <li class="nav-item">
      <a class="nav-link" href="{{ route('categorias.index') }}">Categoria</a>
      </li>
      @endif

      @if(auth()->user()->role->id === 1)
      <li class="nav-item">
      <a class="nav-link" href="{{ route('comprovantes.index') }}">Comprovante</a>
      </li>
      @endif

      @if(auth()->user()->role->id === 1)
      <li class="nav-item">
      <a class="nav-link" href="{{ route('cursos.index') }}">Curso</a>
      </li>
      @endif

      @if(auth()->user()->role->id === 1)
      <li class="nav-item">
      <a class="nav-link" href="{{ route('declaracoes.index') }}">Declaração</a>
      </li>
      @endif

      @if(auth()->user()->role->id === 1)
      <li class="nav-item">
      <a class="nav-link" href="{{ route('documentos.index') }}">Documento</a>
      </li>
      @endif
      
      @if(auth()->user()->role->id === 1)
      <li class="nav-item">
      <a class="nav-link" href="{{ route('nivels.index') }}">Nível</a>
      </li>
      @endif
      
      @if(auth()->user()->role->id === 1)
      <li class="nav-item">
      <a class="nav-link" href="{{ route('turmas.index') }}">Turma</a>
      </li>
      @endif
      
    </ul>
  </div>
</nav>