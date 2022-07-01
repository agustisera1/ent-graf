<?php
  if (isset($_POST['hoja'])) {
    $hoja = $_POST['hoja'];
    setcookie('hoja', $hoja, time() + 86400);
  }

  echo "
    <h2>Hoja seleccionada: $hoja</h2>
    <form action='index.php'>
      <input value='Aplicar cambios' type='submit' />
    </form>
  ";
?>