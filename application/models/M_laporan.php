<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_laporan extends CI_Model
{

	public function lap_harian($tanggal, $bulan, $tahun)
	{
		$this->db->select('*');
		$this->db->from('tb_detail_transaksi');
		$this->db->join('tb_transaksi', 'tb_transaksi.no_order = tb_detail_transaksi.no_order', 'left');
		$this->db->join('tb_produk', 'tb_produk.id_produk = tb_detail_transaksi.id_produk', 'left');
		$this->db->where('DAY(tb_transaksi.tgl_order)', $tanggal);
		$this->db->where('MONTH(tb_transaksi.tgl_order)', $bulan);
		$this->db->where('YEAR(tb_transaksi.tgl_order)', $tahun);
		return $this->db->get()->result();
	}

	public function lap_bulanan($bulan, $tahun)
	{
		$this->db->select('*');
		$this->db->from('tb_detail_transaksi');
		$this->db->join('tb_transaksi', 'tb_transaksi.no_order = tb_detail_transaksi.no_order', 'left');
		$this->db->join('tb_produk', 'tb_produk.id_produk = tb_detail_transaksi.id_produk', 'left');
		$this->db->where('MONTH(tgl_order)', $bulan);
		$this->db->where('YEAR(tgl_order)', $tahun);
		$this->db->where('status_bayar', 3);
		return $this->db->get()->result();
	}

	public function lap_tahunan($tahun)
	{
		$this->db->select('*');
		$this->db->from('tb_transaksi');
		// $this->db->join('tb_transaksi', 'tb_transaksi.no_order = tb_detail_transaksi.no_order', 'left');
		// $this->db->join('tb_produk', 'tb_produk.id_produk = tb_detail_transaksi.id_produk', 'left');
		$this->db->where('YEAR(tgl_order)', $tahun);
		$this->db->where('status_bayar', 3);
		return $this->db->get()->result();
	}
}
