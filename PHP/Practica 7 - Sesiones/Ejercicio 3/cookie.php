<?php
  if (isset($_POST['user'])) {
    $user = $_POST['user'];
    setcookie('user', $user, time() + 84000);

    echo "<h2>cookie actualizado: $user<h2 />";
    echo "<form action='index.php'><input type='submit' value='Volver'></form>";
  }
?>