<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_admin extends CI_Model
{
	public function total_produk()
	{

		return $this->db->get('tb_produk')->num_rows();
	}

	public function total_kategori()
	{
		return $this->db->get('tb_kategori')->num_rows();
	}

	public function total_transaksi()
	{
		return $this->db->get('tb_transaksi')->num_rows();
	}

	public function total_customer()
	{
		return $this->db->get('tb_customer')->num_rows();
	}

	public function total_pesanan_masuk()
	{
		return $this->db->get('tb_transaksi')->num_rows();
		$this->db->where('status_order=1');
	}
}
