<!DOCTYPE html>
<html>
<head>
    <title>Resultado análise IMC</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>Resultado análise IMC</h1>
    <h2>{{ $nome }}</h2>
    <p>Idade: {{ $idade }}</p>
    <p>Peso: {{ $peso }}</p>
    <p>Altura: {{ $altura }}</p>
    <p>IMC: {{ $imc }} - {{ $classificacao }}</p>
    <a href="/">Voltar</a>
</body>
</html>
