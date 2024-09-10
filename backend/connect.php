<?php
    $conexao = new mysqli("", "", "", "");
    if (!$conexao){
        die ("Erro de conexão com localhost, o seguinte erro ocorreu -> ".mysql_error());
    }    

?>