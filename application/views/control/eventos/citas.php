<div class="row">
  <div class="col-sm-12">
    <div class="white-box">
      <h3 class="box-title"><?= $title; ?></h3>
    <?php
    if($usuarios)
    {
      foreach ($usuarios as $usuario) {

        // USuario
        // Taer de usuario citas las citas qu con su id y join de uuario para traer sus datos (nombre apellio nick)
        echo '
        <div class="card">
          <div class="card-body">
            <div class="row">
              <h4>'.$usuario->nombre.'</h4>
              <div class="col-md-12">';
                foreach ($usuarios as $cita) {
                  echo '<p> '.$cita->nombre.' '.$cita->apellido.' <span class="pull-right"> No ...</span></p>';
                }
            echo '</div>
            </div>
          </div>
          <div class="card-footer">
            <div class="pull-right">
              <a href="#">Editar</a>
            </div>
          </div>
        </div>';
      }
    }else {
      echo '<p>No hay usuarios asociados. </p>';
    }


    ?>
    </div>
  </div>
</div>
