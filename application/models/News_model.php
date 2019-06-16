<?php 
class News_model extends Mudl_model{

	protected	$_table_name		= 'news';
	protected	$_primary_key		= 'n_id';	

	function __construct(){
		parent::__construct();
	}

	public function get_new(){
		$news = new stdClass();

		$news->n_id = null;
		$news->n_title_dari = null;
		$news->n_title_pashto = null;
		$news->n_title_eng = null;
		$news->n_desc_dari = null;
		$news->n_desc_pashto = null;
		$news->n_desc_eng = null;
		$news->n_photo = null;
		$news->n_datetime = null;
		
		return $news;
	}

}