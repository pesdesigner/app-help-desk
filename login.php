        <!-- Modal Login -->
        <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalCenterTitle">Entrar na plataforma</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
              </button>
          </div>
          <div class="modal-body">
              <form class="form-horizontal" action="valida_login.php" method="post">
                  <fieldset>
                  
                  <!-- Password input-->
                  <div class="form-group">
                    <label class="col-md-12 control-label" for="senha">E-mail</label>
                    <div class="col-md-12">
                      <input id="email" name="email" type="email" placeholder="Digite seu e-mail" class="form-control input-md" required="">
                      
                    </div>
                  </div>
                  
                  <!-- Text input-->
                  <div class="form-group">
                    <label class="col-md-12 control-label" for="email">Senha</label>  
                    <div class="col-md-12">
                    <input id="senha" name="senha" type="password" placeholder="Digite sua senha" class="form-control input-md" required="">
                      
                    </div>
                  </div>

                  <? if(isset($_GET['login']) && $_GET['login'] == 'erro') { ?>

                    <div class="text-danger">
                      Usuário ou senha inválidos(s)
                    </div>
    
                    <? } ?>
    
                    <? if(isset($_GET['login']) && $_GET['login'] == 'erro2') { ?>
    
                    <div class="text-danger">
                      É necessário fazer o Login para ter acesso!
                    </div>
    
                  <? } ?>
                  
                  <!-- Button (Double) -->
                  <div class="form-group">
                    <label class="col-md-4 control-label" for="login"></label>
                    <div class="col-md-12">
                      <button id="login" type="submit" name="login" class="btn btn-success">Entrar</button>
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#cadastro">Não tenho Cadastro. Cadastrar!</button>
                    </div>
                  </div>
                  
                  </fieldset>
                  </form>
                  
          </div>
          </div>
          </div>
        </div>