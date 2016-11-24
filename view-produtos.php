<!DOCTYPE html>
<html>
  <head>
    <title>Visualizar produtos</title>
    <?php include("components/head-imports.php") ?>
  </head>
  <body>
    <?php include("components/navbar/navbar.php") ?>
    <div class="container-fluid">
      <div class="jumbotron">
        <h2>Produtos cadastrados</h2>
        <a href="/cadastro-produto.php" class="btn btn-primary btn-large" role="button">Adicionar novo produto</a>
      </div>
      <div class="row">
          <?php if (isAdmin(1)) : ?>
              <?php include('components/produtos/view-produtos.php') ?>
           <?php else: ?>
             <h2>Não é administrador</h2>
          <?php endif; ?>
      </div>
    </div>
    <?php include("components/body-imports.php") ?>
  </body>
</html>
