<!DOCTYPE html>
<html>

<head>
    <title>SIGAC</title>

    <style>    
        body {
            display: flex;
            height: 100vh;
            justify-content: center;
            align-items: center;
            margin: 0;
        }
    </style>

</head>

    @vite(['resources/js/app.js'])


<body>
    <div class="container text-center mt-5">
        <div class="p-5 bg-light rounded shadow">


    <h1>Login</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="/">
            @csrf
            <div>
            <label>Email:</label>
            <input type="email" name="email" required><br><br>
            </div>

            <div>
            <label>Senha:</label>
            <input type="password" name="password" required><br><br>
            </div>
            
            <button type="submit" class="btn btn-primary">Entrar</button>
        </form>    
</body>

            <a href="{{ route('alunos.create') }}" class="btn btn-secondary mb-3">Cadastrar-se</a>

    </div>
</div>
</html>