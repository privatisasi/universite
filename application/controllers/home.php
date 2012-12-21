<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends AP_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function test(){
		$this->setContent();
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */