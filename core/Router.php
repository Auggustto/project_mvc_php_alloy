<?php

namespace core;

class Router
{
    // criando 3 atributos privados para gerenciar as urls
    // Um para armazenar a classe
    // Um para o metodo que vai acessar a pagina 
    // Um para armazenar o parametro que vai ser passado 

    private $controller = 'Site';
    private $method = 'home';
    private $param = '[]';


    public function __construct()
    {
        $router = $this->url();

        // echo "Carregando a classe router";
        $router = $this->url();

        // Verificando se a classe site existe

        if (is_file('./app/controllers/' . ucfirst($router[0]) . '.php')) :
            $this->controller = $router[0]; // O nome da classe está na posição zero
            unset($router[0]); // É nescessario limpar a chave zero (indice) porque vamos trabalhar com os metodos
        endif;

        // Instanciando a classe 
        $class = "\\app\\controllers\\" . ucfirst($this->controller);
        $object = new $class;

        // Verificando se o metodo que a pessoa passou existe
        if (isset($router[1]) and method_exists($class, $router[1])) :
            $this->method = $router[1];
            unset($router[1]);
        endif;

        $this->param = $router ? array_values($router) : [];
        call_user_func_array([$object, $this->method], $this->param);
    }

    // Criando uma função para pegar os dados passados pela url do navegador
    private function url()
    {
        // Passando explode, sempre que encontrar uma barra ele quebra
        // 'router' é o nome da vareavel que foi definida no htaccess
        $parse_url = explode("/", filter_input(INPUT_GET, 'router', FILTER_SANITIZE_URL));
        return $parse_url;
    }
}
