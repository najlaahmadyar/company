<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About_us extends Mudl_controller{

	function __Construct(){
        parent::__Construct();
        $this->load->model('common_model');
        $this->data['page'] = "about";
	}

	public function index(){
        $this->common_model->set('about_ministry', 'a_id');
        $this->data['about'] = $this->common_model->get(null,true);
        $this->load->view('about_us/introduction', $this->data);
    }
  
  public function leader_board(){
  $this->load->view('about_us/leader_board', $this->data);        
  }

  public function execution(){
  $this->load->view('about_us/execution', $this->data);        
  }

  public function presidencies(){
  $this->load->view('about_us/presidency', $this->data);      
  }

    public function provincial_profile(){
        $this->common_model->set('provicial_presidency', 'pp_id');
        $this->data['pp_data'] = $this->common_model->get(null,true);
        $this->load->view('about_us/prov_presidency', $this->data);      
    }

  public function organ_structure(){
  $this->load->view('about_us/organ_structure', $this->data);      
  }
}
