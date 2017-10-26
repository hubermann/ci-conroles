<?php  
$attributes = array('class' => 'form-horizontal', 'id' => 'edit_usuario');
echo form_open_multipart(base_url('control/usuarios/update/'),$attributes);

echo form_hidden('id', $query->id); 
?>
<legend><?php echo $title ?></legend>
<div class="well well-large well-transparent">

 


<!-- Text input-->
<!--
<div class="control-group">
<label class="control-label">Categoria id</label>
	<div class="controls">
	<select name="categoria_id" id="categoria_id">
		<?php 
		/* 
		$categorias = $this->categoria->get_records_menu();
		if($categorias){

			foreach ($categorias as $value) {
				if($query->categoria_id == $value->id){$sel= "selected";}else{$sel="";}
				echo '<option value="'.$value->id.'" '.$sel.'>'.$value->nombre.'</option>';
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
			<label class="control-label">Nickname</label>
			<div class="controls">
			<input value="<?php echo $query->nickname; ?>" type="text" class="form-control" name="nickname" />
			<?php echo form_error('nickname','<p class="error">', '</p>'); ?>
			</div>
			</div>
			<!-- Text input-->
			<div class="control-group">
			<label class="control-label">Password</label>
			<div class="controls">
			<input value="<?php echo $query->password; ?>" type="text" class="form-control" name="password" />
			<?php echo form_error('password','<p class="error">', '</p>'); ?>
			</div>
			</div>
			<!-- Text input-->
			<div class="control-group">
			<label class="control-label">Salt</label>
			<div class="controls">
			<input value="<?php echo $query->salt; ?>" type="text" class="form-control" name="salt" />
			<?php echo form_error('salt','<p class="error">', '</p>'); ?>
			</div>
			</div>
			<!-- Text input-->
			<div class="control-group">
			<label class="control-label">Email</label>
			<div class="controls">
			<input value="<?php echo $query->email; ?>" type="text" class="form-control" name="email" />
			<?php echo form_error('email','<p class="error">', '</p>'); ?>
			</div>
			</div>
			<!-- Text input-->
			<div class="control-group">
			<label class="control-label">Apellido</label>
			<div class="controls">
			<input value="<?php echo $query->apellido; ?>" type="text" class="form-control" name="apellido" />
			<?php echo form_error('apellido','<p class="error">', '</p>'); ?>
			</div>
			</div>
			<!-- Text input-->
			<div class="control-group">
			<label class="control-label">Nombre</label>
			<div class="controls">
			<input value="<?php echo $query->nombre; ?>" type="text" class="form-control" name="nombre" />
			<?php echo form_error('nombre','<p class="error">', '</p>'); ?>
			</div>
			</div>
			<!-- Text input-->
			<div class="control-group">
			<label class="control-label">Dni</label>
			<div class="controls">
			<input value="<?php echo $query->dni; ?>" type="text" class="form-control" name="dni" />
			<?php echo form_error('dni','<p class="error">', '</p>'); ?>
			</div>
			</div>
			<!-- Text input-->
			<div class="control-group">
			<label class="control-label">Sexo</label>
			<div class="controls">
			<input value="<?php echo $query->sexo; ?>" type="text" class="form-control" name="sexo" />
			<?php echo form_error('sexo','<p class="error">', '</p>'); ?>
			</div>
			</div>
			<!-- Text input-->
			<div class="control-group">
			<label class="control-label">Nacimiento</label>
			<div class="controls">
			<input value="<?php echo $query->nacimiento; ?>" type="text" class="form-control" name="nacimiento" />
			<?php echo form_error('nacimiento','<p class="error">', '</p>'); ?>
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
			<label class="control-label">Telcontacto</label>
			<div class="controls">
			<input value="<?php echo $query->telcontacto; ?>" type="text" class="form-control" name="telcontacto" />
			<?php echo form_error('telcontacto','<p class="error">', '</p>'); ?>
			</div>
			</div>
			<!-- Text input-->
			<div class="control-group">
			<label class="control-label">Barrio</label>
			<div class="controls">
			<input value="<?php echo $query->barrio; ?>" type="text" class="form-control" name="barrio" />
			<?php echo form_error('barrio','<p class="error">', '</p>'); ?>
			</div>
			</div>
			<!-- Text input-->
			<div class="control-group">
			<label class="control-label">Calle</label>
			<div class="controls">
			<input value="<?php echo $query->calle; ?>" type="text" class="form-control" name="calle" />
			<?php echo form_error('calle','<p class="error">', '</p>'); ?>
			</div>
			</div>
			<!-- Text input-->
			<div class="control-group">
			<label class="control-label">Numero</label>
			<div class="controls">
			<input value="<?php echo $query->numero; ?>" type="text" class="form-control" name="numero" />
			<?php echo form_error('numero','<p class="error">', '</p>'); ?>
			</div>
			</div>
			<!-- Text input-->
			<div class="control-group">
			<label class="control-label">Piso</label>
			<div class="controls">
			<input value="<?php echo $query->piso; ?>" type="text" class="form-control" name="piso" />
			<?php echo form_error('piso','<p class="error">', '</p>'); ?>
			</div>
			</div>
			<!-- Text input-->
			<div class="control-group">
			<label class="control-label">Depto</label>
			<div class="controls">
			<input value="<?php echo $query->depto; ?>" type="text" class="form-control" name="depto" />
			<?php echo form_error('depto','<p class="error">', '</p>'); ?>
			</div>
			</div>
			<!-- Text input-->
			<div class="control-group">
			<label class="control-label">Conocio</label>
			<div class="controls">
			<input value="<?php echo $query->conocio; ?>" type="text" class="form-control" name="conocio" />
			<?php echo form_error('conocio','<p class="error">', '</p>'); ?>
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
			<label class="control-label">Localidad</label>
			<div class="controls">
			<input value="<?php echo $query->localidad; ?>" type="text" class="form-control" name="localidad" />
			<?php echo form_error('localidad','<p class="error">', '</p>'); ?>
			</div>
			</div>
			<!-- Text input-->
			<div class="control-group">
			<label class="control-label">Fuma</label>
			<div class="controls">
			<input value="<?php echo $query->fuma; ?>" type="text" class="form-control" name="fuma" />
			<?php echo form_error('fuma','<p class="error">', '</p>'); ?>
			</div>
			</div>
			<!-- Text input-->
			<div class="control-group">
			<label class="control-label">Toma</label>
			<div class="controls">
			<input value="<?php echo $query->toma; ?>" type="text" class="form-control" name="toma" />
			<?php echo form_error('toma','<p class="error">', '</p>'); ?>
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
			<label class="control-label">Telcelular</label>
			<div class="controls">
			<input value="<?php echo $query->telcelular; ?>" type="text" class="form-control" name="telcelular" />
			<?php echo form_error('telcelular','<p class="error">', '</p>'); ?>
			</div>
			</div>
			<!-- Text input-->
			<div class="control-group">
			<label class="control-label">Estado_civil</label>
			<div class="controls">
			<input value="<?php echo $query->estado_civil; ?>" type="text" class="form-control" name="estado_civil" />
			<?php echo form_error('estado_civil','<p class="error">', '</p>'); ?>
			</div>
			</div>
			<!-- Text input-->
			<div class="control-group">
			<label class="control-label">Educacion</label>
			<div class="controls">
			<input value="<?php echo $query->educacion; ?>" type="text" class="form-control" name="educacion" />
			<?php echo form_error('educacion','<p class="error">', '</p>'); ?>
			</div>
			</div>
			<!-- Text input-->
			<div class="control-group">
			<label class="control-label">Provincia</label>
			<div class="controls">
			<input value="<?php echo $query->provincia; ?>" type="text" class="form-control" name="provincia" />
			<?php echo form_error('provincia','<p class="error">', '</p>'); ?>
			</div>
			</div>
			<!-- Text input-->
			<div class="control-group">
			<label class="control-label">Zodiaco</label>
			<div class="controls">
			<input value="<?php echo $query->zodiaco; ?>" type="text" class="form-control" name="zodiaco" />
			<?php echo form_error('zodiaco','<p class="error">', '</p>'); ?>
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
			<label class="control-label">Ocupacion</label>
			<div class="controls">
			<input value="<?php echo $query->ocupacion; ?>" type="text" class="form-control" name="ocupacion" />
			<?php echo form_error('ocupacion','<p class="error">', '</p>'); ?>
			</div>
			</div>
			<!-- Text input-->
			<div class="control-group">
			<label class="control-label">Celular_cia</label>
			<div class="controls">
			<input value="<?php echo $query->celular_cia; ?>" type="text" class="form-control" name="celular_cia" />
			<?php echo form_error('celular_cia','<p class="error">', '</p>'); ?>
			</div>
			</div>
			<!-- Text input-->
			<div class="control-group">
			<label class="control-label">Tel_citas</label>
			<div class="controls">
			<input value="<?php echo $query->tel_citas; ?>" type="text" class="form-control" name="tel_citas" />
			<?php echo form_error('tel_citas','<p class="error">', '</p>'); ?>
			</div>
			</div>
			<!-- Text input-->
			<div class="control-group">
			<label class="control-label">Validado</label>
			<div class="controls">
			<input value="<?php echo $query->validado; ?>" type="text" class="form-control" name="validado" />
			<?php echo form_error('validado','<p class="error">', '</p>'); ?>
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
			<!-- Text input-->
			<div class="control-group">
			<label class="control-label">Codigo_verificacion</label>
			<div class="controls">
			<input value="<?php echo $query->codigo_verificacion; ?>" type="text" class="form-control" name="codigo_verificacion" />
			<?php echo form_error('codigo_verificacion','<p class="error">', '</p>'); ?>
			</div>
			</div>
			<!-- Text input-->
			<div class="control-group">
			<label class="control-label">Negocios</label>
			<div class="controls">
			<input value="<?php echo $query->negocios; ?>" type="text" class="form-control" name="negocios" />
			<?php echo form_error('negocios','<p class="error">', '</p>'); ?>
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
			<label class="control-label">Religion</label>
			<div class="controls">
			<input value="<?php echo $query->religion; ?>" type="text" class="form-control" name="religion" />
			<?php echo form_error('religion','<p class="error">', '</p>'); ?>
			</div>
			</div>
			<!-- Text input-->
			<div class="control-group">
			<label class="control-label">Foto_main</label>
			<div class="controls">
			<input value="<?php echo $query->foto_main; ?>" type="text" class="form-control" name="foto_main" />
			<?php echo form_error('foto_main','<p class="error">', '</p>'); ?>
			</div>
			</div>
			<!-- Text input-->
			<div class="control-group">
			<label class="control-label">Nacionalidad</label>
			<div class="controls">
			<input value="<?php echo $query->nacionalidad; ?>" type="text" class="form-control" name="nacionalidad" />
			<?php echo form_error('nacionalidad','<p class="error">', '</p>'); ?>
			</div>
			</div>
			<!-- Text input-->
			<div class="control-group">
			<label class="control-label">Activo</label>
			<div class="controls">
			<input value="<?php echo $query->activo; ?>" type="text" class="form-control" name="activo" />
			<?php echo form_error('activo','<p class="error">', '</p>'); ?>
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
			<label class="control-label">Convivencia</label>
			<div class="controls">
			<input value="<?php echo $query->convivencia; ?>" type="text" class="form-control" name="convivencia" />
			<?php echo form_error('convivencia','<p class="error">', '</p>'); ?>
			</div>
			</div>
			<!-- Text input-->
			<div class="control-group">
			<label class="control-label">Facebook</label>
			<div class="controls">
			<input value="<?php echo $query->facebook; ?>" type="text" class="form-control" name="facebook" />
			<?php echo form_error('facebook','<p class="error">', '</p>'); ?>
			</div>
			</div>
			<!-- Text input-->
			<div class="control-group">
			<label class="control-label">Twitter</label>
			<div class="controls">
			<input value="<?php echo $query->twitter; ?>" type="text" class="form-control" name="twitter" />
			<?php echo form_error('twitter','<p class="error">', '</p>'); ?>
			</div>
			</div>
			<!-- Text input-->
			<div class="control-group">
			<label class="control-label">Linkedin</label>
			<div class="controls">
			<input value="<?php echo $query->linkedin; ?>" type="text" class="form-control" name="linkedin" />
			<?php echo form_error('linkedin','<p class="error">', '</p>'); ?>
			</div>
			</div>
			<!-- Text input-->
			<div class="control-group">
			<label class="control-label">Youtube</label>
			<div class="controls">
			<input value="<?php echo $query->youtube; ?>" type="text" class="form-control" name="youtube" />
			<?php echo form_error('youtube','<p class="error">', '</p>'); ?>
			</div>
			</div>
			<!-- Text input-->
			<div class="control-group">
			<label class="control-label">Myspace</label>
			<div class="controls">
			<input value="<?php echo $query->myspace; ?>" type="text" class="form-control" name="myspace" />
			<?php echo form_error('myspace','<p class="error">', '</p>'); ?>
			</div>
			</div>
			<!-- Text input-->
			<div class="control-group">
			<label class="control-label">Badoo</label>
			<div class="controls">
			<input value="<?php echo $query->badoo; ?>" type="text" class="form-control" name="badoo" />
			<?php echo form_error('badoo','<p class="error">', '</p>'); ?>
			</div>
			</div>
			<!-- Text input-->
			<div class="control-group">
			<label class="control-label">Msn</label>
			<div class="controls">
			<input value="<?php echo $query->msn; ?>" type="text" class="form-control" name="msn" />
			<?php echo form_error('msn','<p class="error">', '</p>'); ?>
			</div>
			</div>
			<!-- Text input-->
			<div class="control-group">
			<label class="control-label">Skype</label>
			<div class="controls">
			<input value="<?php echo $query->skype; ?>" type="text" class="form-control" name="skype" />
			<?php echo form_error('skype','<p class="error">', '</p>'); ?>
			</div>
			</div>
			<!-- Text input-->
			<div class="control-group">
			<label class="control-label">Whatsapp</label>
			<div class="controls">
			<input value="<?php echo $query->whatsapp; ?>" type="text" class="form-control" name="whatsapp" />
			<?php echo form_error('whatsapp','<p class="error">', '</p>'); ?>
			</div>
			</div>
			<!-- Text input-->
			<div class="control-group">
			<label class="control-label">Google</label>
			<div class="controls">
			<input value="<?php echo $query->google; ?>" type="text" class="form-control" name="google" />
			<?php echo form_error('google','<p class="error">', '</p>'); ?>
			</div>
			</div>
			<!-- Text input-->
			<div class="control-group">
			<label class="control-label">Tipo_busuqeda</label>
			<div class="controls">
			<input value="<?php echo $query->tipo_busuqeda; ?>" type="text" class="form-control" name="tipo_busuqeda" />
			<?php echo form_error('tipo_busuqeda','<p class="error">', '</p>'); ?>
			</div>
			</div>
			<!-- Text input-->
			<div class="control-group">
			<label class="control-label">Completa_signin</label>
			<div class="controls">
			<input value="<?php echo $query->completa_signin; ?>" type="text" class="form-control" name="completa_signin" />
			<?php echo form_error('completa_signin','<p class="error">', '</p>'); ?>
			</div>
			</div>
			<!-- Text input-->
			<div class="control-group">
			<label class="control-label">Claves_erroneas</label>
			<div class="controls">
			<input value="<?php echo $query->claves_erroneas; ?>" type="text" class="form-control" name="claves_erroneas" />
			<?php echo form_error('claves_erroneas','<p class="error">', '</p>'); ?>
			</div>
			</div>
			<!-- Text input-->
			<div class="control-group">
			<label class="control-label">Id_paises</label>
			<div class="controls">
			<input value="<?php echo $query->id_paises; ?>" type="text" class="form-control" name="id_paises" />
			<?php echo form_error('id_paises','<p class="error">', '</p>'); ?>
			</div>
			</div>
			<!-- Text input-->
			<div class="control-group">
			<label class="control-label">Score</label>
			<div class="controls">
			<input value="<?php echo $query->score; ?>" type="text" class="form-control" name="score" />
			<?php echo form_error('score','<p class="error">', '</p>'); ?>
			</div>
			</div>

<div class="control-group">
<label class="control-label"></label>
	<div class="controls">
		<button class="btn" type="submit">Actualizar</button>
	</div>
</div>

</fieldset>

<?php echo form_close(); ?>

</div>
