<?php
  if(!isset($_COOKIE['visitas'])) {
    $visitas = 1;
    setcookie('visitas', $visitas);
  } else {
    $visitas = $_COOKIE['visitas'] + 1;
    setcookie('visitas', $visitas);
  }
?>