<?php
    $result = $conn->query("SELECT * FROM produto");

    $produtos = $result->fetchAll(PDO::FETCH_OBJ);

    if (sizeof($produtos) > 0):
 ?>
    <?php foreach($produtos as $produto): ?>
        <div class="container">
           <div class="row produtos">
             <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                  <img src="<?= empty($produto->imagemUrl) ?  "imagens/nenhuma-foto.png" : $produto->imagemUrl?>" alt="<?= $produto->nome ?>" />
                  <div class="caption text-center">
                    <h3><?= $produto->nome  ?></h3>
                    <p>
                      <ul class="list-unstyled">
                        <li><b>Tamanho:</b> <?= $produto->tamanho ?></li>
                        <li><b>Cor:</b> <?= $produto->cor ?></li>
                      </ul>

                    </p>
                    <p>
                      <a href="#" class="btn btn-primary" role="button">Comprar</a>
                      <a href="#" class="btn btn-default" disabled role="button">R$ <?= $produto->preco ?></a>
                    </p>
                  </div>
                </div>
             </div>
           </div>
        </div>
    <?php endforeach; ?>
<?php else: ?>

  <h1>Nenhum produto foi cadastrado.</h1>

<<?php endif; ?>

          <!-- /.row -->
