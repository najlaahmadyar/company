<?php
class Gov_doc_m extends Mudl_controller{

    function __Construct(){
        parent::__Construct();
        $this->data['page'] = "document";
        $this->load->model('document_model');

    }
    
    public function index()
    {
        $this->data['categories'] = $this->document_model->document_category();
        $this->load->view('gov_doc_m/index', $this->data);
    }
}