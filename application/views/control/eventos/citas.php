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
              <h4>'.$usuario['nickname'].' - '.$usuario['nombre'].' '.$usuario['apellido'].'</h4>
              <div class="col-md-12">';
                foreach ($usuarios as $cita) {
                  echo '<p> '.$cita['nombre'].' '.$cita['apellido'].' <span class="pull-right"> No ...</span></p>
                  <form class="nada" action="'.base_url('control/citas/citas_evento_edit').'" method="post">
                    <input type="hidden" name="evento_id" value="'.$evento_id.'">
                    <input type="hidden" name="usuario_id" value="'.$usuario['usuario_id'].'">


                  ';

                }
            echo '

              </div>
              </div>
            </div>
            <div class="card-footer">
              <div class="pull-right">
                <button type="submit" name="button">Editar</button>
              </div>
            </div>
          </form>
        </div>';
      }
    }else {
      echo '<p>No hay usuarios asociados. </p>';
    }


    ?>
    </div>
  </div>
</div>
