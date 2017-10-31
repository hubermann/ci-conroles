
<h2><?php echo $title; ?></h2>

<?php 
if(count($query)){
	echo '<table class="table table-striped">';
	foreach ($query as $row):

		/* $nombre_categoria = $this->categoria->traer_nombre($row->categoria_id); */

echo '<tr>';
echo '<td>'.$row->role_id.' </td>';
echo '<td>'.$row->password.' </td>';
echo '<td>'.$row->salt.' </td>';
echo '<td>'.$row->email.' </td>';

		echo '</td>';

		echo '<td> 
		<div class="btn-group">
		<a class="btn btn-small" href="'.base_url('control/admins/delete_comfirm/'.$row->id.'').'"><i class="fa fa-trash-o"></i></a>
		<a class="btn btn-small" href="'.base_url('control/admins/editar/'.$row->id.'').'"><i class="fa fa-edit"></i></a><a class="btn btn-small" href="'.base_url('control/admins/imagenes/'.$row->id.'').'"><i class="fa fa-camera-retro"></i></a>		
		<!--<a class="btn btn-small" href="'.base_url('control/admins/detail/'.$row->id.'').'"><i class="fa fa-chain"></i></a>-->
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



