<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {


	public function index()
	{
		$this->load->view('template/headerlogin');
		$this->load->view('home_menu/login/login');
		$this->load->view('template/footerlogin');
	}

}
