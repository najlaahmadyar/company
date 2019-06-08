<?php
class Gov_doc_m extends Mudl_controller{

    function __Construct(){
        parent::__Construct();
    }
    
    public function law()
    {
        $this->load->view('law', $this->data);
    }

    public function instruction()
    {
        $this->load->view('instruction', $this->data);
    }

    public function policy()
    {
        $this->load->view('policy', $this->data);
    }

    public function Regulation()
    {
        $this->load->view('Regulation', $this->data);
    }

    public function strategy()
    {
        $this->load->view('strategy', $this->data);
    }

    public function Understanding()
    {
        $this->load->view('Understanding', $this->data);
    }
}