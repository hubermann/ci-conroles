<?php

class Lugar extends CI_Model{

	public function __construct(){
		$this->load->database();
	}

	//all
	public function get_records($num,$start){
		$this->db->select()->from('lugares')->order_by('id','desc')->limit($num,$start);
		return $this->db->get()->result();
	}

	public function get_records_menu(){
		$this->db->select('id, nombre')->from('lugares')->order_by('nombre','ASC');
		return $this->db->get()->result();
	}

	//detail
	public function get_record($id)
	{
		$this->db->where('id' ,$id);
		$this->db->limit(1);
		$c = $this->db->get('lugares');
		return $c->row();
	}

	//total rows
	public function count_rows()
	{
		$this->db->select('id')->from('lugares');
		$query = $this->db->get();
		return $query->num_rows();
	}



		//add new
		public function add_record($data)
		{
			$this->db->insert('lugares', $data);
	  }


		//update
		public function update_record($id, $data)
		{
			$this->db->where('id', $id);
			$this->db->update('lugares', $data);

		}

		//destroy
		public function delete_record($id){
			$this->db->where('id', $id);
			$this->db->delete('lugares');
		}


		/*
		public function traer_nombre($id){
					$this->db->where('lugares_categoria_id' ,$id);
					$this->db->limit(1);
					$c = $this->db->get('lugares');

					return $c->row('nombre');
				}

		*/

}

?>
