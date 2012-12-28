<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends AP_Controller {

	public function index()
	{
		if($this->session->userdata('username')){
			return redirect('user');
		}
		
		$this->setContent();
	}


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */