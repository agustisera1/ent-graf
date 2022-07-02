<?php
  session_start();
  $id = $_GET['id'];
  require_once("connection.php");

  $carro = isset($_SESSION['carro']) ? $_SESSION['carro'] : null;
  unset($carro[md5($id)]);

  $_SESSION['carro'] = $carro;
  $host  = $_SERVER['HTTP_HOST'];
  header("Location: http://$host/practica-7/ejercicio7/");
?>