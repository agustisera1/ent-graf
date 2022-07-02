<?php
  if (isset($_COOKIE['user'])) {
    $user = $_COOKIE['user'];
    echo "Usuario anterior <br />
    <input style='margin-bottom: 5px;' name='user' value='$user'><br />
    <input style='margin-bottom: 5px;' type='submit' value='Actualizar cookie'/>";
  } else {
    echo "Ingrese nombre de usuario <br />
    <input style='margin-bottom: 5px;' name='user'><br />
    <input style='margin-bottom: 5px;' type='submit' value='Crear cookie'/>";
  }
?>