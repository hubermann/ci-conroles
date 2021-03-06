<?php

class Lugares extends CI_Controller{


	public function __construct(){

		parent::__construct();
		$this->load->model('lugar');
		$this->load->model('imagenes_lugar');
		$this->load->model('beneficio');
		$this->load->helper('url');
		$this->load->library('session');

	//Si no hay session redirige a Login
		if(! $this->session->userdata('logged_in')){
			redirect('dashboard');
		}

		if( ! ini_get('date.timezone') ){
			date_default_timezone_set('GMT');
			setlocale(LC_ALL,"es_ES");
			setlocale(LC_TIME, 'es_AR');
		}

	$this->data['thumbnail_sizes'] = array(); //thumbnails sizes

}

public function index(){
	//Pagination
	$per_page = 10;
	$page = $this->uri->segment(3);
	if(!$page){ $start =0; $page =1; }else{ $start = ($page -1 ) * $per_page; }
	$data['pagination_links'] = "";
	$total_pages = ceil($this->lugar->count_rows() / $per_page);

	if ($total_pages > 1){
		for ($i=1;$i<=$total_pages;$i++){
			if ($page == $i)
				//si muestro el índice de la página actual, no coloco enlace
				$data['pagination_links'] .=  '<li class="active"><a>'.$i.'</a></li>';
			else
				//si el índice no corresponde con la página mostrada actualmente, coloco el enlace para ir a esa pagina
				$data['pagination_links']  .= '<li><a href="'.base_url().'control/lugares/'.$i.'" > '. $i .'</a></li>';
		}
	}
	//End Pagination

	$data['title'] = 'lugares';
	$data['menu'] = 'control/lugares/menu_lugar';
	$data['content'] = 'control/lugares/all';
	$data['query'] = $this->lugar->get_records($per_page,$start);

	$this->load->view('control/pixel-admin/control_layout', $data);

}

//detail
public function detail(){

	$data['title'] = 'lugar';
	$data['content'] = 'control/lugares/detail';
	$data['menu'] = 'control/lugares/menu_lugar';
	$query = $this->lugar->get_record($this->uri->segment(4));
	$data['query'] = $query;
	$data['beneficio'] = $this->beneficio->get_record($query->beneficio_id);
	$data['imagenes'] = $this->imagenes_lugar->view_all($query->beneficio_id);
	$this->load->view('control/pixel-admin/control_layout', $data);
}


//new
public function form_new(){
	$this->load->helper('form');
	$data['title'] = 'Nuevo lugar';
	$data['content'] = 'control/lugares/new_lugar';
	$data['menu'] = 'control/lugares/menu_lugar';
	$this->load->view('control/pixel-admin/control_layout', $data);
}

//create
public function create(){

	$this->load->helper('form');
	$this->load->library('form_validation');
	$this->form_validation->set_rules('nombre', 'Nombre', 'required');
	$this->form_validation->set_rules('direccion', 'Direccion', 'required');

	if ($this->form_validation->run() === FALSE){

		$this->load->helper('form');
		$data['title'] = 'Nuevo lugares';
		$data['content'] = 'control/lugares/new_lugar';
		$data['menu'] = 'control/lugares/menu_lugar';
		$this->load->view('control/pixel-admin/control_layout', $data);

	}else{

		if($this->input->post('slug')){
			$this->load->helper('url');
			$slug = url_title($this->input->post('titulo'), 'dash', TRUE);
		}

		$file  = $this->upload_file();
		if($_FILES['adjunto']['size'] > 0){
			if ( $file['status'] == 0 ){
				$this->session->set_flashdata('error', $file['msg']);
			}
		}else{
			$file['adjunto'] = '';
		}

		$newlugar = array( 'nombre' => $this->input->post('nombre'),
			'direccion' => $this->input->post('direccion'),
			'telefono' => $this->input->post('telefono'),
			'link' => $this->input->post('link'),
			'visible' => $this->input->post('visible'),
			'beneficio_id' => $this->input->post('beneficio_id'),
			'filename' => $file['adjunto'],
			);
		#save
		$this->lugar->add_record($newlugar);
		$this->session->set_flashdata('success', 'lugar creado. <a href="lugares/detail/'.$this->db->insert_id().'">Ver</a>');
		redirect('control/lugares', 'refresh');

	}



}

//edit
public function editar(){
	$this->load->helper('form');
	$data['title']= 'Editar lugar';
	$data['content'] = 'control/lugares/edit_lugar';
	$data['menu'] = 'control/lugares/menu_lugar';
	$data['query'] = $this->lugar->get_record($this->uri->segment(4));
	$this->load->view('control/pixel-admin/control_layout', $data);
}

//update
public function update(){
	$this->load->helper('form');
	$this->load->library('form_validation');
	$this->form_validation->set_rules('nombre', 'Nombre', 'required');
	$this->form_validation->set_rules('direccion', 'Direccion', 'required');
	$this->form_validation->set_message('required','El campo %s es requerido.');

	if ($this->form_validation->run() === FALSE){
		$this->load->helper('form');

		$data['title'] = 'Nuevo lugar';
		$data['content'] = 'control/lugares/edit_lugar';
		$data['menu'] = 'control/lugares/menu_lugar';
		$data['query'] = $this->lugar->get_record($this->input->post('id'));
		$this->load->view('control/pixel-admin/control_layout', $data);
	}else{
		$id=  $this->input->post('id');

		if($this->input->post('slug')){
			$this->load->helper('url');
			$slug = url_title($this->input->post('titulo'), 'dash', TRUE);
		}

		if($_FILES['adjunto']['size'] > 0){

			$file  = $this->upload_file();

			if ( $file['status'] != 0 )
				{
				//guardo
				$lugar = $this->lugar->get_record($this->input->post('id'));
					 $path = 'images-lugares/'.$lugar->filename;
					 if(is_link($path)){
						unlink($path);
					 }


				$data = array('filename' => $file['adjunto']);
				$this->lugar->update_record($this->input->post('id'), $data);
				}


}

		$editedlugar = array(
			'nombre' => $this->input->post('nombre'),
			'direccion' => $this->input->post('direccion'),
			'telefono' => $this->input->post('telefono'),
			'link' => $this->input->post('link'),
			'visible' => $this->input->post('visible'),
			'beneficio_id' => $this->input->post('beneficio_id'),
			);
		#save
		$this->session->set_flashdata('success', 'lugar Actualizado!');
		$this->lugar->update_record($id, $editedlugar);
		if($this->input->post('id')!=""){
			redirect('control/lugares', 'refresh');
		}else{
			redirect('control/lugares', 'refresh');
		}

	}

}


