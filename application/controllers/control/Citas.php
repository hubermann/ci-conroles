<?php 

class Citas extends CI_Controller{


public function __construct(){

	parent::__construct();
	$this->load->model('cita');
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
		$total_pages = ceil($this->cita->count_rows() / $per_page);

		if ($total_pages > 1){ 
			for ($i=1;$i<=$total_pages;$i++){ 
			if ($page == $i) 
				//si muestro el índice de la página actual, no coloco enlace 
				$data['pagination_links'] .=  '<li class="active"><a>'.$i.'</a></li>'; 
			else 
				//si el índice no corresponde con la página mostrada actualmente, coloco el enlace para ir a esa pagina 
				$data['pagination_links']  .= '<li><a href="'.base_url().'control/citas/'.$i.'" > '. $i .'</a></li>'; 
		} 
	}
	//End Pagination

	$data['title'] = 'citas';
	$data['menu'] = 'control/citas/menu_cita';
	$data['content'] = 'control/citas/all';
	$data['query'] = $this->cita->get_records($per_page,$start);

	$this->load->view('control/control_layout', $data);

}

//detail
public function detail(){

$data['title'] = 'cita';
$data['content'] = 'control/citas/detail';
$data['menu'] = 'control/citas/menu_cita';
$data['query'] = $this->cita->get_record($this->uri->segment(4));
$this->load->view('control/control_layout', $data);
}


//new
public function form_new(){
$this->load->helper('form');
$data['title'] = 'Nuevo cita';
$data['content'] = 'control/citas/new_cita';
$data['menu'] = 'control/citas/menu_cita';
$this->load->view('control/control_layout', $data);
}

//create
public function create(){

	$this->load->helper('form');
	$this->load->library('form_validation');
$this->form_validation->set_rules('evento_id', 'Evento_id', 'required');

$this->form_validation->set_rules('usuario_id', 'Usuario_id', 'required');

$this->form_validation->set_rules('cita', 'Cita', 'required');

$this->form_validation->set_rules('clasificacion_id', 'Clasificacion_id', 'required');

	
	if ($this->form_validation->run() === FALSE){

		$this->load->helper('form');
		$data['title'] = 'Nuevo citas';
		$data['content'] = 'control/citas/new_cita';
		$data['menu'] = 'control/citas/menu_cita';
		$this->load->view('control/control_layout', $data);

	}else{
		
		if($this->input->post('slug')){
			$this->load->helper('url');
			$slug = url_title($this->input->post('titulo'), 'dash', TRUE);
		}

		
		$newcita = array( 'evento_id' => $this->input->post('evento_id'), 
 'usuario_id' => $this->input->post('usuario_id'), 
 'cita' => $this->input->post('cita'), 
 'clasificacion_id' => $this->input->post('clasificacion_id'), 
);
		#save
		$this->cita->add_record($newcita);
		$this->session->set_flashdata('success', 'cita creado. <a href="citas/detail/'.$this->db->insert_id().'">Ver</a>');
		redirect('control/citas', 'refresh');

	}



}

//edit
public function editar(){
	$this->load->helper('form');
	$data['title']= 'Editar cita';	
	$data['content'] = 'control/citas/edit_cita';
	$data['menu'] = 'control/citas/menu_cita';
	$data['query'] = $this->cita->get_record($this->uri->segment(4));
	$this->load->view('control/control_layout', $data);
}

//update
public function update(){
	$this->load->helper('form');
	$this->load->library('form_validation'); 
$this->form_validation->set_rules('evento_id', 'Evento_id', 'required');

$this->form_validation->set_rules('usuario_id', 'Usuario_id', 'required');

$this->form_validation->set_rules('cita', 'Cita', 'required');

$this->form_validation->set_rules('clasificacion_id', 'Clasificacion_id', 'required');


	$this->form_validation->set_message('required','El campo %s es requerido.');

	if ($this->form_validation->run() === FALSE){
		$this->load->helper('form');

		$data['title'] = 'Nuevo cita';
		$data['content'] = 'control/citas/edit_cita';
		$data['menu'] = 'control/citas/menu_cita';
		$data['query'] = $this->cita->get_record($this->input->post('id'));
		$this->load->view('control/control_layout', $data);
	}else{		
		$id=  $this->input->post('id');

		if($this->input->post('slug')){
			$this->load->helper('url');
			$slug = url_title($this->input->post('titulo'), 'dash', TRUE);
		}

		$editedcita = array(  
'evento_id' => $this->input->post('evento_id'),

'usuario_id' => $this->input->post('usuario_id'),

'cita' => $this->input->post('cita'),

'clasificacion_id' => $this->input->post('clasificacion_id'),
);
		#save
		$this->session->set_flashdata('success', 'cita Actualizado!');
		$this->cita->update_record($id, $editedcita);
		if($this->input->post('id')!=""){
			redirect('control/citas', 'refresh');
		}else{
			redirect('control/citas', 'refresh');
		}



	}



}


//delete comfirm		
public function delete_comfirm(){
	$this->load->helper('form');
	$data['content'] = 'control/citas/comfirm_delete';
	$data['title'] = 'Eliminar cita';
	$data['menu'] = 'control/citas/menu_cita';
	$data['query'] = $data['query'] = $this->cita->get_record($this->uri->segment(4));
	$this->load->view('control/control_layout', $data);


}

//delete
public function delete(){

	$this->load->helper('form');
	$this->load->library('form_validation');

	$this->form_validation->set_rules('comfirm', 'comfirm', 'required');
	$this->form_validation->set_message('required','Por favor, confirme para eliminar.');


	if ($this->form_validation->run() === FALSE){
		#validation failed
		$this->load->helper('form');

		$data['content'] = 'control/citas/comfirm_delete';
		$data['title'] = 'Eliminar cita';
		$data['menu'] = 'control/citas/menu_cita';
		$data['query'] = $this->cita->get_record($this->input->post('id'));
		$this->load->view('control/control_layout', $data);
	}else{
		#validation passed
		$this->session->set_flashdata('success', 'cita eliminado!');

		$prod = $this->cita->get_record($this->input->post('id'));
			$path = 'images-citas/'.$prod->filename;
			if(is_link($path)){
				unlink($path);
			}

		$id_item = $this->uri->segment(4);
		

		$this->cita->delete_record($id_item);
		redirect('control/citas', 'refresh');
		

	}
}


} //end class

?>