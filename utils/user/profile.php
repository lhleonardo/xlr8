<?php
  include('utils/session/session.php');
  include('components/database/connection.php');

  if (!is_session_started()) {
    session_start();
  }

  function getUserName() {
    if (isset($_SESSION['usuario'])) {
      global $conn;
      $sql = "SELECT p.nome FROM usuario u LEFT JOIN pessoa p ON p.idPessoa = u.idpessoa WHERE u.idusuario = :idusuario";
      $stmt = $conn->prepare($sql);
      $stmt->bindParam(":idusuario", $_SESSION['usuario']);
      $stmt->execute();
      $value = $stmt->fetch(PDO::FETCH_OBJ);

      if ($stmt->rowCount()) {
        return $value->nome;
      } else {
        return "Anônimo";
      }
    } else {
      return "Não conectado";
    }
  }
 ?>
