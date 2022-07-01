<!-- Confeccionar un formulario que solicite ingresar el mail de un alumno.
Si el mail existe en la tabla alumnos, rescatar su nombre y almacenarlo en una variable de sesión.
Además disponer un hipervínculo a una tercera página que verifique si existe
la variable de sesión y de la bienvenida al alumno, en caso contrario mostrar
un mensaje indicando que no puede visitar esta página
Para la realización del ejercicio crear una base de datos con el nombre base2. La misma debe tener
una tabla denominada alumnos con atributos: codigo, nombre, codigocurso, mail.-->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>
      Ejercicio 6
    </title>
  </head>
  <body>
    <?php
      if (!isset($_SESSION)) {
        session_start();
      }
    ?>
    <h3>
      Confeccionar un formulario que solicite ingresar el mail de un alumno.
      Si el mail existe en la tabla alumnos, rescatar su nombre y almacenarlo en una variable de sesión.
      Además disponer un hipervínculo a una tercera página que verifique si existe
      la variable de sesión y de la bienvenida al alumno, en caso contrario mostrar
      un mensaje indicando que no puede visitar esta página
      Para la realización del ejercicio crear una base de datos con el nombre base2. La misma debe tener
      una tabla denominada alumnos con atributos: codigo, nombre, codigocurso, mail.
    </h3>
    <hr />
    <?php
      include('landing.php');
    ?>
  </body>
</html>