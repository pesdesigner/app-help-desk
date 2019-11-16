<?php

session_start();

include_once("../../app_help_desk/conexao.php"); //antes "conexao.php

    $titulo = filter_input(INPUT_POST, 'titulo', FILTER_SANITIZE_STRING);
    $categoria = filter_input(INPUT_POST, 'categoria', FILTER_SANITIZE_STRING);
    $descricao = filter_input(INPUT_POST, 'descricao', FILTER_SANITIZE_STRING);

    // inserir dados na tabela

    $result_chamado = "INSERT INTO chamado (titulo, categoria, descricao, created) VALUES ('$titulo', '$categoria', '$descricao', NOW())";
    $resultado_chamado = mysqli_query($conn, $result_chamado);

    if(mysqli_insert_id($conn)) {
        $_SESSION['msg'] =  "<div class='alert alert-success' role='alert'>
        Chamado cadastrado com sucesso!
      </div>";
        header("Location: abrir_chamado.php");
    } else {
        $_SESSION['msg'] = "<div class='alert alert-danger' role='alert'>
        Chamado não foi cadastrado, tente novamente mais tarde!
      </div>";
        header("Location: abrir_chamado.php");
    }

?>