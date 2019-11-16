

        <!-- Modal Cadastro-->
        <div class="modal fade" id="cadastro" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">Cadastro de Perfil</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>

        <div class="modal-body">
            <form class="form-horizontal" action="destino.php" method="post">
                <fieldset>
                
               
                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-12 control-label" for="nome">Nome</label>  
                  <div class="col-md-12">
                  <input name="nome" type="text" placeholder="Digite seu nome" class="form-control input-md" required="">
                    
                  </div>
                </div>
                
                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-12 control-label" for="email">E-mail</label>  
                  <div class="col-md-12">
                  <input name="email" type="email" placeholder="Digite seu email" class="form-control input-md" required="">
                  
                  </div>
                </div>
                
                <!-- Text input-->
                <div class="form-group">
                  <label class="col-md-12 control-label" for="tel">Senha</label>  
                  <div class="col-md-6">
                  <input name="senha" type="password" placeholder="Digite a senha" class="form-control input-md">
                    
                  </div>
                </div>
                
                <!-- Multiple Radios -->
                <div class="form-group">
                  <label class="col-md-12 control-label" for="cargo">Informe o cargo</label>
                  <div class="col-md-12">
                  <div class="radio">
                    <label for="cargo-0">
                      <input type="radio" name="cargo" id="cargo-0" value="1" checked="checked">
                      Operacional
                    </label>
                  </div>
                  <div class="radio">
                    <label for="cargo-1">
                      <input type="radio" name="cargo" id="cargo-1" value="2">
                      Gerente
                    </label>
                  </div>
                  </div>
                </div>
                
                <!-- Select Basic -->
                <div class="form-group">
                  <label class="col-md-12 control-label" for="setor">Setor</label>
                  <div class="col-md-6">
                    <select name="setor" class="form-control">
                      <option value="1">Suporte</option>
                      <option value="2">Administrativo</option>
                      <option value="3">Vendas</option>
                    </select>
                  </div>
                </div>
                
                <!-- Button -->
                <div class="form-group">
                  <label class="col-md-12 control-label" for="enviar"></label>
                  <div class="col-md-12">
                    <button type="submit" class="btn btn-success">Enviar</button>

                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#login">
                        Login <i class="fas fa-sign-in-alt"></i>
                    </button>
                  </div>
                </div>
                
                </fieldset>
                </form>
                
        </div>
   
        </div>
        </div>
        </div>