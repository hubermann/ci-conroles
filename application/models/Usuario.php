<?php  

class Usuario extends CI_Model{

// INSERT INTO `usuarios` (`id`, `nickname`, `password`, `salt`, `email`, `apellido`, `nombre`, `dni`, `sexo`, `nacimiento`, `edad`, `telcontacto`, `barrio`, `calle`, `numero`, `piso`, `depto`, `conocio`, `profesion`, `localidad`, `fuma`, `toma`, `descripcion`, `telcelular`, `estado_civil`, `educacion`, `provincia`, `zodiaco`, `busco`, `ocupacion`, `celular_cia`, `tel_citas`, `validado`, `hijos`, `codigo_verificacion`, `negocios`, `cod_postal`, `religion`, `foto_main`, `nacionalidad`, `activo`, `estatura`, `peso`, `contextura_fisica`, `color_pelo`, `color_ojos`, `convivencia`, `facebook`, `twitter`, `linkedin`, `youtube`, `myspace`, `badoo`, `msn`, `skype`, `whatsapp`, `google`, `tipo_busuqeda`, `completa_signin`, `claves_erroneas`, `id_paises`, `score`) VALUES
// (NULL, 'Zaraza', 'q', '', 'Zaraza@mail.com', 'Felciiaon', 'Leopoldo', '25151939', '', '', 0, '', '', '', '', '', '', '', '', '', 0, 0, '', '', 0, 0, '', '', 0, '', '', '', 0, 0, '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0),
// (NULL, 'Zaraza', 'q', '', 'Zaraz123a@mail.com', 'Zaraza', 'gabriel', '25151939', '1', '1', 1, '1', '1', '1', '1', '1', '1', '1', '1', '1', 1, 1, '1', '1', 1, 1, '1', '1', 1, '1', '1', '1', 1, 1, '1', '1', '1', '1', '1', '1', 1, 1, 1, 1, 1, 1, 1, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 1, 1, 0),
// (NULL, 'Zaraza', 'q', '', 'Zara123za@mail.com', 'Perez', 'gabriel', '25151939', '1', '1', 1, '1', '1', '1', '1', '1', '1', '1', '1', '1', 1, 1, '1', '1', 1, 1, '1', '1', 1, '1', '1', '1', 1, 1, '1', '1', '1', '1', '1', '1', 1, 1, 1, 1, 1, 1, 1, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 1, 1, 0),
// (NULL, 'Zaraza', 'q', '', 'Za123raza@mail.com', 'Mirra', 'gabriel', '25151939', '1', '1', 1, '1', '1', '1', '1', '1', '1', '1', '1', '1', 1, 1, '1', '1', 1, 1, '1', '1', 1, '1', '1', '1', 1, 1, '1', '1', '1', '1', '1', '1', 1, 1, 1, 1, 1, 1, 1, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 1, 1, 0),
// (NULL, 'Zaraza', 'q', '', 'Zara2za@mail.com', 'Azul', 'gabriel', '25151939', '1', '1', 1, '1', '1', '1', '1', '1', '1', '1', '1', '1', 1, 1, '1', '1', 1, 1, '1', '1', 1, '1', '1', '1', 1, 1, '1', '1', '1', '1', '1', '1', 1, 1, 1, 1, 1, 1, 1, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 1, 1, 0),
// (NULL, 'Zaraza', 'q', '', 'Za3raza@mail.com', 'Berto', 'gabriel', '25151939', '1', '1', 1, '1', '1', '1', '1', '1', '1', '1', '1', '1', 1, 1, '1', '1', 1, 1, '1', '1', 1, '1', '1', '1', 1, 1, '1', '1', '1', '1', '1', '1', 1, 1, 1, 1, 1, 1, 1, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 1, 1, 0),
// (NULL, 'Zaraza', 'q', '', 'Zaraz23a@mail.com', 'Orlando', 'gabriel', '25151939', '1', '1', 1, '1', '1', '1', '1', '1', '1', '1', '1', '1', 1, 1, '1', '1', 1, 1, '1', '1', 1, '1', '1', '1', 1, 1, '1', '1', '1', '1', '1', '1', 1, 1, 1, 1, 1, 1, 1, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 1, 1, 0),
// (NULL, 'Zaraza', 'q', '', 'Zara55za@mail.com', 'Michelle', 'gabriel', '25151939', '1', '1', 1, '1', '1', '1', '1', '1', '1', '1', '1', '1', 1, 1, '1', '1', 1, 1, '1', '1', 1, '1', '1', '1', 1, 1, '1', '1', '1', '1', '1', '1', 1, 1, 1, 1, 1, 1, 1, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 1, 1, 0);

	public function __construct(){

	$this->load->database();

	}
	//all
	public function get_records($num,$start){
		$this->db->select()->from('usuarios')->order_by('id','ASC')->limit($num,$start);
		return $this->db->get()->result();
	}

	//all
	public function get_records_menu(){
		$this->db->select('id,nombre,apellido,edad')->from('usuarios');
		return $this->db->get()->result();
	}

	//detail
	public function get_record($id){
		$this->db->where('id' ,$id);
		$this->db->limit(1);
		$c = $this->db->get('usuarios');

		return $c->row(); 
	}

	//detail
	public function get_autocomplete($search){
		$this->db->select('id, nombre,apellido,edad')->like('apellido' ,$search)->from('usuarios');
		return $this->db->get()->result();
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


		function check_credentials($email, $password){

			$this->db->select('*')->from('usuarios')
		->limit(1)
		->where( array('email' => $email, 'password'=> $password));
		$query = $this->db->count_all_results();


		if ($query != 1) return FALSE;

		$user = $this->db->select('*')->from('usuarios')
						->where( array('email' => $email))
						->limit(1)
						->get();

		$db_salt = $user->row('salt');
	  $db_hash = $user->row('password');
	  
	  if ($db_hash === hash('sha512', $db_salt.$password)){
	  	$sess_array = array('id' => $user->row('id'),'email' => $user->row('email'));
		
			$this->session->set_userdata('logged_in', $sess_array);

			return TRUE;
	  }
	  return FALSE;
		
	}

}

?>
