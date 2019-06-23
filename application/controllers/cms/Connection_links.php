<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Connection_links extends Cms_controller{

	function __Construct(){
		parent::__Construct();

		$this->data['page_title'] = "Connection Links";
		$this->data['page'] = 'connection_link';		
        $this->load->model('common_model');	
        $this->common_model->set('connection_links', 'l_id');	
	}

	public function index()
	{        		
		$link = $this->common_model->get(null, true);		
        $this->data['link'] = $link;
        
		$this->load->view('cms/connection_link/edit', $this->data);		
	
	}

	public function save($id = null){

		$link = $this->common_model->array_from_post(array('speaker_phone','speaker_email', 'hr_phone', 'hr_email', 'npa_phone', 'npa_email', 'com_phone', 'facebook', 'twitter', 'linkedin', 'youtube'), 'l_');
	
		$this->common_model->save($link, $id);
		redirect($this->url.'cms/connection_links');
	}

}
  