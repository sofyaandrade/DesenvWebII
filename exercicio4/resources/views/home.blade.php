<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escolha uma Avaliação</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <h1>Bem-vindo!</h1>
        <p>Escolha uma opção abaixo:</p>
        
        <div class="options">
            <a href="{{ url('/imc') }}" class="btn">Calcular IMC</a>
            <a href="{{ url('/avaliar-sono') }}" class="btn">Avaliar Sono</a>
            <a href="{{ url('/gasto-combustivel') }}" class="btn">Gasto de Combustível</a>

        </div>
    </div>
</body>
</html>
