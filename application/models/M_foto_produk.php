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
}
