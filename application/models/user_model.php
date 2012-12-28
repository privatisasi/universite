<?php 

class User_Model extends CI_Model{

	public function __construct(){
		parent::__construct();
		$this->__clear_cache();
	}

	private function __clear_cache() {
        $this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
        $this->output->set_header("Pragma: no-cache");
    }

	/*
		Fungsi ini digunakan untuk cek autentikasi user
		@return object | false
	*/
	function check_auth($username = null, $password = null){
		if((!$username and empty($username)) and (!$password and empty($password))){
			return false;
		} else {
			

			// Active Record
			// utilitas yang dibuat Ci untuk mempermudah interaksi database dengan beberapa fasilitas
			// seperti kemanan 'escape string', object mapping, dan lain lain.
			$this->db->where('nim', $username);
			$this->db->where('password', sha1($password));
			$this->db->limit('1');

			$m_user = $this->db->get('mahasiswa');

			// SELECT * FROM mahasiswa WHERE nim = $username AND password = SHA1($password);

			foreach ($m_user->result() as $obj) {
				return $obj;
			}
		}

		return false;
	}

	/*
		Fungsi ini digunakan untuk mengambil data single (profile) dari user terkait
		@return object | false
	*/
	function get_single($username = null){

		if((!$username and empty($username))){
			return false;
		} else {
			
			$this->db->where('nim', $username);
			$this->db->limit('1');
			// kurang join-join tabel terkait

			$m_user = $this->db->get('mahasiswa');

			foreach ($m_user->result() as $obj) {
				return $obj;
			}
		}

		return false;

	}

}

?>