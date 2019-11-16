<?php
require_once "validador_acesso.php";
?>

<?php include("header.php");?>


    <div class="container">    


    <?php include("exit.php");?>

    <hr>

    <?php include("menu.php");?>

    <div class="container chamado">
    <div class="card-header">
      Abertura de chamado
    </div>
         
    <form method="post" action="registra_chamado.php">
      <div class="form-group">
        <label>Título</label>
        <input name="titulo" type="text" class="form-control" placeholder="Título">
      </div>
      
      <div class="form-group">
        <label>Categoria</label>
        <select name="categoria" class="form-control">
          <option>Criação Usuário</option>
          <option>Impressora</option>
          <option>Hardware</option>
          <option>Software</option>
          <option>Rede</option>
        </select>
      </div>
      
      <div class="form-group">
        <label>Descrição</label>
        <textarea name="descricao" class="form-control" rows="3"></textarea>
      </div>

      <div class="row mt-5">
        <div class="col-6">
          <a href="home.php" class="btn btn-lg btn-warning btn-block">Voltar</a>
        </div>

        <div class="col-6">
          <button class="btn btn-lg btn-info btn-block" type="submit">Abrir</button>
        </div>
      </div>
    </form>
    </div>

    <hr>
</div>

    <?php include("rodape.php");?>