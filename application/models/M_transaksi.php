<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_transaksi extends CI_Model
{

	public function simpan_transaksi($data)
	{
		$this->db->insert('tb_transaksi', $data);
	}

	public function simpan_detail_transaksi($data_detail)
	{
		$this->db->insert('tb_detail_transaksi', $data_detail);
	}

	// public function belum_bayar()
	// {
	// 	$this->db->select('*');
	// 	$this->db->from('tb_transaksi');
	// 	$this->db->where('status_bayar=0');
	// 	$this->db->order_by();
	// }
}
