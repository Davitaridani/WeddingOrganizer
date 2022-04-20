<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_auth extends CI_Model
{
	public function login_user($email, $password)
	{
		$this->db->select('*');
		$this->db->from('tb_user');
		$this->db->where([
			'email' => $email,
			'password' => $password
		]);
		return $this->db->get()->row();
	}
}
