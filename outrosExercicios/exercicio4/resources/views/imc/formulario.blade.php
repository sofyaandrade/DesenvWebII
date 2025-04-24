<!DOCTYPE html>
<html>
<head>
    <title>Aplicação Saúde - Cálculo do IMC</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>Aplicação Saúde - Cálculo do IMC</h1>
    <p>Esta aplicação realiza o cálculo do IMC de uma pessoa.</p>
    @if(session('error'))
    <p style="color:red;">{{ session('error') }}</p>
    @endif

    <form  action="{{ url('/imc/resultado') }}" method="POST">
        @csrf
        <label>Nome:</label>
        <input type="text" name="nome" required><br>

        <label>Data de Nascimento:</label>
        <input type="date" name="nascimento" required><br>

        <label>Peso:</label>
        <input type="number" step="0.01" name="peso" required><br>

        <label>Altura:</label>
        <input type="number" step="0.01" name="altura" required min="0.01"><br>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>
