<?php

//session_start();

include_once("../../app_help_desk/conexao.php");

    //dados 
    $id = $_SESSION['id'];
    $sql = "SELECT * FROM cadastro WHERE id = '$id'";
    $resultado = mysqli_query($conn, $sql);
    $dados = mysqli_fetch_array($resultado);
    mysqli_close($conn); // fechar a conexao após a consulta

/*     echo "<pre>";
    print_r($dados);
    echo "</pre>"; */
?>

<div class="header clearfix">
            <nav>
            <ul class="nav nav-pills float-right">
       
                <li class="nav-link">Olá, <?php echo $dados['nome']; ?></li>

                <li class="nav-item">
                
                    <a href="logoff.php" class="nav-link"> Sair <i class="fas fa-sign-out-alt"></i></a>

                </li>
            </ul>
            </nav>
        <a class="navbar-brand" href="#">
            <img src="images/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
            App Help Desk
        </a>
        
</div>