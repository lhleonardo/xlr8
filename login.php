<?php
  include("utils/user/auth.php");

  $email = $_POST['email'];
  $senha = $_POST['senha'];

  if (login($email, $senha)) {
    header("location: index.php");
  } else {
    header("location: incorrect-user.php");
  }
 ?>
