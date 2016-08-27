<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	
	public function index()
	{
		$data['title'] = 'Dashboard';
		$this->load->view('back/header',$data);
		$this->load->view('back/navigation');
		$this->load->view('back/form/news');
		$this->load->view('back/content');
		$this->load->view('back/footer');
	}

}
?>
