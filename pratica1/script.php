<?php
if ($_SERVER['REQUEST_METHOD'] === 'GET' || $_SERVER['REQUEST_METHOD'] === 'POST') {
    echo "<h2>Dados Recebidos:</h2>";
    echo "<pre>";
    print_r($_REQUEST);
    echo "</pre>";
    
    echo "<h2>Cabeçalho da Requisição:</h2>";
    echo "<pre>";
    print_r(apache_request_headers());
    echo "</pre>";
    
    echo "<h2>Método Utilizado:</h2>";
    echo "<p>" . $_SERVER['REQUEST_METHOD'] . "</p>";
}
?>