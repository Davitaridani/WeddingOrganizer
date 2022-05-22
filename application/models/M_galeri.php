<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_galeri extends CI_Model
{
	public function get_all_data()
	{
		$this->db->select('*');
		$this->db->from('tb_galeri');
		$this->db->join('tb_kategori_galeri', 'tb_kategori_galeri.id_kategori_galeri = tb_galeri.id_kategori_galeri', 'left');
		$this->db->order_by('tb_galeri.id_galeri', 'desc');
		return $this->db->get()->result();
	}

	public function get_data($id_galeri)
	{
		$this->db->select('*');
		$this->db->from('tb_galeri');
		$this->db->join('tb_kategori_galeri', 'tb_kategori_galeri.id_kategori_galeri = tb_galeri.id_kategori_galeri', 'left');
		$this->db->where('id_galeri', $id_galeri);
		return $this->db->get()->row();
	}

	public function add($data)
	{
		$this->db->insert('tb_galeri', $data);
	}

	public function edit($data)
	{
		$this->db->where('id_galeri', $data['id_galeri']);
		$this->db->update('tb_galeri', $data);
	}

	public function delete($data)
	{
		$this->db->where('id_galeri', $data['id_galeri']);
		$this->db->delete('tb_galeri', $data);
	}
}
