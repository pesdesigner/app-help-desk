<?php 

    //abrir conexao
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $dbname = "pagina_dinamica_php"; //formulario

    //criar conexao
    $conn = mysqli_connect($servidor,$usuario,$senha,$dbname);

     // 2 - testar conexao
     if(mysqli_connect_errno()){
        die("conexão falhou: ".mysqli_connect_errno());
    }


    //consulta ao banco
    $user_app = "SELECT * ";
    $user_app .= "FROM cadastro ";
    $result = mysqli_query($conn,$user_app);

    if(!$result){
        die("Falha ao consultar o banco");
    }
    echo "<pre>";
    var_dump($result);
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

    }

    echo $id_user;
    echo $email_user;
    echo $senha_user;
    echo $cargo_user;
    echo $perfil_id;