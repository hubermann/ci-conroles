<?php  

class Imagenes_usuario extends CI_Model{

	public function __construct(){

	$this->load->database();

	}
	//all
	public function get_records($num,$start){
		$this->db->select()->from('imagenes_usuarios')->limit($num,$start);
		return $this->db->get();

	}
	
	
	
	function view_all($id){
		
		$this->db->where('usuario_id', $id);
		return  $this->db->get('imagenes_usuarios');
		
		
		}
		
	//all by publiccacion
	public function imagenes_usuario($id_usuario){

		$this->db->select()->from('imagenes_usuarios')->where('usuario_id',$id_usuario);
		return $this->db->get();

	}

	//detail
	public function get_record($id){
		$this->db->where('id' ,$id);
		$this->db->limit(1);
		$c = $this->db->get('imagenes_usuarios');

		return $c->row(); 
	}
	
	public function get_records_menu(){
			$this->db->select()->from('imagenes_usuarios')->order_by('id','ASC');
			return $this->db->get();
	
		}
	
	//total rows
	public function count_rows(){ 
		$this->db->select('id')->from('imagenes_usuarios');
		$query = $this->db->get();
		return $query->num_rows();
	}



		//add new
		public function add_record($data){ 
		
		$this->db->insert('imagenes_usuarios', $data);
		}


		//update
		public function update_record($id, $data){

			$this->db->where('id', $id);
			$this->db->update('imagenes_usuarios', $data);

		}

		//destroy
		public function delete_record($id_imagen){

			$this->db->where('id', $id_imagen);
			$this->db->delete('imagenes_usuarios');
		}
		
		




}


?>