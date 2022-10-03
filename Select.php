<?php
require_once 'Conexao.php';
function Select(){
    $sql = "SELECT * FROM user";
    $enviar = Conexao()->prepare($sql);
    $enviar->execute();
    echo $enviar->rowCount(); //Quantidade de Linhas
    $result = $enviar->fetchAll(\PDO::FETCH_ASSOC);
    foreach($result as $value){
        echo $value['name_user'];
        echo $value['email_user'];
        echo $value['pass_user'];
    }
};
Select();