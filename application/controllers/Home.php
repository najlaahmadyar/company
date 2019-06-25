<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Mudl_controller{

	function __Construct()
	{
		parent::__Construct();
        $this->data['page'] = "home";

	}

	public function index()
	{
		$this->load->model('news_model');
		$this->load->model('project_model');
		$this->load->model('major_work_model');

		$this->db->limit(4);
		$this->data['news'] = $this->news_model->get();

		$this->data['projects'] = $this->project_model->get();

		$this->data['works'] = $this->major_work_model->get();

		// var_dump($this->data['news']);

		// exit;

		$this->load->view('home', $this->data);
	}

	public function contact()
	{
        $this->data['page'] = "contact";

		$this->load->view('contact/contact', $this->data);
	}

	public function send(){
		$this->load->model('common_model');
		$this->common_model->set('contact_us', 'cu_id');

		$contact = $this->common_model->array_from_post(array('fullname', 'province', 'email', 'phone', 'message'), 'cu_');

		$this->common_model->save($contact);

		// $name = $this->input->post('fullname');
		// $email = $this->input->post('email');
		// $phone = $this->input->post('phone');
		// $content = $this->input->post("message");
		// $subject = $this->input->post("subject");

		// $message = '<div class="col-sm-12">
		// 	<h4>Fullname: '.$name.'</h4>
		// 	<h4>Phone: '.$phone.'</h4>
		// 	<h4>Email Address: '.$email.'</h4>
		// 	</br></br>

		// 	<p>'.$content.'</p>
		
		// </div>';


		// $this->load->library('email');
		// $this->email->set_newline("\r\n");
		// $this->email->from('ahmadyar.najla@gmail.com');
		// // $this->email->to($to);
		// $this->email->to('ahmadyar.najla@gmail.com');
		// $this->email->subject("Mudl Website contact us message");
		// $this->email->message($content);
		// if($this->email->send()){
		// 	echo "sent";
		// }else{
		// 	echo "failed";
		// }

		redirect($this->url.'home/contact');

	}


	public function urban_sector()
	{
		$this->load->view('urban_sector/urban_sector', $this->data);
	}

	public function change_lang($lang){

		if($lang == 'dari'){
			$lang = 'dari';
		}else if( $lang == 'pashto'){
			$lang = 'pashto';
		}else{
			$lang = 'eng';
		}

		$this->session->set_userdata('lang',$lang);

		redirect($_SERVER['HTTP_REFERER']);

	}
	public function coming_soon(){
		$this->data['page'] = "sector";
 		echo "<center><h4>Coming soon....</h4></center>";
	}
	public function login(){
		$this->load->view('login', $this->data);
	}
}
