<?php

$arquivo = 'clientes.csv';

$campos = ['nome', 'email', 'cpf', 'data_nascmento', 'genero', 'telefone', 'pais', 'cidade', 'estado'];

// Carrega o AutoLoad
require_once('vendor/autoload.php');

// Instancie o Metodo
$csv = new App\Controllers\PhpCsvController($arquivo);

$csv->salvarDados( $campos );
