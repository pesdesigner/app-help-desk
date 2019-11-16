<?php
    include_once "buscar_lista.php";
//consulta o banco de dados
$result_chamado = "SELECT * FROM chamado ORDER by id DESC";
$resultado_chamado = mysqli_query($conn, $result_chamado);

//verificar se encontrou resultado na tabela usuarios
if(($resultado_chamado) AND ($resultado_chamado->num_rows != 0)){
    ?>
  
   
    <?php
    while($row_chamado = mysqli_fetch_assoc($resultado_chamado)){
    ?>
      <div class=" mb-3 bg-light">
    <div class="card-body">
      <h5 class="card-title"><?php echo "Título: " . $row_chamado['titulo']; ?></h5>
      <h6 class="card-subtitle mb-2 text-muted"><?php echo "Categoria: " . $row_chamado['categoria']; ?></h6>
      <p class="card-text"><?php echo "Descrição: " . $row_chamado['descricao']; ?></p>
      
   </div>
   </div>
    <?php

    } ?>
  


<?php

} else {
    echo "<div class='alert alert-danger' role='alert'>O sistema ainda não possui nenhum chamado!</div>";
}


