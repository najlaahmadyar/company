<?php 
class Project_model extends Mudl_model{

	protected	$_table_name		= 'project';
	protected	$_primary_key		= 'p_id';	

	function __construct(){
		parent::__construct();
	}

	public function get_new(){
		$project = new stdClass();

		$project->p_id = null;
		$project->p_title_dari = null;
		$project->p_title_pashto = null;
		$project->p_title_eng = null;
		$project->p_desc_dari = null;
		$project->p_desc_pashto = null;
		$project->p_desc_eng = null;
		$project->p_photo = null;
		
		return $project;
	}

}