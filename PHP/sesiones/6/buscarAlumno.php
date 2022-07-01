<?php
  if (!isset($_SESSION)) {
    session_start();
  }

  if (isset($_POST['mail'])) {
    $mail = $_POST['mail'];
    $hostname = 'localhost';
    $username = 'root';
    $dbname = 'ejercicio_seis';

    $conn = mysqli_connect($hostname, $username, '', $dbname);
    if (!$conn -> connect_error) {
      $query = "SELECT mail FROM base2 b WHERE b.mail='$mail'";
      $qres = mysqli_query($conn, $query);
      $alumno = mysqli_fetch_array($qres);

      if ($alumno and $alumno['mail']) {
        $_SESSION['mail'] = $alumno['mail'];
        echo "
          <a href='index.php'>Ir a página</a>
        ";
      } else {
        echo "
          Alumno inexistente <br />
          <a href='index.php'>Volver</a><br />
        ";
      }
      mysqli_close($conn);
    } else {
      echo "Error al conectar con la base de datos";
    }
  } else {
    echo "No puede visitar esta página";
  }
?>