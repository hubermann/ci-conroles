<?php  

class Evento extends CI_Model{

	public function __construct(){

	$this->load->database();

	}
	public function get_records($num,$start)
	{
		$this->db->select("eventos.*,categoria_eventos.id as categoria_id,categoria_eventos.nombre as categoria_nombre");
	  $this->db->from("eventos");
	  $this->db->join("categoria_eventos", "categoria_eventos.id = eventos.categoria_id",'left');
		$this->db->order_by('eventos.id','ASC')->limit($num,$start);
		return $this->db->get()->result();
	}

	

	//detail
	public function get_record($id){
		$this->db->where('id' ,$id);
		$this->db->limit(1);
		$c = $this->db->get('eventos');

		return $c->row(); 
	}
	
	//total rows
	public function count_rows(){ 
		$this->db->select('id')->from('eventos');
		$query = $this->db->get();
		return $query->num_rows();
	}



		//add new
		public function add_record($data){ $this->db->insert('eventos', $data);
				

	}


		//update
		public function update_record($id, $data){

			$this->db->where('id', $id);
			$this->db->update('eventos', $data);

		}

		//destroy
		public function delete_record($id){

			$this->db->where('id', $id);
			$this->db->delete('eventos');
		}


		/*
		public function traer_nombre($id){
					$this->db->where('eventos_categoria_id' ,$id);
					$this->db->limit(1);
					$c = $this->db->get('eventos');

					return $c->row('nombre'); 
				}
		
		*/

}

?>