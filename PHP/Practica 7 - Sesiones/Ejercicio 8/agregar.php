<?php
  session_start();
  $id = $_GET['id'];
  require_once "connection.php";
  $query = "SELECT * FROM catalogo WHERE id = ?";

  $stmt = $connection->prepare($query);
  $stmt->bind_param('i', $id);
  $stmt->execute();

  $rs = $stmt->get_result();
  $producto = $rs->fetch_assoc();
  $carro = isset($_SESSION['carro']) ? $_SESSION['carro'] : null;
  $carro[md5($id)] = array('identificador' => md5($id), 'producto' => $producto['producto'], 'precio' => $producto['precio']);
  $_SESSION['carro'] = $carro;

  $host  = $_SERVER['HTTP_HOST'];
  header("Location: http://$host/practica-7/ejercicio7/");
?>