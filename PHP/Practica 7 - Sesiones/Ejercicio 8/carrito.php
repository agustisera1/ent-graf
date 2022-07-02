<?php
  session_start();
  $carro = $_SESSION['carro'];
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
            <td>Producto</td>
            <td>Precio</td>
            <td>Borrar</td>
        </tr>
        <?php
        $suma = 0;
        foreach ($carro as $producto) {
        ?>
            <tr>
                <td><?= $producto['producto'] ?></td>
                <td><?= $producto['precio'] ?></td>
            </tr>
        <?php
            $suma += $producto['precio'];
        }
        ?>
        <tr>
            <td>Total: <?= $suma ?></td>
        </tr>
    </table>
    <a href="index.php">Seguir seleccionando productos</a>
    <br>
    <a href="finalizar.php">Finalizar compra</a>
</body>
</html>