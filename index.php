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
        require("controllers/" . $class . ".php");
    else
        require("models/" . $class . ".php");
}

//Faz com que a função carregue automaticamente

spl_autoload_register("autoloadFunction");

?>