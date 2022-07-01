<?php
  if (isset($filtro)) {
    echo "
      <div style='width: 100%;'>
        <h2>
          Titular $filtro <hr />
          <p>Lorem ipsum ... </p>
        </h2>
      </div>
    ";
  } else {
    echo"
      <div style='width: 100%;'>
        <h2>
          Titular Politico <hr />
          <p>Lorem ipsum ... </p>
        </h2>
      </div>
      <div style='width: 100%;'>
        <h2>
          Titular Deportivo <hr />
          <p>Lorem ipsum ... </p>
        </h2>        </div>
      <div style='width: 100%;'>
        <h2>
          Titular Económico <hr />
          <p>Lorem ipsum ... </p>
        </h2>
      </div>
    ";
  }
?>