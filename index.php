<?php
//Toda a comunicação será feita por este arquivo, assim como os redirecionamentos de URL
//
//
//
//Setar o encoding para UTF-8 faz as funções string do PHP funcionarem corretamente
mb_internal_encoding("UTF-8");


//Função auto-load para determinar se a classe carregada é model ou controller

function autoloadFunction($class)
{
    if (preg_match('/Controller$/', $class))
        require("app/controllers/" . $class . ".php");
    else
        require("app/models/" . $class . ".php");
}

//Faz com que a função carregue automaticamente

spl_autoload_register("autoloadFunction");

// Conecta ao banco de dados
Db::connect("127.0.0.1", "root", "", "dbspw1");

//Testando o router
$router = new RouterController();
$router->process(array($_SERVER['REQUEST_URI']));
$router->renderView();