	public function destroy()
	{
		if($this->uri->segment(4)){
			$this->session->set_flashdata('success', 'Lugar eliminado!');

			$prod = $this->lugar->get_record($this->uri->segment(4));
			$path = (isset($prod->filename)) ? $prod->filename : "";
			if($path!=""){
				unlink('images-lugares/'.$path);
			}

			$this->lugar->delete_record($this->uri->segment(4));
		}else{
			$this->session->set_flashdata('warning', 'Error al eliminar!');
		}

		redirect('control/lugares', 'refresh');
	}


	public function imagenes(){
		$this->load->helper('form');
		$data['content'] = 'control/lugares/imagenes';
		$data['title'] = 'Imagenes ';
		$data['menu'] = 'control/lugares/menu_lugar';
		$data['query_imagenes'] = $this->imagenes_lugar->imagenes_lugar($this->uri->segment(4));
		$this->load->view('control/pixel-admin/control_layout', $data);
	}


	public function add_imagen(){

		$file =[];
			//adjunto
		if($_FILES['adjunto']['size'] > 0 && $_FILES['adjunto']['name'] != ""){

			$file  = $this->upload_file();

			if ( $file['status'] != 0 ){
			//guardo
				$nueva_imagen = array(
					'lugar_id' => $this->input->post('id'),
					'filename' => $file['adjunto'],
					);
			#save
				$this->session->set_flashdata('success', 'Imagen cargada!');
				$this->imagenes_lugar->add_record($nueva_imagen);
				redirect('control/lugares/imagenes/'.$this->input->post('id'));
			}

			$this->session->set_flashdata('error', $file['msg']);
		}

		redirect('control/lugares/imagenes/'.$this->input->post('id'));
	}

