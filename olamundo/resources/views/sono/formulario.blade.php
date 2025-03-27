<!DOCTYPE html>
<html>
<head>
    <title>Avaliação da Qualidade do Sono</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>Avaliação da Qualidade do Sono</h1>

    <form action="{{ url('/avaliar-sono/resultado') }}" method="POST">
        @csrf

        <label>Nome:</label>
        <input type="text" name="nome" required>

        <label>Data de Nascimento:</label>
        <input type="date" name="nascimento" required>

        <label>Horas dormidas (por noite):</label>
        <input type="number" step="0.1" name="sono" required>

        <button type="submit">Avaliar Sono</button>
    </form>
</body>
</html>
