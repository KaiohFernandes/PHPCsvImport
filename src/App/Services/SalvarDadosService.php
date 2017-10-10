<?php 
namespace App\Services;

class SalvarDadosService extends DatabaseService{

    public function __constuct($host, $database, $usuario, $senha){
        parent::__constuct($host, $database, $usuario, $senha);
    }

    public function create( $campos, $dados ){
        $conecta = $this->conexao();

        $senha = '$2y$10$2mddW4J/sUlza85Ndn5Z4.QCifVdcxY2XYACdZg3GBGDdt8Jt7/yu';
        $id = 91;

        try{
            $conecta->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_WARNING);
            
            // Inicia um transaction
            $conecta->beginTransaction();

            foreach( $dados as $dado ){

                $conecta->exec("INSERT INTO clientes (nome, email, senha, cpf, telefone, sexo, pais, estado, cidade) VALUES 
                ('{$dado[0]}', '{$dado[1]}', '{$senha}', '{$dado[2]}', '{$dado[5]}', '{$dado[4]}', '{$dado[6]}', '{$dado[8]}', '{$dado[7]}')");
                
                // $conecta->exec("INSERT INTO assinaturas (cliente_id, plano_id, pagamento_id, ativa, expiracao) VALUES ('{$id}', '5', '4', '1', '2017-11-10 09:54:03')");
                // $id++;
            }   

            $conecta->commit();

            var_dump('Dados cadastrados com sucesso.');

        }
        catch( PDOException $e ){
            $this->database->rollback();
            var_dump( $e->getMessage() );
            die();
        }

    }

}