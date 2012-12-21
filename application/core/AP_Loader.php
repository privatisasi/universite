<?php  


class AP_Loader extends CI_Loader{

	function __construct(){
		parent::__construct();
	}

	function render_css($name){

		if(!is_array($name)){
			return "<link href='".base_url()."assets/css/".$name."' rel='stylesheet' type='text/css'/>";
		} else {
			foreach ($name as $single_name) {
				
			}
			return true;
		}
	}

}

?>