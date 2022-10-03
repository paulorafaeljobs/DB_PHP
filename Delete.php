<?php
require_once 'Conexao.php';
function Delete(){
    $sql = 'DELETE FROM user WHERE id = ? ';
    $enviar = Conexao()->prepare($sql);
    $enviar->bindValue(1, '64');
    $enviar->execute();
};
Delete();