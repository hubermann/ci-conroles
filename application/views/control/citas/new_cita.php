<?php  

$attributes = array('class' => 'form-horizontal', 'id' => 'new_cita');
echo form_open_multipart(base_url('control/citas/create/'),$attributes);

echo form_hidden('cita[id]');

?>
<legend><?php echo $title ?></legend>
<div class="well well-large well-transparent">


			<!-- Text input-->
			<div class="control-group">
			<label class="control-label">Evento</label>
				<div class="controls">
					
					<select name="evento_id" id="evento_id">
					<?php  
					$eventos = $this->evento->get_records_menu();
					if($eventos){

						foreach ($eventos as $value) {
							echo '<option value="'.$value->id.'">'.$value->nombre.' </option>';
						}
					}
					?>
					</select>

					<?php echo form_error('usuario_id','<p class="error">', '</p>'); ?>
				</div>
			</div>
			<!-- Text input-->
			<div class="control-group">
			<label class="control-label">Usuario</label>
				<div class="controls">
					
					<select name="usuario_id" id="usuario_id">
					<?php  
					$usuarios = $this->usuario->get_records_menu();
					if($usuarios){

						foreach ($usuarios as $value) {
							echo '<option value="'.$value->id.'">'.$value->apellido.' '.$value->nombre.' ('.$value->edad.')</option>';
						}
					}
					?>
					</select>

					<?php echo form_error('usuario_id','<p class="error">', '</p>'); ?>
				</div>
			</div>
			<!-- Text input-->
			<div class="control-group">
			<label class="control-label">Cita</label>
			<div class="controls">
			<input value="<?php echo set_value('cita'); ?>" class="form-control" type="text" name="cita" />
			<?php echo form_error('cita','<p class="error">', '</p>'); ?>
			</div>
			</div>
			<!-- Text input-->
			<div class="control-group">
			<label class="control-label">Clasificacion_id</label>
			<div class="controls">
			<input value="<?php echo set_value('clasificacion_id'); ?>" class="form-control" type="text" name="clasificacion_id" />
			<?php echo form_error('clasificacion_id','<p class="error">', '</p>'); ?>
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
