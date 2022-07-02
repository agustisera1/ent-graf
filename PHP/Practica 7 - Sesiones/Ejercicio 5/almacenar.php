<?php
  if(!isset($_SESSION)) {
    session_start();
  }

  if(isset($_POST['user']) and isset($_POST['password'])) {  
    $_SESSION['user'] = $_POST['user'];
    $_SESSION['password'] = $_POST['password'];

    echo "
      <div>
        Sesión creada. Dirígase a: <br />
        <a href='recuperar.php'> Recuperar sesión.
      </div>
    ";
  }
?>