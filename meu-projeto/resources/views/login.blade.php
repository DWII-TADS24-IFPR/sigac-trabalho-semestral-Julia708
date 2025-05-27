<!DOCTYPE html>
<html>

<head>
    <title>SIGAC</title>
</head>
    @vite(['resources/js/app.js'])


    <div class="container text-center mt-5">
        <div class="p-5 bg-light rounded shadow">
<body>

    <h2>Login</h2>

        @if ($errors->any())
            <div class="alert alert-danger" style="color:red">
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

    </div>
</div>
</html>