<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact_us extends Cms_controller{

	function __Construct()
	{
		parent::__Construct();
        
		$this->data['page_title'] = "Contact Us Messages";
		$this->data['page'] = 'contact_us';		
		$this->load->model('common_model');	
		$this->common_model->set('contact_us','cu_id');
	}

	public function index()
	{
		$this->data['contacts'] = $this->common_model->get();
		$this->load->view('cms/contact_us/index', $this->data);
	}

	public function get_message(){
		$cu_id = $this->input->get('cu_id');
		$message = $this->common_model->get($cu_id);
		echo json_encode($message);
	}
}
?>