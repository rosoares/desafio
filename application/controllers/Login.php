<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct(){
		parent::__construct();
		$this->load->model('Usuarios_model', 'usuarios');
	}

	public function index()
	{
		$this->load->view('login');
	}

	public function Logar()
	{
		$email = $this->input->post('email', TRUE);
		$senha = $this->input->post('senha', TRUE);
		$usuario = $this->usuarios->logar($email, $senha);
		if (is_null($usuario)) {
			echo 0;
		} else{
			$this->session->set_userdata((array)$usuario);
			echo 1;
		}
	}
}
