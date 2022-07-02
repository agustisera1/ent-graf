<?php
  if(!isset($_SESSION)) {
    session_start();
  }

  if (isset($_SESSION['user']) and isset($_SESSION['password'])) {
    echo $_SESSION['user'];
    echo $_SESSION['password'];
  }

  else {
    echo "No se pudo recuperar los datos de la sesión";
    echo "<a href='index.php'>Volver a página principal</a>";
  }
?>