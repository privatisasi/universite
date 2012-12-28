<?php 

class Mahasiswa_Model extends CI_Model{

	function __construct(){
		parent::__construct();
	}

	function all(){

		$this->db->select('*');
		$this->db->from('mahasiswa');
		$this->db->join('profile', 'mahasiswa.nim = profile.id`');

		$query = $this->db->get();

		return $query->result();

	}

	function single($nim){

		$this->db->where('nim', $nim);
		$this->db->limit(1);
		$query = $this->db->get('mahasiswa');

		return $query->result();

	}

}

?>