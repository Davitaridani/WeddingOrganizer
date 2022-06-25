<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_jadwal extends CI_Model
{



	public function get_all_data_job()
	{
		$this->db->select('*');
		$this->db->from('tb_transaksi');
		// $this->db->join('tb_transaksi', 'tb_transaksi.no_order = tb_detail_transaksi.no_order', 'left');
		// $this->db->join('tb_produk', 'tb_produk.id_produk = tb_detail_transaksi.id_produk', 'left');
		// $this->db->where('YEAR(tgl_order)', $tahun);
		$this->db->where('status_bayar', 3);
		$this->db->order_by('id_transaksi', 'desc');
		return $this->db->get()->result();
	}


	public function changeSelesai($data)
	{
		$this->db->where('id_transaksi', $data['id_transaksi']);
		$this->db->set('status_order', 4);
		$this->db->update('tb_transaksi');
	}
}
