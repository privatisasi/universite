<?php 

/*
	Class ini digunakan untuk mengendalikan request informasi tentang user (mahasiswa)

	==================
	untuk debug extends controller dapat diganti ke CI_Controller{}
	jika sudah selesai debug extends Security_Controller{}
	==================
*/
class User_Profile extends Secure_Controller{

	protected $ids;
	protected $nim;


	// basic init
	public function __construct(){
		parent::__construct();
		$this->load->model('User_Model','user_model');
	}

	/*
		basic landing page dari mahasiswa. ditampilkan info mahasiswa dan beberapa simpulan data tertentu contoh
		- notif ada pesan baru
		- notif ada pesan dari keuangan
		- notif ada penghargaan baru.
	*/
	function index(){
		$nim = $this->session->userdata('username');
		$user = $this->user_model->get_single($nim);
		if($user and is_object($user)){
			$this->data['user'] = $user;
		}

		$this->setContent('user/profile', $this->data);
		

	}
	
	/*
		fasilitas edit info mahasiswa terkait.
	*/
	function edit_info($ids = null){
		echo 'page '.$ids;
	}

	/*
		fasilitas untuk melihat pesan dari beberapa aspek contoh -> biro keuangan, jurusan, fakultas, akademik 
	*/
	function message(){
		echo 'message';
	}


}

?>