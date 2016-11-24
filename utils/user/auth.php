<?php
  include('/components/database/connection.php');

  function isAdmin($idUsuario) {
    global $conn;
    $statement = $conn->prepare("SELECT * FROM usuario WHERE idUsuario = :idUsuario");
    $statement->bindParam(":idUsuario", $idUsuario);
    $result = $statement->execute();
    $resultado = $statement->fetch(PDO::FETCH_OBJ);

    return $statement->rowCount() && $resultado->admin;
  }

  function login($email, $senha) {
    global $conn;
    $statement = $conn->prepare("SELECT * FROM usuario WHERE email = :email AND senha = :senha");
    $statement->bindParam(":email", $email);
    $statement->bindParam(":senha", $senha);
    $result = $statement->execute();
    $resultado = $statement->fetch(PDO::FETCH_OBJ);

    if ($statement->rowCount()) {
      $_SESSION["usuario"] = $resultado->idusuario;
      return true;
    } else {
      unset($_SESSION["usuario"]);
      return false;
    }
  }

  function logout() {
    unset($_SESSION["usuario"]);
  }
 ?>
