<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_konsultasi extends CI_Model
{
	public function get_all_data()
	{
		$this->db->select('*');
		$this->db->from('tb_konsultasi');
		$this->db->order_by('id_konsultasi', 'desc');
		return $this->db->get()->result();
	}

	public function add($data)
	{
		$this->db->insert('tb_konsultasi', $data);
	}
}
