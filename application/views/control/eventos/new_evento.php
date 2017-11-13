<?php  

$attributes = array('class' => 'form-horizontal', 'id' => 'new_evento');
echo form_open_multipart(base_url('control/eventos/create/'),$attributes);

echo form_hidden('evento[id]');

?>
<legend><?php echo $title ?></legend>
<div class="well well-large well-transparent">


<!-- Text input-->
<!--
<div class="control-group">
<label class="control-label">Categoria</label>
	<div class="controls">
		
		<select name="categoria_id" id="categoria_id">
		<?php  
		/*
		$categorias = $this->Categoria->get_records_menu();
		if($categorias){

			foreach ($categorias->result() as $value) {
				echo '<option value="'.$value->id.'">'.$value->nombre.'</option>';
			}
		}
		*/
		?>
		</select>

		<?php echo form_error('categoria_id','<p class="error">', '</p>'); ?>
	</div>
</div>
-->
			<!-- Text input-->
			<div class="control-group">
			<label class="control-label">Categoria_id</label>
			<div class="controls">
			<input value="<?php echo set_value('categoria_id'); ?>" class="form-control" type="text" name="categoria_id" />
			<?php echo form_error('categoria_id','<p class="error">', '</p>'); ?>
			</div>
			</div>
			<!-- Text input-->
			<div class="control-group">
			<label class="control-label">Fecha</label>
			<div class="controls">
			<input value="<?php echo set_value('fecha'); ?>" class="form-control" type="text" name="fecha" />
			<?php echo form_error('fecha','<p class="error">', '</p>'); ?>
			</div>
			</div>
			<!-- Text input-->
			<div class="control-group">
			<label class="control-label">Hora</label>
			<div class="controls">
			<input value="<?php echo set_value('hora'); ?>" class="form-control" type="text" name="hora" />
			<?php echo form_error('hora','<p class="error">', '</p>'); ?>
			</div>
			</div>
			<!-- Text input-->
			<div class="control-group">
			<label class="control-label">Lugar</label>
			<div class="controls">
			<input value="<?php echo set_value('lugar'); ?>" class="form-control" type="text" name="lugar" />
			<?php echo form_error('lugar','<p class="error">', '</p>'); ?>
			</div>
			</div>
			<!-- Text input-->
			<div class="control-group">
			<label class="control-label">Precio</label>
			<div class="controls">
			<input value="<?php echo set_value('precio'); ?>" class="form-control" type="text" name="precio" />
			<?php echo form_error('precio','<p class="error">', '</p>'); ?>
			</div>
			</div>
			<!-- Text input-->
			<div class="control-group">
			<label class="control-label">Precio_hombres</label>
			<div class="controls">
			<input value="<?php echo set_value('precio_hombres'); ?>" class="form-control" type="text" name="precio_hombres" />
			<?php echo form_error('precio_hombres','<p class="error">', '</p>'); ?>
			</div>
			</div>
			<!-- Text input-->
			<div class="control-group">
			<label class="control-label">Edad_minima</label>
			<div class="controls">
			<input value="<?php echo set_value('edad_minima'); ?>" class="form-control" type="text" name="edad_minima" />
			<?php echo form_error('edad_minima','<p class="error">', '</p>'); ?>
			</div>
			</div>
			<!-- Text input-->
			<div class="control-group">
			<label class="control-label">Edad_maxima</label>
			<div class="controls">
			<input value="<?php echo set_value('edad_maxima'); ?>" class="form-control" type="text" name="edad_maxima" />
			<?php echo form_error('edad_maxima','<p class="error">', '</p>'); ?>
			</div>
			</div>
			<!-- Text input-->
			<div class="control-group">
			<label class="control-label">Edad_minina_hombre</label>
			<div class="controls">
			<input value="<?php echo set_value('edad_minina_hombre'); ?>" class="form-control" type="text" name="edad_minina_hombre" />
			<?php echo form_error('edad_minina_hombre','<p class="error">', '</p>'); ?>
			</div>
			</div>
			<!-- Text input-->
			<div class="control-group">
			<label class="control-label">Edad_maxima_hombre</label>
			<div class="controls">
			<input value="<?php echo set_value('edad_maxima_hombre'); ?>" class="form-control" type="text" name="edad_maxima_hombre" />
			<?php echo form_error('edad_maxima_hombre','<p class="error">', '</p>'); ?>
			</div>
			</div>
			<!-- Text input-->
			<div class="control-group">
			<label class="control-label">Estado_hombres</label>
			<div class="controls">
			<input value="<?php echo set_value('estado_hombres'); ?>" class="form-control" type="text" name="estado_hombres" />
			<?php echo form_error('estado_hombres','<p class="error">', '</p>'); ?>
			</div>
			</div>
			<!-- Text input-->
			<div class="control-group">
			<label class="control-label">Estado_mujeres</label>
			<div class="controls">
			<input value="<?php echo set_value('estado_mujeres'); ?>" class="form-control" type="text" name="estado_mujeres" />
			<?php echo form_error('estado_mujeres','<p class="error">', '</p>'); ?>
			</div>
			</div>
			<!-- Text input-->
			<div class="control-group">
			<label class="control-label">Coincidencias_habilitadas</label>
			<div class="controls">
			<input value="<?php echo set_value('coincidencias_habilitadas'); ?>" class="form-control" type="text" name="coincidencias_habilitadas" />
			<?php echo form_error('coincidencias_habilitadas','<p class="error">', '</p>'); ?>
			</div>
			</div>
			<!-- Text input-->
			<div class="control-group">
			<label class="control-label">Tipo_evento</label>
			<div class="controls">
			<input value="<?php echo set_value('tipo_evento'); ?>" class="form-control" type="text" name="tipo_evento" />
			<?php echo form_error('tipo_evento','<p class="error">', '</p>'); ?>
			</div>
			</div>
			<!-- Text input-->
			<div class="control-group">
			<label class="control-label">Localidad</label>
			<div class="controls">
			<input value="<?php echo set_value('localidad'); ?>" class="form-control" type="text" name="localidad" />
			<?php echo form_error('localidad','<p class="error">', '</p>'); ?>
			</div>
			</div>
			<!-- Text input-->
			<div class="control-group">
			<label class="control-label">Duracion_session</label>
			<div class="controls">
			<input value="<?php echo set_value('duracion_session'); ?>" class="form-control" type="text" name="duracion_session" />
			<?php echo form_error('duracion_session','<p class="error">', '</p>'); ?>
			</div>
			</div>
			<!-- Text input-->
			<div class="control-group">
			<label class="control-label">Created_at</label>
			<div class="controls">
			<input value="<?php echo set_value('created_at'); ?>" class="form-control" type="text" name="created_at" />
			<?php echo form_error('created_at','<p class="error">', '</p>'); ?>
			</div>
			</div>
			<!-- Text input-->
			<div class="control-group">
			<label class="control-label">Updated_at</label>
			<div class="controls">
			<input value="<?php echo set_value('updated_at'); ?>" class="form-control" type="text" name="updated_at" />
			<?php echo form_error('updated_at','<p class="error">', '</p>'); ?>
			</div>
			</div>

<div class="control-group">
<label class="control-label"></label>
	<div class="controls">
		<button class="btn" type="submit">Crear</button>
	</div>
</div>



</fieldset>

<?php echo form_close(); ?>

</div>