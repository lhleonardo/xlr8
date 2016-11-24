<?php
  session_start();

  $logado = false;
  $mensagem = "Você não está autenticado";

  if ($_SESSION['usuario_logado']) {
    $logado = true;
    $mensagem = "Bem-vindo, " . $_SESSION['usuario_nome'] . ".";
  }
?>
