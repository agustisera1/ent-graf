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
    Confeccionar un BUSCADOR de canciones. Para ello deberá crear una base de datos llamada prueba y una tabla denominada buscador con el atributo canciones
    </h3>
    <hr />
    <?php include('connect.php'); ?>
      <?php
        if(isset($_POST['song'])) {
          $name = $_POST['song'];
          $query = "SELECT * FROM `buscador` WHERE name OR artist OR album LIKE '%$name%'";

          $rows = mysqli_query($con, $query);

          if ($rows -> num_rows > 0) {
            echo "
              <table>
                <th>Nombre</th>
                <th>Artista</th>
                <th>Album</th>
            ";
            while($row = mysqli_fetch_array($rows)) {
              $nombre = $row['name'];
              $artista = $row['artist'];
              $album = $row['album'];
              echo "
                <tr>
                  <td>$nombre</td>
                  <td>$artista</td>
                  <td>$album</td>
                </tr>
              ";
            }
            echo "
              </table><br />
              <a href='index.php'>Realizar otra búsqueda</a><br />
            ";
          } else {
            echo "
              <span>No se han encontrado resultados</span> <br />
              <a href='index.php'>Realizar otra búsqueda</a><br />
              ";
          }
        } else {
          echo "Ocurrió un error al ingresar la búsqueda";
        }
      ?>
    <?php
      mysqli_close($con);
    ?>
  </body>
</html>