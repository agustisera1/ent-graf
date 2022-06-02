
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
              ($queryRow['tieneMetro'] == '1') ? $tieneMetro = 'Si' : 'No';
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
// Eliminar
?>

<?php
// Agregar
 function agregarCiudad () {
  if (isset($_POST['agregarCiudad'])) {
    $pais = $_POST['pais'];
    $nombre = $_POST['nombre'];
    $superficie = $_POST['superficie'];
    $habitantes = $_POST['habitantes'];
    ($_POST['metro'] == true) ? $metro = '1' : $metro = '0';

    $con = mysqli_connect('localhost', 'root', '', 'capitales') or die('Error al conectar con la base de datos');
    if ($con) {
      $query = "INSERT INTO `ciudades` ('ciudad', 'pais', 'habitantes', 'superficie', 'tieneMetro') VALUES ('$nombre', '$pais', '$habitantes', '$superficie', '$metro')";
      $queryResult = mysqli_query($con, $query) or die ('Error al ejecutar query de insercion');

      if ($queryResult) echo 'Ciudad agregada.';
      else echo 'No se ha podido agregar la ciudad';

      mysqli_close($con);
    }
  }
}
?>

<?php
// Modificar
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
            <td>Si<input name="metro" type="radio" />No<input name="metro" type="radio" /><td>
          </tr>
          <tr>
            <td></td><td><button name="agregarCiudad" type="submit">Agregar</button></td>
          </tr>
          <table>
      </form>
      <?php agregarCiudad()?>
    </div>
    <hr />

  </body>
</html>