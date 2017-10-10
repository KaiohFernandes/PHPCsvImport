<?php
namespace App\Controllers;

use App\Services\GetDadosService;
use App\Services\SalvarDadosService;

class PhpCsvController{

    public $dados;
    public $database;

    public function __construct($arquivo){

        $service = new GetDadosService($arquivo);
        $this->database = new SalvarDadosService('localhost', 'kardecplay', 'homestead', 'secret');

        // Separa os dados
        $this->dados = $service->separaDados();          

    }

    /**
     * Salva os dados no banco de dados
     */
    public function salvarDados( $campos ){

        $this->database->create( $campos, $this->dados );

    }

}