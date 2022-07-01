<!-- Confeccionar una página que simule ser la de un periódico.
La misma debe permitir configurar qué tipo de titular deseamos que aparezca al visitarla, pudiendo ser:
Noticia política, Noticia económica o Noticia deportiva.
Mediante tres objetos de tipo radio, permitir seleccionar qué titular debe mostrar el periódico.
Almacenar en una cookie el tipo de titular que desea ver el cliente. La primera vez que visita el sitio deben aparecer los tres titulares.
Disponer un hipervínculo a una tercer página que borre la cookie creada. -->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Ejercicio 4</title>
  </head>

  <body>
    <h3>
    Confeccionar una página que simule ser la de un periódico.<br/>
    La misma debe permitir configurar qué tipo de titular deseamos que aparezca al visitarla, pudiendo ser:<br/>
    Noticia política, Noticia económica o Noticia deportiva.<br/>
    Mediante tres objetos de tipo radio, permitir seleccionar qué titular debe mostrar el periódico.<br/>
    Almacenar en una cookie el tipo de titular que desea ver el cliente. La primera vez que visita el sitio deben aparecer los tres titulares.<br/>
    Disponer un hipervínculo a una tercer página que borre la cookie creada.<br/>
    </h3>
    <hr />

    <?php
      if (isset($_POST['filtro'])) {
        $filtro = $_POST['filtro'];

        setcookie('filtro', $filtro, time() + 86400);
      } else {
        if (isset($_COOKIE['filtro'])) {
          $filtro = $_COOKIE['filtro'];
        }
      }
    ?>

    <h1 style="text-align: center;">DeporWeb</h1>
    <div style="display: flex; justify-content:center; width: 100%; text-align: center">
      <div style="width: 30%">

        <h2>Filtrar titulares</h2><br />
        <?php
          include('form.php');
        ?>
        <!-- <form action="index.php" method="POST" style="margin-bottom: 20px">
          <label for="politica">Politica</label>
          <input value="politica" name="filtro" type="radio"><br />
    
          <label for="deportiva">Deportiva</label>
          <input value="deportiva" name="filtro" type="radio"><br />
    
          <label for="economica">Económica</label>
          <input value="economica" style="margin-bottom: 20px" name="filtro" type="radio"><br />
    
          <input type="submit" value="Actualizar titulares" />
        </form> -->

        <a href="reset.php">Eliminar preferencias</a>
      </div>

      <div style="width: 70%; background: lightgrey; display: flex; text-align: center;">
        <?php include('titulares.php') ?>
      </div>
    </div>
  </body>
</html>