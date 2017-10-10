<?php 
namespace App\Services;

class DatabaseService{

    private $host;
    private $database;
    private $usuario;
    private $senha;

    public function __construct($host, $database, $usuario, $senha){

        $this->host = $host;
        $this->database = $database;
        $this->usuario = $usuario;
        $this->senha = $senha;

    }

    public function conexao(){

        return new \PDO(
            "mysql:host={$this->host};dbname={$this->database}",
            $this->usuario,
            $this->senha
        );

    }

}