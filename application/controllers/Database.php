<?php
class Database extends Mudl_controller{

    function __Construct(){
        parent::__Construct();
        $this->data['page'] = "database";

    }

    public function news()
    {
        $this->load->model('news_model');
		$this->data['newss'] = $this->news_model->get();        
        
        $this->load->view('database/news/index', $this->data);
    }

    public function news_single($n_id){
        $this->load->model('news_model');        
		$this->data['news'] = $this->news_model->get($n_id);        
        
        $this->load->view('database/news/single', $this->data); 
    }

    public function press_release()
    {
        $this->load->model('press_release_model');        
		$this->data['press'] = $this->press_release_model->get();       
        $this->load->view('database/press_release', $this->data);
    }

    public function journal()
    {
        $this->load->view('database/journal', $this->data);
    }

    public function picture()
    {
        $this->load->view('database/picture', $this->data);
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