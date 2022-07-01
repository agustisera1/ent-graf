<!--
  Confeccionar un CARRITO DE COMPRAS simple, usando Base de Datos. Se debe crear una base de datos con el nombre Compras.
  En dicha base crear una tabla llamada catálogo con los siguientes atributos:  id  producto del tipo varchar de 100
  precio del tipo numérico decimal de 9 entero y 2 decimales.
-->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>
      Ejercicio 8
    </title>
  </head>
  <body>
    <h3>
      Confeccionar un CARRITO DE COMPRAS simple, usando Base de Datos. Se debe crear una base de datos con el nombre Compras.
      En dicha base crear una tabla llamada catálogo con los siguientes atributos:  id  producto del tipo varchar de 100
      precio del tipo numérico decimal de 9 entero y 2 decimales.
    </h3>
    <hr />

    <?php
      include('connect.php');

      if (!$conn->connect_error) {
        $query = "SELECT * from catalogo";
        $rows = mysqli_query($conn, $query);

        echo "
          <table>
          <th>Id producto</th>
          <th>Precio</th>
          <th />
        ";

        while($row = mysqli_fetch_row($rows)) {
          $id = $row[0];
          $precio = $row[1];
          echo "
            <tr>
              <td>$id</td>
              <td>$precio</td>
              <td>
                <input name='$id' type='button' value='agregar al carro'/>
              </td>
            </tr>
          ";
        }

        echo"
          </table>
        ";
      } else {
        echo "Error al conectar con la base de datos.";
      }
    ?>
  </body>
</html>