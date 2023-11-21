<?php

    
    $nome = $_POST["nome"];
    $usuario = $_POST["usuario"];
    $nascimento = $_POST["nascimento"];
    $cpf = $_POST["cpf"];
    $celular = $_POST["celular"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];


    $_con = mysqli_connect('127.0.0.1','root','','pw_projeto');
    if($_con===FALSE) {
        echo "Não foi possível conectar ao Servidor de banco de dados ";
    } else {
        echo "Foi possível conectar ao Servidor de banco de dados ";
        // Exemplo: SQL query
        // $result = mysqli_query($_con, "use bd_escola;");
        $sql = "INSERT INTO cliente VALUES (null, '$nome', '$usuario', '$nascimento', '$cpf', '$celular', '$email', '$senha');";
    if(mysqli_query($_con, $sql)){
        echo "Novo registro realizado com sucesso";
    } 
        mysqli_close($_con);
    }

?>
