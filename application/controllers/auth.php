<?php  

/*
	Class Auth
*/
class Auth extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('User_Model','user_model');
	}

	function index(){
		
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		if(!$username and !$password){
			$this->session->set_flashdata('error','undesire error');
			return redirect('home', 'refresh');
		} else {
			
			$auth_res = $this->user_model->check_auth($username, $password);
			
			if($auth_res){

				$new_session = array(
					'username' 	=> $username,
					'email'		=> $auth_res->email,
					'logged_in'	=> true,
				);

				if (!get_cookie('sima_user_auth')) {
				    // cookie not set, first visit
				    // create cookie to avoid hitting this case again
				    $new_cookies = array(
						'name'   => 'user_auth',
					    'value'  => array($username, sha1($password)),
					    'expire' => time()+86500,
					);
				    set_cookie($new_cookies);

				}

				$this->session->set_userdata($new_session);

				return redirect('user');
			}

		}

		$this->session->set_flashdata('error','no action check credential');
		return redirect('home','refresh');

	}

	function logout(){

		$this->session->sess_destroy();
		delete_cookie("sima_user_auth");
		return redirect(base_url(),'refresh');

	}



}

?>