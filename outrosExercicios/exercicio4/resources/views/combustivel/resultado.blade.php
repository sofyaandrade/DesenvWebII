<!DOCTYPE html>
<html>
<head>
    <title>Resultado do Cálculo de Consumo</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>Resultado do Cálculo de Consumo</h1>

    <div class="container">
        <div class="result">
            <h3>O valor total do gasto será de:</h3>
            <ul>
                <li><strong>{{ $combustivel }}:</strong> R$ {{ number_format($gasto, 2, ',', '.') }}</li>
            </ul>
        </div>

        <a href="/">Voltar</a>
    </div>
</body>
</html>
