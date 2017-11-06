<?php  

$attributes = array('class' => 'form-horizontal', 'id' => 'new_cita');
echo form_open_multipart(base_url('control/citas/create/'),$attributes);

echo form_hidden('cita[id]');

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
			<label class="control-label">Evento_id</label>
			<div class="controls">
			<input value="<?php echo set_value('evento_id'); ?>" class="form-control" type="text" name="evento_id" />
			<?php echo form_error('evento_id','<p class="error">', '</p>'); ?>
			</div>
			</div>
			<!-- Text input-->
			<div class="control-group">
			<label class="control-label">Usuario_id</label>
			<div class="controls">
			<input value="<?php echo set_value('usuario_id'); ?>" class="form-control" type="text" name="usuario_id" />
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