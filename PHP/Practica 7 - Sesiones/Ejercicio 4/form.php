<?php
  echo "
    <form action='index.php' method='POST' style='margin-bottom: 20px'>
      <label for='politica'>Politica</label>
      <input value='politica' name='filtro' type='radio'><br />

      <label for='deportiva'>Deportiva</label>
      <input value='deportiva' name='filtro' type='radio'><br />

      <label for='economica'>Económica</label>
      <input value='economica' style='margin-bottom: 20px' name='filtro' type='radio'><br />

      <input type='submit' value='Actualizar titulares' />
    </form>
  ";
?>