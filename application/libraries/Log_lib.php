<?php

class Log_lib {

	function __construct(){
		$this->ci =& get_instance();
		// $this->ci->load->model("common_model");
	}

	public function login($user){
		$data = array(
			'user_id'	=> $user->user_id,
			'user_name'	=> $user->user_name,
			'user_role'	=> $user->user_role,
			'user_type' => $user->user_type,	
			'user_is_flexible' => $user->user_is_flexible,		
			'user_loggedin'	=> true
		);

		$this->ci->session->set_userdata($data);
		return true;
	}

	public function logout(){
		$data = array(
			'user_id',
			'user_name',
			'user_role',
			'user_type',
			'user_is_flexible',
			'user_loggedin'
		);

		// $this->log("Logged out of the system");

		$this->ci->session->unset_userdata($data);
	}

	public function loggedin(){
		return (bool) $this->ci->session->userdata("user_loggedin");
	}

	public function log($desc){
		$data = array(
			"log_user_id" => $_SESSION['user_id'],
			"log_desc" => $desc,
			"log_date" => time()
		);
		$this->ci->db->set($data);
		$this->ci->db->insert("logs");
	}

	
	public function notify($user_id = null, $user_role = null, $title, $text, $url=null){
		$date = new Jdatetime_lib(true, true, 'Asia/kabul');
        $date_time = $date->date("Y-m-d H:m:i", false, false);
		$data = array(
			"not_user_id" => $user_id,
			"not_role_id" => $user_role,
			"not_title" => $title,
			"not_text" => $text,
			"not_url" => $url,
			"not_date" => $date_time,
			"not_status" => 0
		);
		$this->ci->db->set($data);

		$this->ci->db->insert('tbl_notifications');
	}

	public function get_notification($user_id = null, $user_role = null, $new = false){		
		if($user_id){
			$this->ci->db->where('not_user_id ='.$user_id);	
		}
		if($new){
			$this->ci->db->where('not_status = 0');
		}
		$this->ci->db->order_by("not_id", "DESC");
		return $this->ci->db->get('tbl_notifications')->result();
	}

	public function userdata($property = null){
		if($property){
			return $this->ci->session->userdata($property);
		}else{
			return $this->ci->session->userdata;
		}
	}
}