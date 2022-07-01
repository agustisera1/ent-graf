<?php
  if (!isset($_SESSION)) {
    session_start();
  } else if ($_SESSION and $_SESSION['mail']) {
    echo "Bienvenido<br />".$_SESSION['mail'];
  } else {
    echo"
      <h3>
        Ingrese correo de alumno a buscar:<br />
      </h3>
      <form action='buscarAlumno.php' method='POST'>
        <input name='mail' placeholder='Correo'/>
        <input type='submit' value='Ir' />
      </form>
    ";
  }
?>