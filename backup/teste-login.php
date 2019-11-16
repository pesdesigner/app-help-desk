<?php 
    // conexao bd
    require_once 'conexao.php';

    //variável que verifica se a autenticação foi realizada
    $usuario_autenticado = false;
    $usuario_id = null;
    $usuario_perfil_id = null;

   // $perfis = array(1 => 'Administrativo', 2 => 'Usuário');

    //usuarios do sistema

    // Ususarios cadastrados no banco
        //consulta ao banco
        $user_app = "SELECT * ";
        $user_app .= "FROM cadastro ";
        $result = mysqli_query($conn,$user_app);
    
        if(!$result){
            die("Falha ao consultar o banco");
        }
        echo "<pre>";
    //    var_dump($result);
        echo "</pre>";
    
        while($linha = mysqli_fetch_assoc($result)){
            
            $id_user = $linha["id"];
            $email_user = $linha["email"];
            $senha_user = $linha["senha"];
            $cargo_user = $linha["cargo"];
    
                
        if($cargo_user == "Gerente"){
            $perfil_id = 1;
        } else {
            $perfil_id = 2;
        }  
    
        

    $usuarios_app = array(
        array('id' => $id_user, 'email' => $email_user, 'senha' => $senha_user, 'perfil_id' => $perfil_id),
     //   array('id' => 1, 'email' => 'adm@teste.com.br', 'senha' => '123456', 'perfil_id' => 1)
    );

 
    echo "<hr>";

    echo "<pre>";
    var_dump($usuarios_app);
    echo "</pre>";

     }
/*     foreach($usuarios_app as $user) {

        if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']){
            $usuario_autenticado = true;
            $usuario_id = $user['id'];
            $usuario_perfil_id = $user['perfil_id'];
        }
    } */


    

/*     print_r($_POST);

    echo '<br/>';

    echo $_POST['email'];
    echo '<br/>';
    echo $_POST['senha']

 */
?>