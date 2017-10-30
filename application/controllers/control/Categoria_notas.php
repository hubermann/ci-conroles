<?php 

class Categoria_notas extends CI_Controller{


public function __construct(){

	parent::__construct();
	$this->load->model('categoria_nota');
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
		$total_pages = ceil($this->categoria_nota->count_rows() / $per_page);

		if ($total_pages > 1){ 
			for ($i=1;$i<=$total_pages;$i++){ 
			if ($page == $i) 
				//si muestro el índice de la página actual, no coloco enlace 
				$data['pagination_links'] .=  '<li class="active"><a>'.$i.'</a></li>'; 
			else 
				//si el índice no corresponde con la página mostrada actualmente, coloco el enlace para ir a esa pagina 
				$data['pagination_links']  .= '<li><a href="'.base_url().'control/categoria_notas/'.$i.'" > '. $i .'</a></li>'; 
		} 
	}
	//End Pagination

	$data['title'] = 'categoria_notas';
	$data['menu'] = 'control/categoria_notas/menu_categoria_nota';
	$data['content'] = 'control/categoria_notas/all';
	$data['query'] = $this->categoria_nota->get_records($per_page,$start);

	$this->load->view('control/pixel-admin/control_layout', $data);

}

//detail
public function detail(){

$data['title'] = 'categoria_nota';
$data['content'] = 'control/categoria_notas/detail';
$data['menu'] = 'control/categoria_notas/menu_categoria_nota';
$data['query'] = $this->categoria_nota->get_record($this->uri->segment(4));
$this->load->view('control/pixel-admin/control_layout', $data);
}


//new
public function form_new(){
$this->load->helper('form');
$data['title'] = 'Nuevo categoria_nota';
$data['content'] = 'control/categoria_notas/new_categoria_nota';
$data['menu'] = 'control/categoria_notas/menu_categoria_nota';
$this->load->view('control/pixel-admin/control_layout', $data);
}

//create
public function create(){

	$this->load->helper('form');
	$this->load->library('form_validation');
$this->form_validation->set_rules('nombre', 'Nombre', 'required');

	
	if ($this->form_validation->run() === FALSE){

		$this->load->helper('form');
		$data['title'] = 'Nuevo categoria_notas';
		$data['content'] = 'control/categoria_notas/new_categoria_nota';
		$data['menu'] = 'control/categoria_notas/menu_categoria_nota';
		$this->load->view('control/pixel-admin/control_layout', $data);

	}else{
		$this->load->helper('url');
		$slug = url_title($this->input->post('nombre'), 'dash', TRUE);
		

		
		$newcategoria_nota = array( 'nombre' => $this->input->post('nombre'), 
		 'slug' => $slug, 
		);
		#save
		$this->categoria_nota->add_record($newcategoria_nota);
		$this->session->set_flashdata('success', 'categoria_nota creado. <a href="categoria_notas/detail/'.$this->db->insert_id().'">Ver</a>');
		redirect('control/categoria_notas', 'refresh');

	}



}

//edit
public function editar(){
	$this->load->helper('form');
	$data['title']= 'Editar categoria_nota';	
	$data['content'] = 'control/categoria_notas/edit_categoria_nota';
	$data['menu'] = 'control/categoria_notas/menu_categoria_nota';
	$data['query'] = $this->categoria_nota->get_record($this->uri->segment(4));
	$this->load->view('control/pixel-admin/control_layout', $data);
}

//update
public function update(){
	$this->load->helper('form');
	$this->load->library('form_validation'); 
$this->form_validation->set_rules('nombre', 'Nombre', 'required');


	$this->form_validation->set_message('required','El campo %s es requerido.');

	if ($this->form_validation->run() === FALSE){
		$this->load->helper('form');

		$data['title'] = 'Nuevo categoria_nota';
		$data['content'] = 'control/categoria_notas/edit_categoria_nota';
		$data['menu'] = 'control/categoria_notas/menu_categoria_nota';
		$data['query'] = $this->categoria_nota->get_record($this->input->post('id'));
		$this->load->view('control/pixel-admin/control_layout', $data);
	}else{		
		$id=  $this->input->post('id');
		$this->load->helper('url');
		$slug = url_title($this->input->post('nombre'), 'dash', TRUE);

		if($this->input->post('slug')){
			$this->load->helper('url');
			$slug = url_title($this->input->post('nombre'), 'dash', TRUE);
		}

		$editedcategoria_nota = array(  
			'nombre' => $this->input->post('nombre'),
			'slug' => $slug,
		);
		#save
		$this->session->set_flashdata('success', 'categoria_nota Actualizado!');
		$this->categoria_nota->update_record($id, $editedcategoria_nota);
		if($this->input->post('id')!=""){
			redirect('control/categoria_notas', 'refresh');
		}else{
			redirect('control/categoria_notas', 'refresh');
		}

	}

}


//delete comfirm		
public function delete_comfirm(){
	$this->load->helper('form');
	$data['content'] = 'control/categoria_notas/comfirm_delete';
	$data['title'] = 'Eliminar categoria_nota';
	$data['menu'] = 'control/categoria_notas/menu_categoria_nota';
	$data['query'] = $data['query'] = $this->categoria_nota->get_record($this->uri->segment(4));
	$this->load->view('control/pixel-admin/control_layout', $data);


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

		$data['content'] = 'control/categoria_notas/comfirm_delete';
		$data['title'] = 'Eliminar categoria_nota';
		$data['menu'] = 'control/categoria_notas/menu_categoria_nota';
		$data['query'] = $this->categoria_nota->get_record($this->input->post('id'));
		$this->load->view('control/pixel-admin/control_layout', $data);
	}else{
		#validation passed
		$this->session->set_flashdata('success', 'categoria_nota eliminado!');

		$prod = $this->categoria_nota->get_record($this->input->post('id'));
			$path = 'images-categoria_notas/'.$prod->filename;
			if(is_link($path)){
				unlink($path);
			}

		$id_item = $this->uri->segment(4);
		

		$this->categoria_nota->delete_record($id_item);
		redirect('control/categoria_notas', 'refresh');
		

	}
}


} //end class

?>