<?php
  if (isset($_COOKIE['filtro'])) {
    setcookie('filtro', '', time() - 3600);
  }

  echo "
  <html>
    <body>
      <h1>
        Preferencias eliminadas.
      </h1>
      <a href='index.php'>Volver</a>
    </body>
  </html>
  ";
?>