<?php
require_once 'Conexao.php';
function Update(){
    $sql = 'UPDATE user SET email_user = ? WHERE id = 63'; 
    $enviar = Conexao()->prepare($sql);
    $enviar->bindValue(1, 'Hotmail');
    $enviar->execute();
};