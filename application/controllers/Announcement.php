<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Announcement extends Mudl_controller{

	function __Construct(){
        parent::__Construct();
        $this->data['page'] = "home";
	}

	public function job(){
        $this->load->model('job_announcement_model');
        $this->data['jobs'] = $this->job_announcement_model->get();

        $this->load->view('job_announcement/index', $this->data);
    }

    public function procurement(){
        $this->load->model('procurement_announcement_model');
        $this->data['procurements'] = $this->procurement_announcement_model->get();

        $this->load->view('procurement_announcement/index', $this->data);
    }
}