	public function delete_imagen(){
		$id_imagen = $this->uri->segment(4);

		$imagen = $this->imagenes_lugar->get_record($id_imagen);
		$path = 'images-lugares/'.$imagen->filename;
		unlink($path);

		$this->imagenes_lugar->delete_record($id_imagen);
		#echo "Eliminada : ".$imagen->filename;
	}



	/*******  FILE ADJUNTO  ********/
	public function upload_file(){

		//1 = OK - 0 = Failure
		$file = array('status' => '', 'filename' => '', 'msg' => '' );

		array('image/jpeg','image/pjpeg', 'image/jpg', 'image/png', 'image/gif','image/bmp');
		//check extencion
		/*
		$file_extensions_allowed = array('application/pdf', 'application/msword', 'application/rtf', 'application/vnd.ms-excel','application/vnd.ms-powerpoint','application/zip','application/x-rar-compressed', 'text/plain');
		$exts_humano = array('PDF', 'WORD', 'RTF', 'EXCEL', 'PowerPoint', 'ZIP', 'RAR');
		*/
		$file_extensions_allowed = array('image/jpeg','image/pjpeg', 'image/jpg', 'image/png', 'image/gif','image/bmp');
		$exts_humano = array('JPG', 'JPEG', 'PNG', 'GIF');


		$exts_humano = implode(', ',$exts_humano);
		$ext = $_FILES['adjunto']['type'];
		#$ext = strtolower($ext);
		if(!in_array($ext, $file_extensions_allowed)){
			$exts = implode(', ',$file_extensions_allowed);

			$file['msg'] .="<p>".$_FILES['adjunto']['name']." <br />Puede subir archivos que tengan alguna de estas extenciones: ".$exts_humano."</p>";
			$file['status'] = 0 ;
		}else{
			include(APPPATH.'libraries/class.upload.php');
			$yukle = new upload;
			$yukle->set_max_size(1900000);
			$yukle->set_directory('./images-lugares');
			$yukle->set_tmp_name($_FILES['adjunto']['tmp_name']);
			$yukle->set_file_size($_FILES['adjunto']['size']);
			$yukle->set_file_type($_FILES['adjunto']['type']);
			$random = substr(md5(rand()),0,6);
			$name_whitout_whitespaces = str_replace(" ","-",$_FILES['adjunto']['name']);
			$imagname=''.$random.'_'.$name_whitout_whitespaces;
			#$thumbname='tn_'.$imagname;
			$yukle->set_file_name($imagname);


			$yukle->start_copy();



			if($yukle->is_ok()){

				if(count($this->data['thumbnail_sizes'])){
					foreach ($this->data['thumbnail_sizes'] as $thumb_size) {
	                        //create thumbnail
	                        #$yukle->resize(1000,0);
	                        #$$yukle->set_thumbnail_name('tn_'.$thumb_size.'_'.$imagname);
	                        #$$result_thumb = $yukle->create_thumbnail();
	                        #$$yukle->set_thumbnail_size($thumb_size, 0);
					}
				}

	                //UPLOAD ok
				$file['adjunto'] = $imagname;
				$file['status'] = 1;
			}
			else{
				$file['status'] = 0 ;
				$file['msg'] = 'Error al subir archivo';
			}

			//clean
			$yukle->set_tmp_name('');
			$yukle->set_file_size('');
			$yukle->set_file_type('');
			$imagname='';
		}//fin if(extencion)


		return $file;
	}

} //end class

?>
