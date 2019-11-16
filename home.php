<?php

require_once "validador_acesso.php";

?>

<?php include("header.php"); ?>

    <div class="container">

<?php include("exit.php"); ?>

    <hr>

    <?php include("menu.php");?>

    <div class="jumbotron">
      
      
    <div class="container">    
      <div class="row">

    
                <div class="col-4 d-flex justify-content-center text-center">
                  <a href="abrir_chamado.php">
                  <img src="images/formulario_abrir_chamado.png" width="70" height="70">
                  <br>
                  <p> Abrir Chamado</p>
                  </a>
                </div>
                <div class="col-4 d-flex justify-content-center text-center">
                  <a href="consultar_chamado.php">
                  <img src="images/formulario_consultar_chamado.png" width="70" height="70">
                  <br>
                  <p> Consultar Chamado</p>
                  
                  </a>
                  
                </div>

                <div class="col-4 d-flex justify-content-center text-center">
                  <a href="listar_usuarios.php">
                  <img src="images/formulario_abrir_chamado.png" width="70" height="70">
                  <br>
                  <p> Usuários Cadastro</p>
                  
                  </a>
                  
                </div>
    
        </div>
    </div>
  
    </div> <!-- /container -->

        <hr>
  
    <?php include("rodape.php");?>
  
