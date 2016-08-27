<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {

	public function index()
	{
		$this->load->view('front/header');
		$this->load->view('front/header-menu');
		$this->load->view('front/content');
		$this->load->view('front/sidebar');
		$this->load->view('front/footer');
	}
}

?>
