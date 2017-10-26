<?php  

$attributes = array('class' => 'form-horizontal', 'id' => 'new_lugar');
echo form_open_multipart(base_url('control/lugares/create/'),$attributes);

echo form_hidden('lugar[id]');

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
			<label class="control-label">Nombre</label>
			<div class="controls">
			<input value="<?php echo set_value('nombre'); ?>" class="form-control" type="text" name="nombre" />
			<?php echo form_error('nombre','<p class="error">', '</p>'); ?>
			</div>
			</div>
			<!-- Text input-->
			<div class="control-group">
			<label class="control-label">Direccion</label>
			<div class="controls">
			<input value="<?php echo set_value('direccion'); ?>" class="form-control" type="text" name="direccion" />
			<?php echo form_error('direccion','<p class="error">', '</p>'); ?>
			</div>
			</div>
			<!-- Text input-->
			<div class="control-group">
			<label class="control-label">Telefono</label>
			<div class="controls">
			<input value="<?php echo set_value('telefono'); ?>" class="form-control" type="text" name="telefono" />
			<?php echo form_error('telefono','<p class="error">', '</p>'); ?>
			</div>
			</div>
			<!-- Text input-->
			<div class="control-group">
			<label class="control-label">Link</label>
			<div class="controls">
			<input value="<?php echo set_value('link'); ?>" class="form-control" type="text" name="link" />
			<?php echo form_error('link','<p class="error">', '</p>'); ?>
			</div>
			</div>
			<!-- Text input-->
			<div class="control-group">
			<label class="control-label">Visible</label>
			<div class="controls">
			<input value="<?php echo set_value('visible'); ?>" class="form-control" type="text" name="visible" />
			<?php echo form_error('visible','<p class="error">', '</p>'); ?>
			</div>
			</div>
			<!-- Text input-->
			<div class="control-group">
			<label class="control-label">Beneficio</label>
			<div class="controls">
			<input value="<?php echo set_value('beneficio'); ?>" class="form-control" type="text" name="beneficio" />
			<?php echo form_error('beneficio','<p class="error">', '</p>'); ?>
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