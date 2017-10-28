<?php  
$attributes = array('class' => 'form-horizontal', 'id' => 'new_nota');
echo form_open_multipart(base_url('control/notas/create/'),$attributes);
echo form_hidden('nota[id]');
?>
<!--row -->
<div class="row">
	<div class="col-sm-12">
		<div class="white-box">
			<legend><?= $title ?></legend>
				<fieldset>
					<!-- Text input-->
					<div class="control-group">
						<label class="control-label">Titulo</label>
						<div class="controls">
							<input value="<?php echo set_value('titulo'); ?>" class="form-control" type="text" name="titulo" />
							<?php echo form_error('titulo','<p class="error">', '</p>'); ?>
						</div>
					</div>
					<!-- Text input-->
					<div class="control-group">
						<label class="control-label">Descripcion</label>
						<div class="controls">
							<textarea name="descripcion" id="descripcion" class="form-control"><?php echo set_value('descripcion'); ?></textarea>
							<?php echo form_error('descripcion','<p class="error">', '</p>'); ?>
						</div>
					</div>
					<!-- Text input-->
					<div class="control-group">
						<label class="control-label">Fecha_desde</label>
						<div class="controls">
							<input value="<?php echo set_value('fecha_desde'); ?>" class="form-control" type="text" name="fecha_desde" />
							<?php echo form_error('fecha_desde','<p class="error">', '</p>'); ?>
						</div>
					</div>
					<!-- Text input-->
					<div class="control-group">
						<label class="control-label">Fecha_hasta</label>
						<div class="controls">
							<input value="<?php echo set_value('fecha_hasta'); ?>" class="form-control" type="text" name="fecha_hasta" />
							<?php echo form_error('fecha_hasta','<p class="error">', '</p>'); ?>
						</div>
					</div>

					<!-- Text input-->
					<div class="control-group">
						<label class="control-label"></label>
						<div class="controls">
							<button class="btn" type="submit">Crear</button>
						</div>
					</div>
				</fieldset>
			<?= form_close(); ?>
		</div>	
	</div>
</div>
