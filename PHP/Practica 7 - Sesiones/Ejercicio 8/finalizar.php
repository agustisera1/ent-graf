<?php
  session_start();
  unset($_SESSION['carro']);
  $host  = $_SERVER['HTTP_HOST'];
  header("Location: http://$host/practica-7/ejercicio7/");
?>