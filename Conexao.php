<?php
function Conexao(){
    try {
        $pdo = new PDO('mysql:host=localhost;dbname=Produtos','root','');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;

    } catch (PDOException $ex){
        echo 'Erro ao Conectar com o Banco de Dados: ';
        //echo $ex->getMessage();
    }
};