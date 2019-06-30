<?php
class Cms_controller extends Mudl_controller {

	function __construct(){
        parent::__construct();
        
		$this->assets = $this->url ."assets/cms/";
        $this->error = $this->url .'error/index';
        
		$this->data["assets"] = $this->assets;

		if($this->log_lib->loggedin() == false){
            redirect($this->url.'home/login');           
        }
	}

}