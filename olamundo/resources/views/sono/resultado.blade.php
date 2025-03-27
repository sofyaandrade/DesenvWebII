<!DOCTYPE html>
<html>
<head>
    <title>Resultado da Avaliação do Sono</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>Resultado da Avaliação do Sono</h1>

    <h2>{{ $nome }}</h2>
    <p>Idade: {{ $idade }} anos</p>
    <p>Horas de sono: {{ $sono }} por noite</p>
    <p>Qualidade do sono: <strong>{{ $qualidade }}</strong></p>

    <a href="/">Voltar</a>
</body>
</html>
