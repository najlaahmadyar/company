<?php
class Mudl_model extends CI_Model{

	protected	$_table_name		= '';
	protected	$_primary_key		= '';
	protected	$_primary_filter	= 'intval';
	protected	$_order_by			= '';

	public 		$rules				= array();

	function __construct(){
		parent::__construct();
	}


	public function set($table, $pk, $order = null){
        $this->_table_name = $table;
        $this->_primary_key = $pk;

        if($order){
            $this->_order_by = $order;
        }else{
            $this->_order_by = $pk;
        }
    }

    
	public function join($table, $on, $type = "inner"){
		$this->db->join($table, $on, $type);
	}

	// Getting user input
	public function array_from_post(array $fields, $perfix = null){
		$data = array();
		foreach ($fields as $field) {
			$value = htmlentities($this->input->post($field));
			$value = ($value != '') ? $value : null;
			$data[$perfix.$field] = $value;
		}
		return $data;
	}
    


	public function get($id = null, $single = false, $properties = null, $limit = null){
		if($id != null){
			$filter = $this->_primary_filter;
			$id = $filter($id);
			$this->db->where($this->_primary_key, $id);
			$mehtod = 'row';
		}else if($single == true){
			$mehtod = 'row';
		}else{
			$mehtod = 'result';
		}

		if($properties){
			$this->db->select($properties);
		}

		if($limit){
			$this->db->limit($limit);
		}
		
		$this->db->order_by($this->_primary_key, 'desc');

		$data = $this->db->get($this->_table_name)->$mehtod();

		return $data;
	}

	public function get_by($where, $single = false, $properties = null, $limit = null){
		$this->db->where($where);
		return $this->get(null, $single, $properties, $limit);
	}

	public function save($data, $id = null){
		// Insert
		if($id == null){
			// !isset($data[$this->_primary_key]) || $data[$this->_primary_key] = null;
			$this->db->set($data);
			$this->db->insert($this->_table_name);
			return $this->db->insert_id();
		}

		// Update
		else{
			$filter = $this->_primary_filter;
			$id 	= $filter($id);

			$this->db->set($data);
			$this->db->where($this->_primary_key, $id);
			$this->db->update($this->_table_name);
			return $id;
		}

		return false;
	}

	public function delete($id){
		$filter = $this->_primary_filter;
		$id 	= $filter($id);

		if(!$id){
			return false;
		}

		$this->db->where($this->_primary_key, $id);
		$this->db->limit(1);
		$this->db->delete($this->_table_name);
		return true;
	}

	public function empty_table(){
		$this->db->empty_table($this->_table_name);
		return true;
	}

	public function update($data, $where){
		$this->db->set($data);
		$this->db->where($where);
		$this->db->update($this->_table_name);
	}

	public function order($order){
		$this->db->order_by($order);
	}

	public function count($where = null){
		if($where !== null){
			$this->db->where($where);
		}
		$count = $this->db->count_all_results($this->_table_name);
		return $count;
	}
    

    public function hash($string){
		// return $string;
		return hash('sha512', $string . $this->config->item('encryption_key'));
	}

	function insert_data( array $fields){
		$data = array();
		$i = 0;
		foreach ($fields as $field) {

		 	$data[$field] = $this->input->post($field)[$i];
		 	$i++;
		}
		return $data;
	}

	public function save_batch($table, $data){
		$this->db->insert_batch($table, $data);
	}	
}