<?php
  require_once('config.php');

  session_start();

  try {

    $conn = new PDO("mysql:host=". DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASSWORD);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

  } catch (PDOException $e){

    print "Erro: " . $e->getMessage() . "<br/>";
    die();

  }
?>