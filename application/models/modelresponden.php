<?php
class modelresponden extends CI_Model {
 
  function get_data($table){
		return $this->db->get($table);
	}

	// fungsi untuk menginput data ke database
	function insert_data($data,$table){
		$this->db->insert($table,$data);
		return $this->db->insert_id();
	}

	// fungsi untuk mengedit data
	function edit_data($where,$table){
		return $this->db->get_where($table,$where);
	}
	// fungsi untuk mengupdate atau mengubah data di database
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	// fungsi untuk menghapus data dari database
	function delete_data($where,$table){
		$this->db->delete($table,$where);
	}
	
	function delete_all($table){
		$this->db->empty_table($table);
	}

	function cek_login($table,$where){
		return $this->db->get_where($table,$where);
	}
	function insert_multiple($data, $table){
		$this->db->insert_batch($table, $data);
	}
	
}
