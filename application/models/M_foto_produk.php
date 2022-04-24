<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_foto_produk extends CI_Model
{
	public function get_all_data()
	{
		$this->db->select('tb_produk.*, COUNT(tb_foto_produk.id_produk) as total_foto');
		$this->db->from('tb_produk');
		$this->db->join('tb_foto_produk', 'tb_foto_produk.id_produk = tb_produk.id_produk', 'left');
		$this->db->group_by('tb_produk.id_produk');
		$this->db->order_by('tb_produk.id_produk', 'desc');
		return $this->db->get()->result();
	}

	public function get_data($id_foto_produk)
	{
		$this->db->select('*');
		$this->db->from('tb_foto_produk');
		$this->db->where('id_foto_produk', $id_foto_produk);
		return $this->db->get()->row();
	}

	public function get_foto($id_produk)
	{
		$this->db->select('*');
		$this->db->from('tb_foto_produk');
		$this->db->where('id_produk', $id_produk);
		return $this->db->get()->result();
	}

	public function add($data)
	{
		$this->db->insert('tb_foto_produk', $data);
	}

	public function delete($data)
	{
		$this->db->where('id_foto_produk', $data['id_foto_produk']);
		$this->db->delete('tb_foto_produk', $data);
	}
}
