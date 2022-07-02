<?php
  session_start();
  include("connect.php");
  $carro = isset($_SESSION['carro']) ? $_SESSION['carro'] : false;
  $query = "SELECT * FROM catalogo";
  $rs = $connection->query($query);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="utf-8">
      <title>Ejercicio 8</title>
  </head>
  <body>
      <table text-align="center">
          <tr>
              <th>Producto</th>
              <th>Precio</th>
              <th></th>
          </tr>
          <?php
          foreach ($rs as $producto) {
          ?>
              <tr>
                  <td><?= $producto['producto'] ?></td>
                  <td><?= $producto['precio'] ?></td>
                  <td>
                      <?php
                      if (!$carro || !isset($carro[md5($producto['id'])]['identificador']) || $carro[md5($producto['id'])]['identificador'] != md5($producto['id'])) {
                      ?>
                          <a href="agregar.php?id=<?= $producto['id'] ?>">Agregar al carrito</a>
                      <?php
                      } else {
                      ?>
                          <a href="borrar.php?id=<?= $producto['id'] ?>">Borrar del carrito</a>
                      <?php
                      }
                      ?>
                  </td>
              </tr>
          <?php
          }
          ?>
      </table>
      <a href="carrito.php">Finalizar compra</a>
  </body>
</html>