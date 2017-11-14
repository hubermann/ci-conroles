<!-- Text input-->
<div class="control-group">
	<label class="control-label">Provincia</label>
	<div class="controls">
		<?php $options_provincia = [ 1 => 'Buenos Aires',
		2 => 'Capital Federal', 
		3 =>'Catamarca',
		4 =>'Chaco',
		5 =>'Chubut',
		6 =>'Córdoba',
		7 =>'Corrientes',
		8 =>'Entre Ríos',
		9 =>'Formosa',
		10 =>'Jujuy',
		11 =>'La Pampa',
		12 =>'La Rioja',
		13 =>'Mendoza',
		14 =>'Misiones',
		15 =>'Neuquén',
		16 =>'Río Negro',
		17 =>'Salta',
		18 =>'San Juan',
		19 =>'San Luis',
		20 =>'Santa Cruz',
		21 =>'Santa Fe',
		22 =>'Santiago del Estero',
		23=>'Tierra del Fuego',
		24 =>'Tucumán'];
		echo form_dropdown('provincia', $options_provincia);
		?>
	</div>
</div>
<!-- Text input-->
<div class="control-group">
	<label class="control-label">Cod_postal</label>
	<div class="controls">
		<input value="<?php echo $query->cod_postal; ?>" type="text" class="form-control" name="cod_postal" />
		<?php echo form_error('cod_postal','<p class="error">', '</p>'); ?>
	</div>
</div>
<!-- Text input-->
<div class="control-group">
	<label class="control-label">Zodiaco</label>
	<div class="controls">
		<?php $options_zodiaco = ["Aries","Tauro","Géminis","Cáncer","Leo","Virgo","Libra","Escorpio","Sagitario","Capricornio","Acuario","Piscis"]; 
		echo form_dropdown('zodiaco', $options_zodiaco,$query->zodiaco);
		?>
	</div>
</div>
<!-- Text input-->
<div class="control-group">
	<label class="control-label">Estatura</label>
	<div class="controls">
		<input value="<?php echo $query->estatura; ?>" type="text" class="form-control" name="estatura" />
		<?php echo form_error('estatura','<p class="error">', '</p>'); ?>
	</div>
</div>
<!-- Text input-->
<div class="control-group">
	<label class="control-label">Peso</label>
	<div class="controls">
		<input value="<?php echo $query->peso; ?>" type="text" class="form-control" name="peso" />
		<?php echo form_error('peso','<p class="error">', '</p>'); ?>
	</div>
</div>
<!-- Text input-->
<div class="control-group">
	<label class="control-label">Contextura_fisica</label>
	<div class="controls">
		<input value="<?php echo $query->contextura_fisica; ?>" type="text" class="form-control" name="contextura_fisica" />
		<?php echo form_error('contextura_fisica','<p class="error">', '</p>'); ?>
	</div>
</div>
<!-- Text input-->
<div class="control-group">
	<label class="control-label">Color_pelo</label>
	<div class="controls">
		<input value="<?php echo $query->color_pelo; ?>" type="text" class="form-control" name="color_pelo" />
		<?php echo form_error('color_pelo','<p class="error">', '</p>'); ?>
	</div>
</div>
<!-- Text input-->
<div class="control-group">
	<label class="control-label">Color_ojos</label>
	<div class="controls">
		<input value="<?php echo $query->color_ojos; ?>" type="text" class="form-control" name="color_ojos" />
		<?php echo form_error('color_ojos','<p class="error">', '</p>'); ?>
	</div>
</div>
<!-- Text input-->
<div class="control-group">
	<label class="control-label">Edad</label>
	<div class="controls">
		<input value="<?php echo $query->edad; ?>" type="text" class="form-control" name="edad" />
		<?php echo form_error('edad','<p class="error">', '</p>'); ?>
	</div>
</div>
<!-- Text input-->
<div class="control-group">
	<label class="control-label">Profesion</label>
	<div class="controls">
		<input value="<?php echo $query->profesion; ?>" type="text" class="form-control" name="profesion" />
		<?php echo form_error('profesion','<p class="error">', '</p>'); ?>
	</div>
</div>
<!-- Text input-->
<div class="control-group">
	<label class="control-label">Fuma</label>
	<div class="controls">
		<?php $options_fuma = [0=> "No", 1=>"Si"]; 
		echo  form_dropdown('fuma', $options_fuma, $query->fuma);
		?>
	</div>
</div>
<!-- Text input-->
<div class="control-group">
	<label class="control-label">Toma</label>
	<div class="controls">
		<?php $options_toma = [0=> "No", 1=>"Si"]; 
		echo form_dropdown('toma', $options_toma, $query->toma);
		?>
	</div>
</div>
<!-- Text input-->
<div class="control-group">
	<label class="control-label">Descripcion</label>
	<div class="controls">
		<textarea name="descripcion" id="descripcion" class="form-control"><?php echo $query->descripcion; ?></textarea>
		<?php echo form_error('descripcion','<p class="error">', '</p>'); ?>
	</div>
</div>
<!-- Text input-->
<div class="control-group">
	<label class="control-label">Busco</label>
	<div class="controls">
		<input value="<?php echo $query->busco; ?>" type="text" class="form-control" name="busco" />
		<?php echo form_error('busco','<p class="error">', '</p>'); ?>
	</div>
</div>
<!-- Text input-->
<div class="control-group">
	<label class="control-label">Hijos</label>
	<div class="controls">
		<input value="<?php echo $query->hijos; ?>" type="text" class="form-control" name="hijos" />
		<?php echo form_error('hijos','<p class="error">', '</p>'); ?>
	</div>
</div>
