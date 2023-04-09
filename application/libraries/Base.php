<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Base
{
	public function __construct()
	{
		$this->ci =& get_instance();
	}
	// load data default 
	public function load_data_lib($table = 'undefained', $data = array(), $where = array())
	{
		if (!empty($data)) {
			$this->ci->db->select($data);
			$this->ci->db->where($where);
			$response = $this->ci->db->get($table)->result_array();
			return $response;
		}
	}

	// load data sql
	public function sql_data_lib($sql = 'undefained')
	{
		$response = $this->ci->db->query($sql)->result_array();
		return $response;
	}

	// insert data 
	public function insert_data_lib($table = 'undefained',$data = array())
	{
		$message = 'Data cannot be save!';
		$status = 500;
		if (!empty($data)) {
			$response = $this->ci->db->insert($table, $data);
			if ($response) {
				$message = 'Success, data is saved!';
				$status = 200;
			}else{
				$message = 'Error, database!';
			}
		}

		return array('message' => $message, 'status' => $status);
	}

	// update data  
	public function update_data_lib($table = 'undefained', $data = array(), $where = array())
	{
		$status = 500;
		$message = 'Data cannot update!, error';

		if (!empty($data)) {
			$this->ci->db->where($where);
			$response = $this->ci->db->update($table, $data);
			if ($response) {
				return array('message' => 'Success, update data','status' => 200);	
			}
			$message = 'Error, update database!';
			$status = 500;

		}

		return array('message' => $message, 'status' => $status);

	}
	// delete data
	public function delete_data_lib($table = 'undefained', $data = array(), $where = array())
	{
		$status = 500;
		$message = 'Data cannot delete!, error';

		if (!empty($data)) {
			$this->ci->db->where($where);
			$response = $this->ci->db->update($table, $data);
			if ($response) {
				return array('message' => 'Success, delete data','status' => 200);	
			}
			$message = 'Error, delete database!';
			$status = 500;

		}

		return array('message' => $message, 'status' => $status);

	}

	public function load_order_lib($table = 'undefained', $data = array(), $where = array(), $order = "")
	{
		if (!empty($data)) {
			$this->ci->db->select($data);
			$this->ci->db->where($where);
			$this->ci->db->order_by($order);
			$response = $this->ci->db->get($table)->result_array();
			return $response;
		}
	}


	public function limit_data_lib($table = 'undefained', $data = array(), $where = array(), $limit = 0)
	{
		$response = array();
		if (!empty($data)) {
			$this->ci->db->select($data);
			$this->ci->db->where($where);
			$this->ci->db->limit($limit);
			$response = $this->ci->db->get($table)->result_array();
		}

		return $response;
	}

	public function one_row_and_limit($table = 'undefained', $data = array(), $where = array())
	{
		$response = array();
		if (!empty($data)) {
			$this->ci->db->select($data);
			$this->ci->db->where($where);
			$response = $this->ci->db->get($table)->row();
			
		}

		return $response;
	}

}

/* End of file Base.php */
/* Location: ./application/libraries/Base.php */
