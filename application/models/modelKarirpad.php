<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class modelKarirpad extends CI_Model {
	
	public function getAll($table_name)
	{
		return $this->db->get($table_name);
	}
	
	public function getWhere($table_name, $data)
	{
		return $this->db->get_where($table_name, $data);
	}

	public function insert($table_name, $data){
		$this->db->insert($table_name, $data);
	}

	public function update($table_name, $data_update, $where){
		$this->db->set($data_update)->where($where)->update($table_name);
	}

	public function delete($table_name, $data){
		$this->db->delete($table_name, $data);
	}
}
