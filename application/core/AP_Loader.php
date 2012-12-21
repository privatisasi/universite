<?php  


class AP_Loader extends CI_Loader{

	function __construct(){
		parent::__construct();
	}

	function render_css($name = null){
		if(!is_array($name)){
			return "<link href='".base_url()."assets/css/".$name."' rel='stylesheet' type='text/css'/>";
		} else {
			foreach ($name as $single_name) {
				echo "<link href='".base_url()."assets/css/".$single."' rel='stylesheet' type='text/css'/>";	
			}
			return true;
		}
		return "";
	}

	function render_js($name = null){
		if(!is_array($name)){
			return "<script src='".base_url()."assets/css/".$name."' type='text/javascript'></script>";
		} else {
			foreach ($name as $single_name) {
				echo "<script src='".base_url()."assets/css/".$single."' type='text/javascript'></script>";			
			}
			return true;
		}
		return "";
	}

	function render_image($name = null, $options = array()){

		$inline_option = '';

		if(is_array($options)){
			foreach ($options as $key => $value) {
				$inline_option .= "{$key}='{$value}' ";				
			}
		}

		if(!is_array($name)){
			$image = "<img src='".base_url()."/assets/image/{$name}' {$inline_option} />";
			echo $image;
		} else {
			$image = "<img src='' {$inline_option} />";
		}
		
		return true;

	}

}

?>