<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	
	public function index()
	{
		$data['title'] = 'Login Cpanel';
		$this->load->view('back/header',$data);
		$this->load->view('back/form/login');
		$this->load->view('back/footer');
	}
}
?>
