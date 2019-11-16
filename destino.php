<?php

session_start();

include_once("../../app_help_desk/conexao.php"); //antes "conexao.php

    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
    $c = filter_input(INPUT_POST, 'cargo', FILTER_SANITIZE_STRING);
    
    if($c == 1) {
        $cargo = "Operacional";
    } else if($c == 2) {
        $cargo = "Gerente";
    } else {
        $cargo = "Defina o cargo";
    }

    $e = filter_input(INPUT_POST, 'setor', FILTER_SANITIZE_STRING);

    switch ($e) {
        case 1:
            $setor = "Suporte";
            break;
        case 2:
            $setor = "Administrativo";
            break;
        case 3:
            $setor = "Vendas";
            break;
        default: {
            $setor = "Precisa selecionar o setor";
        }
    }

    // inserir dados na tabela

    $result_cadastro = "INSERT INTO cadastro (nome, email, senha, cargo, setor, created) VALUES ('$nome', '$email', '$senha', '$cargo', '$setor', NOW())";
    $resultado_cadastro = mysqli_query($conn, $result_cadastro);

    if(mysqli_insert_id($conn)) {
        $_SESSION['msg'] =  "<div class='alert alert-success' role='alert'>
        Usuário cadastrado com sucesso!
      </div>";
        header("Location: index.php");
    } else {
        $_SESSION['msg'] = "<div class='alert alert-danger' role='alert'>
        Usuário não foi cadastrado, tente mais tarde!
      </div>";
        header("Location: index.php");
    }

?>
