<?php

    
    $nome = $_POST["nome"];
    $sinopse = $_POST["sinopse"];
    $elenco = $_POST["elenco"];
    $produtor = $_POST["produtora"];
    $diretor = $_POST["diretor"];
    $classificacao = $_POST["classificacao"];
    $genero = $_POST["genero"];
    $data = $_POST["data"];



    $_con = mysqli_connect('127.0.0.1','root','','pw_projeto');
    if($_con===FALSE) {
        echo "Não foi possível conectar ao Servidor de banco de dados ";
    } else {
        echo "Foi possível conectar ao Servidor de banco de dados ";
        // Exemplo: SQL query
        // $result = mysqli_query($_con, "use bd_escola;");
        $sql = "INSERT INTO serie VALUES (null, '$nome', '$sinopse', '$elenco', '$produtor', '$diretor', '$classificacao', '$genero','$data');";
    if(mysqli_query($_con, $sql)){
        echo "Novo registro realizado com sucesso";
    } 
        mysqli_close($_con);
    }

?>