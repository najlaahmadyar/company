<?php 
class Document_model extends Mudl_model{

	protected	$_table_name		= 'official_documents';
	protected	$_primary_key		= 'doc_id';	

	function __construct(){
		parent::__construct();
	}

	public function get_new(){
		$document = new stdClass();

		$document->doc_id = null;
		$document->doc_title_dari = null;
		$document->doc_title_pashto = null;
		$document->doc_title_eng = null;
		$document->doc_file = null;
		
		return $document;
	}

}