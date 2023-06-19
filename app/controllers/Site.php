<?php

namespace app\controllers;

use app\models\Crud;

class Site extends Crud
{
    public function home()
    {
        // Importando a pagina home
        require_once __DIR__ . '/../views/home.php';

    }

    public function cadastro()
    {
        // Executando a query create
        $cadastro = $this->create();
        require_once __DIR__ . '/../views/cadastro.php';             
    }

    public function  consulta()
    {   
        // Executando a query read
        $consulta = $this->read();
        require_once __DIR__ . '/../views/consulta.php';
    }

    public function  editar()
    {   
        // Executando a query do editForm
        $editarForm = $this->editForm();
        require_once __DIR__ . '/../views/editar.php';
    }
    
    public function  alterar()
    {   
        // Executando a query do update  
        $alterar = $this->update();

        // Redirecionando 
        header('Location:?router=Site/consulta/');
    }

    public function  confirmaDelete()
    {   
        // Executando a query do update  
        $id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
       require_once __DIR__ . '/../views/confirmaDelete.php';
    }

    public function  deletar()
    {   
        // Executando a query Deletar
        $delete = $this->delete();
        
        // Redirecionando 
        header('Location:?router=Site/consulta/');
    }
}