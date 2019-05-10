<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Movieticket extends CI_Controller {


	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('home_menu/movieticket/movieticket');
		$this->load->view('template/js');
		// $this->load->view('template/footer');
	}
}
