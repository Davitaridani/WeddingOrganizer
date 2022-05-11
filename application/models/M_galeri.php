<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_galeri extends CI_Model
{
	public function get_all_data()
	{
		$this->db->select('*');
		$this->db->from('tb_produk');
		$this->db->join('tb_kategori', 'tb_kategori.id_kategori = tb_produk.id_kategori', 'left');
		$this->db->order_by('tb_produk.id_produk', 'asc');
		return $this->db->get()->result();
	}

	public function get_all_data_galeri()
	{
		$this->db->select('*');
		$this->db->from('tb_kategori');
		$this->db->order_by('id_kategori', 'asc');
		return $this->db->get()->result();
	}

	public function kategori($id_kategori)
	{
		$this->db->select('*');
		$this->db->from('tb_kategori');
		$this->db->where('id_kategori', $id_kategori);
		return $this->db->get()->result();
	}

	public function get_all_galeri($id_kategori)
	{
		$this->db->select('*');
		$this->db->from('tb_galeri');
		$this->db->join('tb_galeri', 'tb_kategori.id_kategori = tb_galeri.id_kategori', 'left');
		$this->db->where('tb_galeri.id_kategori', $id_kategori);
		return $this->db->get()->result();
	}
}
