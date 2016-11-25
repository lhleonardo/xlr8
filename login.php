<?php
  include("utils/user/auth.php");

  $email = $_POST['email'];
  $senha = $_POST['senha'];


  $resposta = [];

  if (login($email, $senha)) {
    $resposta = array("success" => true);
  } else {
    $resposta = array("success" => false);
  }

  echo json_encode($resposta);
 ?>
