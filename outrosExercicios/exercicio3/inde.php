<?php
require 'vendor/autoload.php';

use Faker\Factory;

// Criar instância do Faker
$faker = Factory::create('pt_BR');

echo "<h1>Gerador de Dados Falsos</h1>";
for ($i = 0; $i < 5; $i++) {
    echo "<p><strong>Nome:</strong> {$faker->name}</p>";
    echo "<p><strong>Email:</strong> {$faker->email}</p>";
    echo "<p><strong>Endereço:</strong> {$faker->address}</p>";
    echo "<hr>";
}
?>