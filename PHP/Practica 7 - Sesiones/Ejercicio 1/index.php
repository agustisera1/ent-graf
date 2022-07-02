<!-- Crear una página que puede configurarse con distintos estilos CSS.
El usuario es quien decide qué aspecto desea que tenga la página, por medio de un formulario.
Luego la página es capaz de recordar, entre los distintos accesos que realice el usuario, el aspecto que había elegido para mostrar la web. -->

<!DOCTYPE html>
<html>
  <head lang="en">
    <meta charset="utf-8">
    <title>
      <?php
        if (isset($_COOKIE['hoja'])) {
          echo $_COOKIE['hoja'];
        } else echo "Ejercicio 1";
      ?>
    </title>
    <?php
      if (isset($_COOKIE['hoja'])) {
        $estilo = $_COOKIE['hoja'];
        echo "<link rel='stylesheet' type='text/css' href='$estilo' />";
      }
    ?>
  </head>
  <body class="body">
    <h2>
      Crear una página que puede configurarse con distintos estilos CSS.<br />
      El usuario es quien decide qué aspecto desea que tenga la página, por medio de un formulario.<br />
      Luego la página es capaz de recordar, entre los distintos accesos que realice el usuario, el aspecto que había elegido para mostrar la web.<br />
    </h2>
    <hr />
    <form action="seleccionarHoja.php" method="POST">
      <select name="hoja" id="hoja">
        <option value="styles1.css">Hoja de estilos 1</option>
        <option value="styles2.css">Hoja de estilos 2</option>
        <option value="styles3.css">Hoja de estilos 3</option>
      </select>
      <input type="submit" value="Seleccionar">
    </form>
  </body>
</html>