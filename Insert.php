<?php
require_once 'Conexao.php';
function Insert(){
    try {
        $sql = 'INSERT INTO user(name_user,email_user,pass_user) VALUES (?,?,?);';
        $enviar = Conexao()->prepare($sql);
        $enviar->bindValue(1,'Teste');
        $enviar->bindValue(2, 'Gmail');
        $enviar->bindValue(3, '2345');
        $enviar->execute();
    } catch (PDOException $ex){
        echo 'Erro '.$ex->getMessage();
    }
};
Insert();