
<h2><?php echo $title; ?></h2>

<?php 
if(count($query)){
	echo '<table class="table table-striped">';
	foreach ($query as $row):

		/* $nombre_categoria = $this->categoria->traer_nombre($row->categoria_id); */

echo '<tr>';
echo '<td>'.$row->nickname.' </td>';
echo '<td>'.$row->password.' </td>';
echo '<td>'.$row->salt.' </td>';
echo '<td>'.$row->email.' </td>';
echo '<td>'.$row->apellido.' </td>';
echo '<td>'.$row->nombre.' </td>';
echo '<td>'.$row->dni.' </td>';
echo '<td>'.$row->sexo.' </td>';
echo '<td>'.$row->nacimiento.' </td>';
echo '<td>'.$row->edad.' </td>';
echo '<td>'.$row->telcontacto.' </td>';
echo '<td>'.$row->barrio.' </td>';
echo '<td>'.$row->calle.' </td>';
echo '<td>'.$row->numero.' </td>';
echo '<td>'.$row->piso.' </td>';
echo '<td>'.$row->depto.' </td>';
echo '<td>'.$row->conocio.' </td>';
echo '<td>'.$row->profesion.' </td>';
echo '<td>'.$row->localidad.' </td>';
echo '<td>'.$row->fuma.' </td>';
echo '<td>'.$row->toma.' </td>';
echo '<td>'.$row->descripcion.' </td>';
echo '<td>'.$row->telcelular.' </td>';
echo '<td>'.$row->estado_civil.' </td>';
echo '<td>'.$row->educacion.' </td>';
echo '<td>'.$row->provincia.' </td>';
echo '<td>'.$row->zodiaco.' </td>';
echo '<td>'.$row->busco.' </td>';
echo '<td>'.$row->ocupacion.' </td>';
echo '<td>'.$row->celular_cia.' </td>';
echo '<td>'.$row->tel_citas.' </td>';
echo '<td>'.$row->validado.' </td>';
echo '<td>'.$row->hijos.' </td>';
echo '<td>'.$row->codigo_verificacion.' </td>';
echo '<td>'.$row->negocios.' </td>';
echo '<td>'.$row->cod_postal.' </td>';
echo '<td>'.$row->religion.' </td>';
echo '<td>'.$row->foto_main.' </td>';
echo '<td>'.$row->nacionalidad.' </td>';
echo '<td>'.$row->activo.' </td>';
echo '<td>'.$row->estatura.' </td>';
echo '<td>'.$row->peso.' </td>';
echo '<td>'.$row->contextura_fisica.' </td>';
echo '<td>'.$row->color_pelo.' </td>';
echo '<td>'.$row->color_ojos.' </td>';
echo '<td>'.$row->convivencia.' </td>';
echo '<td>'.$row->facebook.' </td>';
echo '<td>'.$row->twitter.' </td>';
echo '<td>'.$row->linkedin.' </td>';
echo '<td>'.$row->youtube.' </td>';
echo '<td>'.$row->myspace.' </td>';
echo '<td>'.$row->badoo.' </td>';
echo '<td>'.$row->msn.' </td>';
echo '<td>'.$row->skype.' </td>';
echo '<td>'.$row->whatsapp.' </td>';
echo '<td>'.$row->google.' </td>';
echo '<td>'.$row->tipo_busuqeda.' </td>';
echo '<td>'.$row->completa_signin.' </td>';
echo '<td>'.$row->claves_erroneas.' </td>';
echo '<td>'.$row->id_paises.' </td>';
echo '<td>'.$row->score.' </td>';

		echo '</td>';

		echo '<td> 
		<div class="btn-group">
		<a class="btn btn-small" href="'.base_url('control/usuarios/delete_comfirm/'.$row->id.'').'"><i class="fa fa-trash-o"></i></a>
		<a class="btn btn-small" href="'.base_url('control/usuarios/editar/'.$row->id.'').'"><i class="fa fa-edit"></i></a><a class="btn btn-small" href="'.base_url('control/usuarios/imagenes/'.$row->id.'').'"><i class="fa fa-camera-retro"></i></a>		
		<!--<a class="btn btn-small" href="'.base_url('control/usuarios/detail/'.$row->id.'').'"><i class="fa fa-chain"></i></a>-->
		</div>
		</td>';


		echo '</tr>';

	endforeach; 
	echo '</table>';
}else{
	echo 'No hay resultados.';
}
?>
<div>
<ul class="pagination pagination-small pagination-centered">
<?php echo $pagination_links;  ?>
</ul>
</div>

list($nac_ano, $nac_mes, $nac_day) =  explode("-", $usuario->nacimiento);
    	$fecha_nacimiento = $nac_day.'-'.$nac_mes.'-'.$nac_ano;



