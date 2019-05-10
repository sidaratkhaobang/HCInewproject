<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('blog');
		$this->load->view('template/js');
	
	}


	public function blog_single()
	{
		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('blog-single');
		$this->load->view('template/js');
	
	}

	
}