<?php
  $HOST = "localhost";

  $USER = "root";
  $PASSWORD = "root";

  $DATABASE = "lojavirtual";

  $conn = new PDO('mysql:host=' . $HOST . ';dbname=' . $DATABASE, $USER, $PASSWORD);
 ?>
