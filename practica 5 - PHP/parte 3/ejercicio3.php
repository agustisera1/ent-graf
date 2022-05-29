<?php 
  function enviarCorreo() {
    if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
      $url = "https://";   
    } else {
      $url = "http://";   
      $url.= $_SERVER['HTTP_HOST'];   
      $url.= $_SERVER['REQUEST_URI'];
    }

    if (isset($_POST['emailamigo'])) {
      $to = $_POST['emailamigo'];
      $subject = "Un amigo tuyo te invitó a conocer: ".$url;
      $message = "Hola ".$_POST['emailamigo']." Te invito a conocer mi nuevo sitio web";
      mail(to: $to, subject: $subject, message: $message);
      echo "".$_POST['emailamigo']." ha sido invitado a conocer el sitio "."$url";
    }
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
        Ejercicio 3: <br />
        Escribir un script para que un visitante recomiende el sitio a un amigo
      </h1>
      <div>
        <form method="POST">
          <hr />
          <input type="email" name="emailamigo" placeholder="correoamigo@example.com" /><br />
          <hr />
          <button type="submit">Invitar amigo</button>
        </form>

        <?php
          enviarCorreo()
        ?>
      </div>
    </div>
  </body>
</html>