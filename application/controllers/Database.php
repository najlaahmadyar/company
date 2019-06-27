<?php
class Database extends Mudl_controller{

    function __Construct(){
        parent::__Construct();
        $this->data['page'] = "database";

    }
    
    public function journal()
    {
        $this->load->model('journal_model');
        $this->data['categories'] = $this->journal_model->journal_category();
        $this->load->view('database/journal', $this->data);
    }

    public function news()
    {
        $this->load->model('news_model');
		$this->data['newss'] = $this->news_model->get();        
        
        $this->load->view('database/news/index', $this->data);
    }
    

    public function news_single($n_id){
        $this->load->model('news_model');        
		$this->data['s_news'] = $this->news_model->get($n_id);        
        
        $this->load->view('database/news/single', $this->data); 
    }

    public function press_release()
    {
        $this->load->model('press_release_model');        
		$this->data['presses'] = $this->press_release_model->get();       
        $this->load->view('database/press_release', $this->data);
    }
    public function report()
    {
        $this->load->model('report_model');   
        $this->data['reports'] = $this->report_model->get();             
        $this->load->view('database/report', $this->data);
    }

    public function single_report($rep_id){        
        $this->load->model('report_model');
        $this->data['reports'] = $this->report_model->get($rep_id);

        $this->load->view('database/single_report', $this->data);
    }

    public function success_story()
    {
        $this->load->model('success_story_model');
        $this->data['stories'] = $this->success_story_model->get();
        $this->load->view('database/successful_story', $this->data);
    }

    public function single_success_story($ss_id){        
        $this->load->model('success_story_model');
        $this->data['story'] = $this->success_story_model->get($ss_id);

        $this->load->view('database/single_success_story', $this->data);
    }

}