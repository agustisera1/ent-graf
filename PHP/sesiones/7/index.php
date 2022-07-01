<!--
Confeccionar un BUSCADOR de canciones. Para ello deberá crear una base de datos llamada prueba y una tabla denominada buscador con el atributo canciones
-->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>
      Ejercicio 8
    </title>
  </head>
  <body>
    <h3>
    Confeccionar un BUSCADOR de canciones. Para ello deberá crear una base de datos llamada prueba y una tabla denominada buscador con el atributo canciones
    </h3>
    <hr />
    <?php include('connect.php'); ?>
    <form action="buscar.php" method="POST">
      <input name="song" placeholder="Introduzca nombre de canción" />
      <input type="submit" value="Buscar" />
    </form>
  </body>
</html>