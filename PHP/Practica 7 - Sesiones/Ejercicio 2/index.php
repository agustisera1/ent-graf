<!DOCTYPE html>
  <head lang=es>
    <title>
      Ejercicio 2 Sesiones
    </title>
  </head>
  <meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
  <html>
    <body>
      <h1>
        Contador de visitas
      </h1>
      <hr />
      <h2>
        <?php
          include('cookie.php');
          if (isset($_COOKIE['visitas'])) echo $_COOKIE['visitas'];
          else echo 'Bienvenido, esta es la primera vez que visitas la página';
        ?>
      </h2>
    </body>
  </html>