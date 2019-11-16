<?php
    session_start();

    //montagem do texto
    $titulo = str_replace('#', '-', $_POST['titulo']);
    $categoria = str_replace('#', '-', $_POST['categoria']);
    $descricao = str_replace('#', '-', $_POST['descricao']);

    //implode('#', $_POST);  fazer teste

    $texto = $_SESSION['id'] .' # '. $titulo .' # '. $categoria .' # '. $descricao . PHP_EOL;

    //abrindo arquivo
    $arquivo = fopen('../../app_help_desk/arquivo.txt', 'a');
    //criando texto
    fwrite($arquivo, $texto);
    //fechando
    fclose($arquivo);

    header('Location: abrir_chamado.php');

   // echo $texto;

?>

<?php

session_start();

include_once("../../app_help_desk/conexao.php"); //antes "conexao.php

    $nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $tel = filter_input(INPUT_POST, 'tel', FILTER_SANITIZE_STRING);
    $s = filter_input(INPUT_POST, 'sexo', FILTER_SANITIZE_STRING);



       $mensagem = filter_input(INPUT_POST, 'mensagem', FILTER_SANITIZE_STRING);

    // inserir dados na tabela

    $result_cadastro = "INSERT INTO cadastro (nome, email, tel, sexo, estado, mensagem, created) VALUES ('$nome', '$email', '$tel', '$sexo', '$estado', '$mensagem', NOW())";
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