<?php
  if (isAdmin(1)) :
 ?>
   <li class="dropdown">
     <a href="#" class="dropdown-toggle" data-toggle="dropdown"
        role="button" aria-haspopup="true"
        aria-expanded="false">Gerenciamento <span class="caret"></span>
      </a>
     <ul class="dropdown-menu">
        <li><a href="/view-produtos.php">Produtos</a></li>
        <li><a href="/clientes/view-clientes.php">Clientes</a></li>
        <li><a href="/fornecedores/view-fornecedores.php">Fornecedores</a></li>
        <li><a href="/departamentos/view-departamentos.php">departamentos</a></li>
        <li><a href="/categorias/view-categorias.php">Categorias</a></li>
        <li><a href="/usuarios/view-usuarios.php">Usuários</a></li>
     </ul>
   </li>
 <?php endif; ?>
