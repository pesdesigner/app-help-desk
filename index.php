  

    <?php include("header.php")?>
  
    <div class="container">
            <div class="header clearfix">
                <nav>
                <ul class="nav nav-pills float-right">
                    <li class="nav-item">
                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#login">
                    Entrar <i class="fas fa-sign-in-alt"></i>
                    </button>
                    </li>
                </ul>
                </nav>
            <a class="navbar-brand" href="#">
                <img src="images/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
                App Help Desk
            </a>
    </div>

    <hr>

    <?php
      include("menu.php");
    ?>
 
    <!-- login modal -->
    <?php include("login.php");?>        
  
      <!-- cadastro modal -->
      <?php include("cadastro.php"); ?>                
       
        <div class="jumbotron">
          <h1 class="display-3">Banco de dados PHP</h1>
          <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
          
          
          <?php
        if(isset($_SESSION['msg'])) {
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
        }
        ?>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#cadastro">
                Cadastre-se
          </button>

         <!-- Button trigger modal -->
         
       </div>
  
        <div class="row marketing">
          <div class="col-lg-6">
            <h4>Sobre a empresa</h4>
            <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>
  
            
            <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>
  
            
            <p>Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
          </div>

        </div>

      <hr>

      </div> <!-- /container -->

      <?php
        include("rodape.php")
      ?>


