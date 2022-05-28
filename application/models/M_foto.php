<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_foto extends CI_Model
{
	public function get_all_data()
	{
		$this->db->select('*');
		$this->db->from('tb_galeri');
		$this->db->join('tb_kategori_galeri', 'tb_kategori_galeri.id_kategori_galeri = tb_galeri.id_kategori_galeri', 'left');
		$this->db->order_by('tb_galeri.id_galeri', 'desc');
		return $this->db->get()->result();
	}

	public function get_all_kategori_galeri()
	{
		$this->db->select('*');
		$this->db->from('tb_kategori_galeri');
		$this->db->order_by('id_kategori_galeri', 'desc');
		return $this->db->get()->result();
	}

	public function kategori_foto($id_kategori_galeri)
	{
		$this->db->select('*');
		$this->db->from('tb_kategori_galeri');
		$this->db->where('id_kategori_galeri', $id_kategori_galeri);
		return $this->db->get()->row();
	}

	public function get_all_data_foto($id_kategori_galeri)
	{
		$this->db->select('*');
		$this->db->from('tb_galeri');
		$this->db->join('tb_kategori_galeri', 'tb_kategori_galeri.id_kategori_galeri = tb_galeri.id_kategori_galeri', 'left');
		$this->db->where('tb_galeri.id_kategori_galeri', $id_kategori_galeri);

		return $this->db->get()->result();
	}
}
