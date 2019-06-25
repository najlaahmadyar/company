<?php

class Log_lib {

	function __construct(){
		$this->ci =& get_instance();
		// $this->ci->load->model("common_model");
	}

	public function login($user){
		$data = array(
			'id'	=> $user->id,
			'username'	=> $user->username,
			'role'	=> $user->role,	
			'user_loggedin'	=> true
		);

		$this->ci->session->set_userdata($data);
		return true;
	}

	public function logout(){
		$data = array(
			'id',
			'username',
			'role',
			'user_loggedin'
		);

		// $this->log("Logged out of the system");

		$this->ci->session->unset_userdata($data);
	}

	public function loggedin(){
		return (bool) $this->ci->session->userdata("user_loggedin");
	}


	public function userdata($property = null){
		if($property){
			return $this->ci->session->userdata($property);
		}else{
			return $this->ci->session->userdata;
		}
	}
}