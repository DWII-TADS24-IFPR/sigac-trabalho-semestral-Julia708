<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/js/app.js'])
    <title>@yield('title', 'SIGAC')</title>
</head>
<body>
    <ul class="justify-content-center">
        <h1>Sistema de Gerenciamento de Atividades Complementares</h1>
    </ul>
    <div class="d-flex flex-column min-vh-100">
    @include('layouts.navbar')
        <main class="flex-grow-1 container py-4">
            @yield('content')
        </main>
    @include('layouts.footer')
    </div>
</body>
</html>