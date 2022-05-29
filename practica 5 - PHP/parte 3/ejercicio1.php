<?php 
  function enviarCorreo() {
    if (isset($_POST['email']) && isset($_POST['cuerpo'])) {
      mail(to: $_POST['email'], subject: 'Correo de prueba ejercicio 1', message: $_POST['cuerpo']);
    } else {
      echo 'Asegúrese de completar todos los campos';
    };
  }
?>

<html>
  <head>
    <title>Practica mail, variables de sesión</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  </head>

  <body>
    <div>
      <h1>
        Ejercicio 1: <br />
        Escribir un script en PHP para poder enviar un correo
        electrónico, con formato HTML, a través del servidor
      </h1>
      <div>
        <form method="POST">
          <input type="email" name="email" placeholder="correo@example.com" /><br />
          <hr />
          <textarea style="margin-bottom: 5px; width: 500px; height: 300px;" name="cuerpo"></textarea><br />
          <button type="submit">Enviar correo</button>

          <?php
            enviarCorreo()
          ?>
        </form>
      </div>
    </div>
  </body>
</html>