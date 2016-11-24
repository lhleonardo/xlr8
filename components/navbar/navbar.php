<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">Loja Virtual</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Início</a></li>
        <?php include('components/navbar/menu-departamentos/menu-departamentos.php') ?>
        <?php include('components/navbar/admin/itens-nav-admin.php') ?>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="cadastrar.php" id="cadastro-usuario">Cadastrar</a></li>
        <?php
          if (isset($_SESSION['usuario'])) {
            include('components/login/autenticado.php');
          } else {
            include('components/login/login.php');
          }
         ?>
      </ul>
    </div>

  </div>
</nav>
