<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model 
{
	// Mengambil semua data di database
	public function getAll()
	{
		return $this->db->get($this->_table)->result();
	}

	// Mengambil data akun sesuai username dan password
	public function ambil_akun($username, $password){
		$query = $this->db->get_where('user',
			array(
				'username' => $username,
				'password' => $password),
				1);
		return $query->result();
	}

	public function view_where($table,$where){
  		return $this->db->get_where($table,$where);
 	}
}