<!DOCTYPE html>
<html>
<head>
    <title>Consumo de Combustível</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>Exercício: Consumo Combustível – Melhoria</h1>

    <div class="container">
        <h3>Instruções</h3>
        <p>Esta aplicação tem como finalidade demonstrar os valores que serão gastos com combustível durante uma viagem, com base no consumo do seu veículo e na distância determinada por você!</p>
    </div>

    <div class="container">
        <h3>Cálculo do valor (R$) do consumo</h3>
        <div class="card">
            <form action="{{ url('/combustivel/resultado') }}" method="GET">
                @csrf

                <label>Combustível</label>
                <select name="combustivel" required>
                    <option value="Gasolina">Gasolina</option>
                    <option value="Etanol">Etanol</option>
                    <option value="Diesel">Diesel</option>
                </select>

                <label>Valor (R$ por litro):</label>
                <input type="number" name="valorcombustivel" step="0.01" required>

                <label>Distância em km:</label>
                <input type="number" name="distancia" required>

                <label>Consumo do veículo (km/l):</label>
                <input type="number" name="consumo" step="0.1" required>

                <button type="submit">Calcular</button>
            </form>
        </div>
    </div>
</body>
</html>
