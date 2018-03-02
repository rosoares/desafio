<?php

class Usuarios_model extends CI_Model{

	private $tabela = 'usuarios';

	public function __construct(){
		parent::__construct();
		$this->load->library('encrypt');
	}

	public function cadastrar($insert_array)
	{
		$this->db->insert($this->tabela, $insert_array);
		return true;
	}

	public function logar($email, $senha)
	{
		$result = $this->db->get_where($this->tabela, array('email' => $email, 'senha' => $senha) );
		if ($result->num_rows() == 1) {
			return $result->row();
		} else{
			return null;
		}
	}
}

?>