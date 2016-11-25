<li class="dropdown">
   <a class="dropdown-toggle" data-toggle="dropdown">Entrar<b class="caret"></b></a>
   <ul class="dropdown-menu" style="padding: 15px;min-width: 250px;">
      <li>
         <div class="row">
            <div class="col-md-12">
               <form class="form" role="form" method="post" action="login.php" accept-charset="UTF-8" id="login-nav">
                   <div id="login-incorreto" hidden class="alert alert-danger alert-dismissible" role="alert">
                     <button id="fecha-login-incorreto" type="button" class="close" ><span aria-hidden="true">&times;</span></button>
                     <strong>Login incorreto</strong>
                   </div>
                  <div class="form-group">
                     <label class="sr-only" for="exampleInputEmail2">Endereço de e-mail</label>
                     <input type="email" name="email" class="form-control" id="input-email" placeholder="Endereço de e-mail" required>
                  </div>
                  <div class="form-group">
                     <label class="sr-only" for="exampleInputPassword2">Senha</label>
                     <input type="password" name="senha" class="form-control" id="input-password" placeholder="Senha" required>
                  </div>

                  <div class="form-group">
                     <button type="submit" class="btn btn-success btn-block">Entrar</button>
                  </div>
               </form>
            </div>
         </div>
      </li>
   </ul>
</li>
<script type="text/javascript">
  $(document).ready(function(){
    $("#login-nav").submit(function() {
      var dados = $(this).serialize();

      $.post("login.php", dados, function(data, status){
        var $data = $.parseJSON(data);

        if (!$("#login-incorreto").attr("hidden")) {
          $("#login-incorreto").attr("hidden", "");
        }
        console.log($data.success);

        if ($data.success) {
          $("#login-incorreto").attr("hidden", "");
          location.reload();
        } else {
          $("#login-incorreto").removeAttr("hidden");
        }

      });
      return false;
    });
    $("#fecha-login-incorreto").click(function(){
      $("#login-incorreto").attr("hidden", "");
    });
  });
</script>
