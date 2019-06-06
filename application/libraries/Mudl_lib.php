<?php
class Mudl_lib {

	function __construct(){
		$this->ci =& get_instance();
		// $this->ci->load->model("common_model");
	}
	public function upload_file($path, $name, $allowed_types){
		$config['upload_path']          = $path;
		$config['allowed_types']        = $allowed_types;		
		$config['max_size'] = '2048'; 
		$config['file_name'] = $_FILES[$fils]['name'];
		$this->load->library('upload', $config);
		if($this->upload->do_upload($file)){
			$data = array('upload_data' => $this->upload->data());
			return $data;
		}
	}

	// Function for Creating a folder for every employee files
	public function create_employee_folder($emp_id, $emp_name, $dept_name){
		$dept_name = explode(" ", $dept_name);
        $dept_name = implode("_",$dept_name);
        $dept_name = strtolower($dept_name);

        $emp_name = strtolower($emp_name);

		$folder_name = $emp_name.'_'.$dept_name.'_'.$emp_id;
		
		return $folder_name;
	}

	public function download($fileName = NULL) {   
		if ($fileName) {
			$file = realpath ( "uploads" ) . "\\" . $fileName;
			// check file exists    
			if (file_exists ( $file )) {
				// get file content
				$data = file_get_contents ( $file );
				//force download
				force_download ( $fileName, $data );
			} else {
				// Redirect to base url
				redirect ( base_url () );
			}
		}
	}

	public function count($table , $where = null){
		if($where !== null){
			$this->ci->db->where($where);
		}
		$count = $this->ci->db->count_all_results($table);
		return $count;
	}
	
// Leaves Functions

	// Get employee leaves Full details 
	public function get_employee_leave($emp_id){
		$ci->db->where('empleave_emp_id', $emp_id);
		return $ci->db->get('tbl_employee_leaves')->result();
	}

	// Current Month


}
    
?>