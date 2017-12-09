<!--row -->
<div class="row">
	<div class="col-sm-12">
		<div class="white-box">
			<h3 class="box-title"><?php echo $title; ?>
				<div class="col-md-2 col-sm-4 col-xs-12 pull-right text-right">
					<!-- <select class="form-control pull-right row b-none">
						<option>March 2016</option>
						<option>April 2016</option>
						<option>May 2016</option>
						<option>June 2016</option>
						<option>July 2016</option>
					</select> -->
					<a class="btn btn-primary btn-block btn-rounded waves-effect waves-light" href="<?php echo base_url('control/eventos/form_new'); ?>">Agregar +</a>
				</div>
			</h3>
			<div class="table-responsive">
				
					
					<?php 
						if(count($query)){ 


							$head = ''; /*'<thead>
												<tr>
													<th>Categoria</th>
													<th> Fecha : hora</th>
													<th> Lugar </th>
													<th> precio </th>
													<th> Precio Hombres </th>
													<th> Edad Minima </th>
													<th> Edad Maxima</th>
													<th> Edad Minima H </th>
													<th> Edad Maxima H</th>
													<th> Estado H </th>
													<th> Estado M</th>
													<th> Coincidencias habilitadas </th>
													<th> Tipo_evento </th>
													<th> Localidad </th>
													<th> Duracion session </th>
													<th> Creado </th>


													<th class="text-right">Opciones</th>
												</tr>
											</thead>';
											*/
							print($head);
							
							
							foreach ($query as $row):
								$body = "<table class=\"table \"><tbody>";
								$body .= '<tr><strong>Detalle evento </strong></tr>';
								$body .= '<tr>';
								$body .= '<td class="txt-oflo">Categoria: <br> '.$row->categoria_nombre.'  </td>';
								$body .= '<td class="txt-oflo">Fecha: <br>'.$row->fecha.' </td>';
								$body .= '<td class="txt-oflo">Hora: <br>'.$row->hora.' </td>';
								$body .= '<td class="txt-oflo">Lugar: <br>'.$row->lugar.' </td>';
								$body .= '<td class="txt-oflo">Precio: <br>$'.$row->precio.' </td>';
								// $body .= '<td class="txt-oflo">Creado: <br>'.$row->created_at.' </td>';
								// $body .= '</tr><tr>';
								// $body .= '<td class="txt-oflo"> Precio Hombres: $'.$row->precio_hombres.' </td>';
								// $body .= '<td class="txt-oflo">Edad minima: '.$row->edad_minima.' </td>';
								// $body .= '<td class="txt-oflo"> Edad Maxima: '.$row->edad_maxima.' </td>';
								// $body .= '<td class="txt-oflo">Edad minima Hombre:'.$row->edad_minina_hombre.' </td>';
								// $body .= '<td class="txt-oflo"> Edad maxima Hombre: '.$row->edad_maxima_hombre.' </td>';
								// $body .= '<td class="txt-oflo"> Estado hombres: '.$row->estado_hombres.' </td>';
								// $body .= '<td class="txt-oflo"> Estado mujeres: '.$row->estado_mujeres.' </td>';
								// $body .= '</tr><tr>';
								// $body .= '<td class="txt-oflo">Concidencias: '.$row->coincidencias_habilitadas.' </td>';
								// $body .= '<td class="txt-oflo">Tipo evento: '.$row->tipo_evento.' </td>';
								// $body .= '<td class="txt-oflo">Localidad: '.$row->localidad.' </td>';
								// $body .= '<td class="txt-oflo"> Duracion session: '.$row->duracion_session.' </td>';
								$body .= '<td class="txt-oflo"> </td>';
								$body .= '<td> 
														<div class="btn-group pull-right"> 
														<a class="btn btn-small" href="'.base_url('control/eventos/editar/'.$row->id.'').'"><i class="fa fa-edit"></i></a>		
														<a href="'.base_url('control/eventos/destroy/'.$row->id.'').'" class="delete btn btn-small" data-confirm="Are you sure to delete this item?"><i class="fa fa-trash-o"></i></a>
														<a class="btn btn-small" data-toggle="modal" data-target="#ModalEvento'.$row->id.'"><i class="fa fa-chain"></i></a
														</div>
													</td>';
								$body .= '</tr>';


								$body .= '</tbody></table> 

								<!-- Modal -->
									<div id="ModalEvento'.$row->id.'" class="modal fade" role="dialog">
									  <div class="modal-dialog modal-lg">

									    <!-- Modal content-->
									    <div class="modal-content">
									      <div class="modal-header">
									        <button type="button" class="close" data-dismiss="modal">&times;</button>
									        <h4 class="modal-title">Detalle evento</h4>
									      </div>
									      <div class="modal-body">
									        <table class=\"table \">
														<tbody>
															
															<tr>
																<td class="txt-oflo">Categoria: <br> '.$row->categoria_nombre.'  </td>
																<td class="txt-oflo">Fecha: <br>'.$row->fecha.' </td>
																<td class="txt-oflo">Hora: <br>'.$row->hora.' </td>
																<td class="txt-oflo">Lugar: <br>'.$row->lugar.' </td>
																<td class="txt-oflo">Precio: <br>$'.$row->precio.' </td>
																<td class="txt-oflo">Creado: <br>'.$row->created_at.' </td>
																</tr><tr>
																<td class="txt-oflo"> Precio Hombres: <br>$'.$row->precio_hombres.' </td>
																<td class="txt-oflo">Edad minima: <br>'.$row->edad_minima.' </td>
																<td class="txt-oflo"> Edad Maxima: <br>'.$row->edad_maxima.' </td>
																<td class="txt-oflo">Edad minima Hombre:<br>'.$row->edad_minina_hombre.' </td>
																<td class="txt-oflo"> Edad maxima Hombre: <br>'.$row->edad_maxima_hombre.' </td>
																<td class="txt-oflo"> Estado hombres: <br>'.$row->estado_hombres.' </td>
																<td class="txt-oflo"> Estado mujeres: <br>'.$row->estado_mujeres.' </td>
																</tr><tr>
																<td class="txt-oflo">Concidencias: <br>'.$row->coincidencias_habilitadas.' </td>
																<td class="txt-oflo">Tipo evento: <br>'.$row->tipo_evento.' </td>
																<td class="txt-oflo">Localidad: <br>'.$row->localidad.' </td>
																<td class="txt-oflo"> Duracion session: <br>'.$row->duracion_session.' </td>
																<td class="txt-oflo"> </td>
															</tr>
														</tbody>
													</table>
												</div>
									      <div class="modal-footer">
									        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
									      </div>
									    </div>

									  </div>
									</div>


';
								print($body);
								endforeach; 

								

						}else{
							echo 'No hay resultados.';
						}
					?>

				
			</div>

				<div class="table-responsive">
					<ul class="pagination pagination-small pagination-centered">
						<?php echo $pagination_links;  ?>
					</ul>
				</div>
		</div>

	</div>
</div>
<!-- /.row -->
