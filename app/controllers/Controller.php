<?php

//Abstração das classes controllers

abstract class Controller
{
    //Propriedades    
    //Armazena os dados recebidos dos models
    protected $data = array();
    //O nome da view que vai ser renderizada
    protected $view = "";
    //O head do HTML
    protected $head = array('title' => '', 'description' => '');

    //Métodos
    //Processa os parâmetros
    abstract function process($params);
    //Renderiza a view para o usuário
    public function renderView()
    {
        if ($this->view) {
            extract($this->data);
            require("app/views/" . $this->view . ".phtml");
        }
    }
    //Finaliza o script
    public function redirect($url)
    {
        header("Location: /$url");
        header("Connection: close");
        exit;
    }
}
