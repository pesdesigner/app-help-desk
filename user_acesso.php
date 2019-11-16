<?php

//session_start();

include_once("../../app_help_desk/conexao.php");

    //dados 
    $id = $_SESSION['id'];
    $sql = "SELECT * FROM cadastro WHERE id = '$id'";
    $resultado = mysqli_query($conn, $sql);
    $dados = mysqli_fetch_array($resultado);
    mysqli_close($conn); // fechar a conexao após a consulta
?>