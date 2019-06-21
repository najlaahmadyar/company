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

    public function video()
    {
        $this->load->view('database/video', $this->data);
    }
}