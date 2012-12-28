<?php  

/*
	Controller Show Mahasiswa
	digunakan user yang telah login untuk melihat mahasiswa lain.
*/
class Show_Mahasiswa extends AP_Controller{

	/*
		pada landing page ini pengguna dapat mencari mahasiswa berdasarkan nim. pada view disuguhkan search bar.
	*/
	function index(){
		
		$this->setContent('mahasiswa/multi');

	}
	
	function nim($ids = null){
		
		echo $ids;

		//$this->setContent('mahasiswa/single');
	}

	function search($search_string){
		echo 'searching :'.$search_string;
	}

}

?>