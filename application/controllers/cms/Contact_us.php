defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Cms_controller{

	function __Construct()
	{
		parent::__Construct();
        
		$this->data['page_title'] = "List of Journals";
		$this->data['page'] = 'database';		
		$this->load->model('journal_model');		
	}

	public function index()
	{
		$this->load->view('cms/home', $this->data);
	}
}
