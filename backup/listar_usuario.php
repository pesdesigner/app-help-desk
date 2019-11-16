<?php
    include_once "buscar_lista.php";
//consulta o banco de dados
$result_usuario = "SELECT * FROM cadastro ORDER by id DESC";
$resultado_usuario = mysqli_query($conn, $result_usuario);

//verificar se encontrou resultado na tabela usuarios
if(($resultado_usuario) AND ($resultado_usuario->num_rows != 0)){
    ?>
        <table class="table table-striped table-bordered table-hover">
        <thead>
            <tr>
            <th >id</th>
            <th >Nome</th>
            <th >E-mail</th>
            <th >Tel</th>
            <th >Sexo</th>
            <th >Estado</th>
            <th >Mensagem</th>
            </tr>
        </thead>
        <tbody>
    <?php
    while($row_usuario = mysqli_fetch_assoc($resultado_usuario)){
    ?>
        <tr>
            <th><?php echo $row_usuario['id']; ?></th>
            <td><?php echo $row_usuario['nome']; ?></td>
            <td><?php echo $row_usuario['email']; ?></td>
            <td><?php echo $row_usuario['tel']; ?></td>
            <td><?php echo $row_usuario['sexo']; ?></td>
            <td><?php echo $row_usuario['estado']; ?></td>
            <td><?php echo $row_usuario['mensagem']; ?></td>
        </tr>

    <?php

    }?>
  </tbody>
</table>

<?php
} else {
    echo "<div class='alert alert-danger' role='alert'>O sistema ainda não possui nenhum usuário!</div>";
}
