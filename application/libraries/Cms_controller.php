<?php
class Cms_controller extends Mudl_Controller {

	function __construct(){
        parent::__construct();
        
		$this->assets = $this->url ."assets/cms/";
        $this->error = $this->url .'error/index';
        
		$this->data["assets"] = $this->assets;
	}

}