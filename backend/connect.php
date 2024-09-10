<?php
//    $conexao = new mysqli("HOST", "USER", "PASS", "DATA BASE");
//    $conexao = new mysqli("108.167.132.56", "plan3411_developer", "Xspider@", "plan3411_museu");
    $conexao = new mysqli("108.167.132.56", "plan3411_developer", "Xspider@", "plan3411_padrao");
    if (!$conexao){
        die ("Erro de conexão com localhost, o seguinte erro ocorreu -> ".mysql_error());
    }    

?>