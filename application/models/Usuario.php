<?php  

class Usuario extends CI_Model{

	public function __construct(){

	$this->load->database();

	}
	//all
	public function get_records($num,$start){
		$this->db->select()->from('usuarios')->order_by('id','ASC')->limit($num,$start);
		return $this->db->get()->result();

	}

	//detail
	public function get_record($id){
		$this->db->where('id' ,$id);
		$this->db->limit(1);
		$c = $this->db->get('usuarios');

		return $c->row(); 
	}
	
	//total rows
	public function count_rows(){ 
		$this->db->select('id')->from('usuarios');
		$query = $this->db->get();
		return $query->num_rows();
	}



		//add new
		public function add_record($data)
		{ 
			$this->db->insert('usuarios', $data);
		}


		//update
		public function update_record($id, $data){

			$this->db->where('id', $id);
			$this->db->update('usuarios', $data);

		}

		//destroy
		public function delete_record($id){

			$this->db->where('id', $id);
			$this->db->delete('usuarios');
		}


		/*
		public function traer_nombre($id){
					$this->db->where('usuarios_categoria_id' ,$id);
					$this->db->limit(1);
					$c = $this->db->get('usuarios');

					return $c->row('nombre'); 
				}
		
		*/

}

?>
