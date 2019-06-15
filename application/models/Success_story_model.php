<?php 
class Success_story_model extends Mudl_model{

	protected	$_table_name		= 'success_story';
	protected	$_primary_key		= 'ss_id';	

	function __construct(){
		parent::__construct();
	}

	public function get_new(){
		$s_story = new stdClass();

		$s_story->ss_id = null;
		$s_story->ss_title_dari = null;
		$s_story->ss_title_pashto = null;
		$s_story->ss_title_eng = null;
		$s_story->ss_desc_dari = null;
		$s_story->ss_desc_pashto = null;
		$s_story->ss_desc_eng = null;
		$s_story->ss_image = null;
		$s_story->ss_date = null;
		
		return $s_story;
	}

}