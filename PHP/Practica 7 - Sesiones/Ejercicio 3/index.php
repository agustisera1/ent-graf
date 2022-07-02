<!-- Crear un formulario que solicite la carga del nombre de usuario.
Cuando se presione un botón crear una cookie para dicho usuario.
Luego cada vez que ingrese al formulario mostrar el último nombre de usuario ingresado. -->

<!DOCTYPE html>
<html>
  <head lang=en>
    <title>Ejercicio 3</title>
    <meta content="text/html" charset="utf-8">
  </head>
  <body>
    <h1>
      Crear un formulario que solicite la carga del nombre de usuario.<br/>
      Cuando se presione un botón, crear una cookie para dicho usuario.<br/>
      Luego cada vez que ingrese al formulario mostrar el último nombre de usuario ingresado.
    </h1>
    <hr />
    <form method="POST" action="cookie.php">
      <?php
        include('input.php');
      ?>
    <form>
  </body>
</html>