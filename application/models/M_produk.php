<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_produk extends CI_Model
{
	public function get_all_data()
	{
		$this->db->select('*');
		$this->db->from('tb_produk');
		$this->db->join('tb_kategori', 'tb_kategori.id_kategori = tb_produk.id_kategori', 'left');
		$this->db->order_by('tb_produk.id_produk', 'asc');
		return $this->db->get()->result();
	}

	public function add($data)
	{
		$this->db->insert('tb_produk', $data);
	}

	public function edit($data)
	{
		$this->db->where('id_produk', $data['id_produk']);
		$this->db->update('tb_produk', $data);
	}

	public function delete($data)
	{
		$this->db->where('id_produk', $data['id_produk']);
		$this->db->delete('tb_produk', $data);
	}
}
