<?php  

class Cita extends CI_Model{

	public function __construct(){

	$this->load->database();

	}
	//all
	public function get_records($num,$start){
		$this->db->select()->from('citas')->order_by('id','ASC')->limit($num,$start);
		return $this->db->get()->result();

	}

	//detail
	public function get_record($id){
		$this->db->where('id' ,$id);
		$this->db->limit(1);
		$c = $this->db->get('citas');

		return $c->row(); 
	}
	
	//total rows
	public function count_rows(){ 
		$this->db->select('id')->from('citas');
		$query = $this->db->get();
		return $query->num_rows();
	}



		//add new
		public function add_record($data){ $this->db->insert('citas', $data);
				

	}


		//update
		public function update_record($id, $data){

			$this->db->where('id', $id);
			$this->db->update('citas', $data);

		}

		//destroy
		public function delete_record($id){

			$this->db->where('id', $id);
			$this->db->delete('citas');
		}


		/*
		public function traer_nombre($id){
					$this->db->where('citas_categoria_id' ,$id);
					$this->db->limit(1);
					$c = $this->db->get('citas');

					return $c->row('nombre'); 
				}
		
		*/

}

?>