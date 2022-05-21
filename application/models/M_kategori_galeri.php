<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_kategori_galeri extends CI_Model
{
	public function get_all_data()
	{
		$this->db->select('*');
		$this->db->from('tb_kategori_galeri');
		$this->db->order_by('id_kategori_galeri', 'desc');
		return $this->db->get()->result();
	}

	public function add($data)
	{
		$this->db->insert('tb_kategori_galeri', $data);
	}

	public function edit($data)
	{
		$this->db->where('id_kategori_galeri', $data['id_kategori_galeri']);
		$this->db->update('tb_kategori_galeri', $data);
	}

	public function delete($data)
	{
		$this->db->where('id_kategori_galeri', $data['id_kategori_galeri']);
		$this->db->delete('tb_kategori_galeri', $data);
	}
}
