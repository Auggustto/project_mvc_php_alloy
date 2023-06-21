<?php

namespace app\models;

// Para usar a conexão com db precisamos do extends Connection
class Crud extends Connection
{
    // Criando os metodos do CRUD
    public function create()
    {
        // Pegando o método connect
        $conn = $this->connect();

        // Pegando os valores do forms views/cadastro
        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

        // Verifica se o email já está cadastrado
        $stmt = $conn->prepare("SELECT * FROM tb_person WHERE email = :email");
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        if ($stmt->rowCount() > 0) 
        {
            // Inserindo um alert na tela caso já esteja cadastrado
            echo '<script>alert("O email já está cadastrado!");</script>';
        } 
        else {
            // Validando novamente se os campos estão vazios 
            if ($nome and $email != null) 
            {

                // Inserindo os dados da variável no banco de dados
                $sql = "INSERT INTO tb_person VALUES (default, :nome, :email)";
                $stmt = $conn->prepare($sql);
                $stmt->bindParam(':nome', $nome);
                $stmt->bindParam(':email', $email);
                $stmt->execute();
                return $stmt;
            }
        }
    }

    public function read()
    {
        $conn = $this->connect();
        $sql = 'SELECT * FROM tb_person ORDER BY nome';
        $stmt = $conn->prepare($sql);
        $stmt->execute();

        $result = $stmt->fetchAll();
        return $result;
    }

    public function update()
    {
        $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
        $id = filter_input(INPUT_POST, 'id', FILTER_SANITIZE_SPECIAL_CHARS);

        $conn = $this->connect();
        $sql = 'UPDATE tb_person SET nome = :nome, email = :email WHERE id = :id';

        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':nome', $nome);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':id', $id);

        $stmt->execute();
        return $stmt;
    }

    public function delete()
    {
        // Pegando o ID e descriptografando
        $id = base64_decode(filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS));

        $conn = $this->connect();
        $sql = "DELETE FROM tb_person WHERE id = :id";

        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':id', $id);

        $stmt->execute();
        return $stmt;
    }

    public function editForm()
    {
        // Pegando a vareavel ID que está sendo enviada via URL e utilizando o base64_decode para tirar a criptografia
        $id = base64_decode(filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS));

        $conn = $this->connect();

        $sql = "SELECT * FROM tb_person WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->execute();

        $result = $stmt->fetchAll();
        return $result;
    }
}
