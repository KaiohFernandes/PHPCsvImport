<?php
namespace App\Services;

class GetDadosService{

    public $dados = [];

    /**
     * $arquivo: caminho do arquivo
     */
    public function __construct( $arquivo ){

        $file = fopen($arquivo, 'r');

        while( ( $linha = fgetcsv($file) ) !== false ){
            $this->dados [] = $linha;
        }

        fclose( $file );
    }

    /**
     * Separar os dados em array
     * 
     * @return Array
     */
    public function separaDados(){

        $dados = [];
        
        foreach( $this->dados as $dado ){            
            $linha = explode(";", $dado[0]);
            unset( $linha[10] );

            $dados [] = $linha;
        }

        unset( $dados[0] );

        return $dados;

    }

}
