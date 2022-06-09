
<?php
// Consulta
  function consultarCiudades() {
    if (isset($_POST['getCiudades'])) {
      $con = mysqli_connect('localhost', 'root', '', 'capitales') or die('Error al conectar con la base de datos');
      if ($con) {
        $query = "SELECT * FROM `ciudades`";
        $queryResult = mysqli_query($con, $query) or die ('Error al ejecutar query');

        echo "
          <table style='width: 700px'>
            <th>Pais</th>
            <th>Ciudad</th>
            <th>Habitantes</th>
            <th>Superficie</th>
            <th>Tiene metro?</th>
          ";
          if ($queryResult && $queryResult -> num_rows >= 1) {
            while($queryRow = mysqli_fetch_array($queryResult)) {
              $pais = $queryRow['pais'];
              $ciudad = $queryRow['ciudad'];
              $habitantes = $queryRow['habitantes'];
              $superficie = $queryRow['superficie'];
              ($queryRow['tieneMetro'] == '1') ? $tieneMetro = 'Si' : $tieneMetro = 'No';
              echo "
              <tr style='text-align: center;'>
                <td>$pais</td>
                <td>$ciudad</td>
                <td>$habitantes</td>
                <td>$superficie</td>
                <td>$tieneMetro</td>
              </tr>
              ";
            };
          } else echo "No hay ciudades registradas";
        echo "<table>";
        mysqli_close($con);
      }
    }
  }
?>

<?php
// Agregar
 function agregarCiudad() {
  if (isset($_POST['agregarCiudad'])) {
    $pais = $_POST['pais'];
    $nombre = $_POST['nombre'];
    $superficie = $_POST['superficie'];
    $habitantes = $_POST['habitantes'];
    $metro = $_POST['metro'];

    $con = mysqli_connect('localhost', 'root', '', 'capitales') or die('Error al conectar con la base de datos');
    if ($con) {
      $query = "INSERT INTO `ciudades` (`id`, `ciudad`, `pais`, `habitantes`, `superficie`, `tieneMetro`) VALUES (NULL, '$nombre', '$pais', '$habitantes', '$superficie', '$metro');";
      $queryResult = mysqli_query($con, $query);

      if ($queryResult) echo 'Ciudad agregada.';
      else echo 'No se ha podido agregar la ciudad';

      mysqli_close($con);
    }
  }
}
?>

<?php
  // Modificar
  function modificarCiudad() {
    if (isset($_POST['modificarCiudad']) && isset($_POST['id'])) {
      $id = $_POST['id'];
      $con = mysqli_connect('localhost', 'root', '', 'capitales') or die('Error al conectar con la base de datos');
      $query = "SELECT * from `ciudades` WHERE id=$id";
      $fila = mysqli_query($con, $query) -> fetch_array();


      ($_POST['nombre'] !== '' && $_POST['nombre'] !== $fila['ciudad']) ? $ciudad = $_POST['nombre'] : $ciudad = $fila['ciudad'];
      ($_POST['pais'] !== '' && $_POST['pais'] !== $fila['pais']) ? $pais = $_POST['pais'] : $pais = $fila['pais'];
      ($_POST['habitantes'] !== '' && $_POST['habitantes'] !== $fila['habitantes']) ? $habitantes = $_POST['habitantes'] : $habitantes = $fila['habitantes'];
      ($_POST['superficie'] !== '' && $_POST['superficie'] !== $fila['superficie']) ? $superficie = $_POST['superficie'] : $superficie = $fila['superficie'];

      $updateQuery = "UPDATE `ciudades` SET pais='$pais',habitantes='$habitantes',superficie='$superficie',ciudad='$ciudad' WHERE id=$id";
      echo "$updateQuery <br />";
      $updateRes = mysqli_query($con, $updateQuery);

      if ($updateRes) echo "Modificación exitosa";
      else echo "Hubo un error al actualizar la ciudad";

      echo "<br />";
      mysqli_close($con);
    }
  }
  
  function crearCampos() {
    $query = "SELECT * FROM `ciudades`";
    $con = mysqli_connect('localhost', 'root', '', 'capitales') or die('Error al conectar con la base de datos');
    if ($con) {
      $queryResult = mysqli_query($con, $query) or die ('Error al ejecutar query');
      if ($queryResult && $queryResult -> num_rows >= 1) {
        echo "<select name='id'>";
        while($queryRow = mysqli_fetch_array($queryResult)) {
          $id = $queryRow['id'];
          $pais = $queryRow['pais'];
          $ciudad = $queryRow['ciudad'];
          echo "
          <option value=$id>
            $ciudad ($pais)
          </option>
          ";
        };
        echo "</select>";
        echo "
        <tr>
          <td><span>Nombre Pais</span></td><td><input name='pais' type='text' /><td>
        </tr>
        <tr>
          <td><span>Nombre Ciudad</span></td><td><input name='nombre' type='text' /><td>
        </tr>
        <tr>
          <td><span>Cantidad de habitantes</span></td><td><input name='habitantes' type='number' /><td>
        </tr>
        <tr>
          <td><span>Superficie</span></td><td><input name='superficie' type='text' /><td>
        </tr>
        <tr>
          <td><span>Tiene metro? (S/N)</span></td>
          <td>Si<input name='metro' type='radio' value='1' />No<input name='metro' type='radio' value='0' /><td>
        </tr>
        ";
      } else echo "No hay ciudades para modificar";
      mysqli_close($con);
    } else echo "Error al cargar las ciudades";
  }
