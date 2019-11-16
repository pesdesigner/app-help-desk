<? require_once "validador_acesso.php" ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP - página dinâmica</title>
    <link
    rel="stylesheet"
    href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
    crossorigin="anonymous"
  />


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

</head>
<body>


    <div class="container">    


    <?php include("exit.php");?>

    <hr>

    <?php include("menu.php");?>


    <div class="container chamado">
      
            <div class="card-header">
              <h2>Usuários do sistema</h2>
            </div>
            
            <div class="card-body">
       
                <div class=" mb-3 bg-light">
                  <div class="card-body">
                    <!-- <h5 class="card-title">Usuários cadastrados</h5> -->
                    <span id="conteudo"></span>

                    <script>
                    $(document).ready(function(){
                        $.post('buscar_usuarios.php', function(retorna){
                            $("#conteudo").html(retorna);
                        });
                    })
                  </script>

                  </div>
                </div>

              <div class="row mt-5">
                <div class="col-12 text-center">
                  <a class="btn btn-lg btn-warning btn-block" href="home.php">Voltar</a>
                </div>
              </div>
                  
    <hr>
    </div>

<footer class="footer">
          <p>© Company 2019</p>
</footer>


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</body>
</html>