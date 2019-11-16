<? require_once "validador_acesso.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Meu cadastro</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
    <h1>Lista de contatos</h1>

    <span id="conteudo"></span>

    <script>
        $(document).ready(function(){
            $.post('listar_usuario.php', function(retorna){
                $("#conteudo").html(retorna);
            });
        })
    </script>


</body>
</html>