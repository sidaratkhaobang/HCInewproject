<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('contact');
		$this->load->view('template/js');
	
    }
}