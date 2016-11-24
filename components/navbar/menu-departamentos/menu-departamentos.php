<?php
  include('components/database/connection.php');

  $result = $conn->query("SELECT *, (SELECT COUNT(*) FROM categoria WHERE idDepartamento = dep.idDepartamento) AS nivel
                        FROM departamento dep");

  $departamentos = $result->fetchAll(PDO::FETCH_OBJ);


 ?>
<li class="dropdown">
  <a href="#" class="dropdown-toggle" data-toggle="dropdown"
     role="button" aria-haspopup="true"
     aria-expanded="false">Departamentos<span class="caret"></span>
   </a>
  <ul class="dropdown-menu">
    <?php foreach ($departamentos as $departamento) : ?>

      <?php
        if ($departamento->nivel > 0):
       ?>
       <li class="dropdown-submenu">
          <a tabindex="-1" href="#"><?= $departamento->nome ?></a>

          <ul class="dropdown-menu">
              <?php
                $sql = "SELECT * FROM categoria WHERE idDepartamento = " . $departamento->idDepartamento;
                $resCat = $conn->query($sql);
                $categorias = $resCat ->fetchAll(PDO::FETCH_OBJ);

                foreach ($categorias as $categoria) :
               ?>
               <li><a href="#"><?= $categoria->nome ?></a></li>

              <?php endforeach; ?>

          </ul>
      </li>
       <?php else: ?>
         <li><a href="#"><?= $item->nome ?></a></li>
       <?php endif; ?>

    <?php endforeach;  ?>

  </ul>
</li>
