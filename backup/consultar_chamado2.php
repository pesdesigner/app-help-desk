<? require_once "validador_acesso.php" ?>

<?php include("header.php");?>


    <div class="container">    


    <?php include("exit.php");?>

    <hr>

    <?php include("menu.php");?>
 
        <div class="container chamado">
      
            <div class="card-header">
              Consulta de chamado
            </div>
            
            <div class="card-body">
            <span id="conteudo"></span>

            <script>
            $(document).ready(function(){
                $.post('chamados_bd.php', function(retorna){
                    $("#conteudo").html(retorna);
                });
            })
            </script>
              
            </div>


        <div class="row mt-5">
          <div class="col-12 text-center">
            <a class="btn btn-lg btn-warning btn-block" href="home.php">Voltar</a>
          </div>
        </div>
                  
    <hr>
</div>

<?php include("rodape.php");?>