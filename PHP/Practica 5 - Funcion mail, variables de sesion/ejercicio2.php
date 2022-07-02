<?php 
  function enviarCorreo() {
    if (isset($_POST['cuerpo']) && isset($_SESSION['username'])) {
      $from = $_SESSION['username'];
      $to = 'webmaster@gmail.com';
      $subject = "Consulta de $from";
      $message = "Hola $to, solicito una consulta";
      mail(to: $to, subject: $subject, message: $message);
    } else {
      echo 'Asegúrese de completar todos los campos';
    };
  }
?>

<?php 
  session_start();
  $_SESSION['username'] = 'agustisera1';
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
        Ejercicio 2: <br />
        Confeccionar una página de Contacto que presente un formulario para que los
        visitantes puedan enviar consultas al webmaster
      </h1>
      <div>
        <form method="POST">
          <hr />
          <textarea style="margin-bottom: 5px; width: 500px; height: 300px;" name="cuerpo"></textarea><br />
          <button type="submit">Enviar consulta</button>

          <?php
            enviarCorreo()
          ?>
        </form>
      </div>
    </div>
  </body>
</html>