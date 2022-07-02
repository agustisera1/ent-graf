<?php
  $server = "localhost";
  $usuario = "root";
  $password = "";
  $dbname = "compras";

  try {
      $connection = mysqli_connect($server, $usuario, $password, $dbname);
  } catch (Exception $e) {
    die("Fallo conexión");
  }
?>