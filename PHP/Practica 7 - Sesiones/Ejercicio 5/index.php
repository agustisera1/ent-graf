<!-- Realizar una página donde carguemos en un formulario el nombre de usuario y clave de un cliente.
Luego realizar una segunda página donde se creen dos variables de sesión.
Y como última página crear una tercera -->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>
      Ejercicio 5
    </title>
  </head>
  <body>
    <h3>
      Realizar una página donde carguemos en un formulario el nombre de usuario y clave de un cliente.
      Luego realizar una segunda página donde se creen dos variables de sesión.
      Y como última página crear una tercera
    </h3>
    <hr />
    <form action="almacenar.php" method="POST">
      <input name="user" placeholder="Nombre de usuario"/>
      <input name="password" placeholder="Contraseña" />
      <input type="submit" value="Almacenar" />
    </form>

  </body>
</html>