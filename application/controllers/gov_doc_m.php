<?php
class Gov_doc_m extends Mudl_controller{

    function __Construct(){
        parent::__Construct();
        $this->data['page'] = "document";

    }
    
    public function law()
    {
        $this->load->view('gov_doc_m/law', $this->data);
    }

    public function instruction()
    {
        $this->load->view('gov_doc_m/instruction', $this->data);
    }

    public function policy()
    {
        $this->load->view('gov_doc_m/policy', $this->data);
    }

    public function regulation()
    {
        $this->load->view('gov_doc_m/regulation', $this->data);
    }

    public function strategy()
    {
        $this->load->view('gov_doc_m/strategy', $this->data);
    }

    public function understanding()
    {
        $this->load->view('gov_doc_m/understanding', $this->data);
    }
}