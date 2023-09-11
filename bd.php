<?php

  require_once("conexao.php");

  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $endereco = $_POST['endereco'];
  $telefone = $_POST['telefone'];
  $mensagem = $_POST['mensagem'];

  $sql = "INSERT INTO cadastro (nome, email, endereco, telefone, mensagem) VALUES ('$nome', '$email', '$endereco','$telefone', '$mensagem')";
  $result = $mysqli->query($sql);

?>