<?php
class Database extends Mudl_controller{

    function __Construct(){
        parent::__Construct();
        $this->data['page'] = "database";

    }
    
    public function journal()
    {
        $this->load->view('database/journal', $this->data);
    }
    
    public function news()
    {
        $this->load->view('database/news', $this->data);
    }

    public function picture()
    {
        $this->load->view('database/picture', $this->data);
    }

    public function press_release()
    {
        $this->load->view('database/press_release', $this->data);
    }

    public function report()
    {
        $this->load->view('database/report', $this->data);
    }

    public function successful_story()
    {
        $this->load->view('database/successful_story', $this->data);
    }

    public function video()
    {
        $this->load->view('database/video', $this->data);
    }
}