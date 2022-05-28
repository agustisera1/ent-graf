## Ejercicio 1

Si, son equivalentes. El último elemento del arreglo en el primer caso se toma el valor como clave por defecto.

## Ejercicio 2
- a: "bar" true.
- b: 5942
- c: No hay echos. No hay salidas. 

## Ejercicio 3
- a: Has entrado en esta pagina a las {numero de hora} horas, con {numero minutos} minutos y {numero segundos} segundos, del {fecha DD/MM/AAAA}

- b: 11

## Ejercicio 4
`
<?php
  function comprobar_nombre_usuario($nombre_usuario) { 
    if (strlen($nombre_usuario)<3 || strlen($nombre_usuario)>20) {
        echo $nombre_usuario . " no es válido<br>"; return false;
    }

    $permitidos = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789-_";

    for ($i=0; $i<strlen($nombre_usuario); $i++) {
        if (strpos($permitidos, substr($nombre_usuario,$i,1))===false) {
          echo $nombre_usuario . " no es válido<br>";
          return false;
        }
      }
      
      echo $nombre_usuario . " es válido<br>";
      return true;
    }

  comprobar_nombre_usuario('agustisera1');
  comprobar_nombre_usuario('a');
  comprobar_nombre_usuario('estestringtienemasdeveintecaracteres');
  comprobar_nombre_usuario('***qwe2||');
?>
`
### Salidas:
- agustisera1 es válido
- a no es válido
- estestringtienemasdeveintecaracteres no es válido
- ***qwe2|| no es válido