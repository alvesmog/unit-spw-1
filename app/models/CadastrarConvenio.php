<?php

include_once 'connection.php';

class CadastrarConvenio
{
    public function cadastrar($codigo, $nome, $banco, $sequencial, $agencia, $conta, $digito)
    {
        try {
            $database = new Connection();
            $db = $database->openConnection();
            // inserting data into create table using prepare statement to prevent from sql injections
            $stm = $db->prepare("INSERT INTO tblconvenios (cod,nome,banco,sequencial,agencia,conta,digito,id) VALUES (:codigo, :nome, :banco, :sequencial, :agencia, :conta, :digito)");
            // inserting a record
            $stm->execute(array(':codigo' => $codigo, ':nome' => $nome, ':banco' => $banco, ':sequencial' => $sequencial, ':agencia'=>$agencia,':conta'=>$conta,':digito'=>$digito));
            echo "Convênio cadastrado com sucesso";
        } catch (PDOException $e) {
            echo "Erro de conexão: " . $e->getMessage();
        }
    }
}
?>