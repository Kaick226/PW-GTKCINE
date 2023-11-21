<?php

    
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $contato = $_POST["telefone"];
    $cpf = $_POST["cpf"];
    $data = $_POST["data"];
    $area = $_POST["area"];
    $descricao = $_POST["descricao"];


    $_con = mysqli_connect('127.0.0.1','root','','pw_projeto');
    if($_con===FALSE) {
        echo "Não foi possível conectar ao Servidor de banco de dados ";
    } else {
        echo "Foi possível conectar ao Servidor de banco de dados ";
        // Exemplo: SQL query
        // $result = mysqli_query($_con, "use bd_escola;");
        $sql = "INSERT INTO colaborador VALUES (null, '$nome', '$email', '$contato', '$cpf', '$data', '$area', '$descricao ');";
    if(mysqli_query($_con, $sql)){
        echo "Novo registro realizado com sucesso";
    } 
        mysqli_close($_con);
    }

?>