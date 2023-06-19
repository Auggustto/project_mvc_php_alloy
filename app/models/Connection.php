<?php

namespace app\models;

// Criando uma classe abstract para que ela não sejá instanciada em lugar algum por motivos de segurança
abstract class Connection
{
    private $dbname = 'mysql:host=localhost;dbname=projetomvc_alloy';
    private $user = 'root';
    private $pass = '';

    // Criando um metodo protegido
    protected function connect()
    {
        try
        {
            $conn = new \PDO($this->dbname, $this->user, $this->pass);

            // Configurando o retorno do banco de dados 
            $conn->exec("set names utf8");
            // echo 'conexão realizada com sucesso!';
            return $conn;
        } catch(\PDOException $erro ){
            echo 'eero de conexão',$erro->getMessage();
        };
    }
}