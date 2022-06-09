<!DOCTYPE html>
<html lang="en">

<?php
    session_start();
?>

<html>
  <head>
    <title>Practica mail, variables de sesión</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  </head>
  <body>
        <h1>
          Ejercicio 4: <br />
          Contar las páginas visitadas por un usuario durante su sesión.
        </h1>
      <?php
          if (!isset($_SESSION['count'])) $_SESSION['count'] = 1;
          else $_SESSION['count']++;
      ?>
      <p>Has visitado este sitio <span><?php echo $_SESSION['count']?></span> veces</p>
  </body>
</html>