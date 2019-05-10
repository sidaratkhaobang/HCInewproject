<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {


	public function index()
	{
		$this->load->view('template/headlogin');
		$this->load->view('home_menu/login/login');
	}
}
