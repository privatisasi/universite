<?php  

/*
	AP_Controller

	Controller ini digunakan sebagai perpanjangan dan modifikasi 
	dari kelas core CI_Controller. Tujuan penggunaan class ini adalah 
	pendefinisian mandiri beberapa variabel terkait dengan view dan model.
*/
class AP_Controller extends CI_Controller{

	public $data;
	public $sub_data;
	public $template;
	public $assets_path;

	public function __construct(){
		// define superclass 
		parent::__construct();
		$this->assets_path = base_url().'assets/';
		$this->getApplicationTemplate();

	}

	function getApplicationTemplate(){

		$resource_path = array(
			'css' => $this->assets_path.'css',
			'img' => $this->assets_path.'img',
			'js' => $this->assets_path.'js',
		);

		$this->data['header'] = $this->load->view('template/header', $resource_path);
		$this->data['footer'] = $this->load->view('template/footer');

	}

}

?>