?>

<?php
// Eliminar
  function crearSelectorCiudad() {
    $query = "SELECT * FROM `ciudades`";
    $con = mysqli_connect('localhost', 'root', '', 'capitales') or die('Error al conectar con la base de datos');
    if ($con) {
      $queryResult = mysqli_query($con, $query) or die ('Error al ejecutar query');
      if ($queryResult && $queryResult -> num_rows >= 1) {
        echo "<select name='id'>";
        while($queryRow = mysqli_fetch_array($queryResult)) {
          $id = $queryRow['id'];
          $pais = $queryRow['pais'];
          $ciudad = $queryRow['ciudad'];
          echo "
          <option value=$id>
            $ciudad ($pais)
          </option>
          ";
        };
        echo "</select>";
      } else echo "No hay ciudades para eliminar";
      mysqli_close($con);
    } else echo "Error al cargar las ciudades";
  }

  function eliminarCiudad() {
    if (isset($_POST['eliminarCiudad'])) {
      $id = $_POST['id']; 
      $con = mysqli_connect('localhost', 'root', '', 'capitales') or die('Error al conectar con la base de datos');
      if ($con) {
        $query = "DELETE FROM ciudades WHERE id='$id';";
        $queryResult = mysqli_query($con, $query);
  
        if ($queryResult) {
          unset($_POST);
          echo 'Ciudad eliminada';
        }
        else echo 'No se ha podido eliminar la ciudad';
  
        mysqli_close($con);
      }
    }
  }
?>

<html>
<head>
    <title>Practica Conexión a base de datos</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  </head>

  <body>
    <div>
      <h1>Click para ver la lista de ciudades</h1>
      <form method="POST">
        <button name="getCiudades" type="submit">Consultar ciudades</button>
        <button type="submit">Limpiar</button>
      </form>
      <?php consultarCiudades()?>
    </div>
    <hr />

    <div>
      <h1>Agregar ciudad</h1>
      <form method="POST">
        <table>
          <tr>
            <td><span>Nombre Pais</span></td><td><input name="pais" type="text" /><td>
          </tr>
          <tr>
            <td><span>Nombre Ciudad</span></td><td><input name="nombre" type="text" /><td>
          </tr>
          <tr>
            <td><span>Cantidad de habitantes</span></td><td><input name="habitantes" type="number" /><td>
          </tr>
          <tr>
            <td><span>Superficie</span></td><td><input name="superficie" type="text" /><td>
          </tr>
          <tr>
            <td><span>Tiene metro? (S/N)</span></td>
            <td>Si<input name="metro" type="radio" value="1" />No<input name="metro" type="radio" value="0" /><td>
          </tr>
          <tr>
            <td></td><td><button name="agregarCiudad" type="submit">Agregar</button></td>
          </tr>
          <table>
      </form>
      <?php agregarCiudad()?>
    </div>
    <hr />

    <div>
      <h1>Modificar ciudad</h1>
      <form method="POST">
        <table>
          <?php crearCampos()?>
          <tr> <td></td><td><button name='modificarCiudad' type='submit'>Modificar</button></td></tr>
        </table>
      </form>
      <?php modificarCiudad()?>
    </div>
    <hr />

    <div>
      <h1>Eliminar ciudad</h1>
      <form method="POST">
        <div>
          <?php crearSelectorCiudad()?>
          <tr> <td></td><td><button name='eliminarCiudad' type='submit'>Confirmar</button></td></tr>
        </div>
      </form>
      <?php eliminarCiudad()?>
    </div>
    <hr />

  </body>
</html>