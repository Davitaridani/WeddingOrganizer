<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pesanan_saya extends CI_Controller
{
	public function index()
	{
		$data = [
			'title' => 'Pesanan Saya',
			// 'belum_bayar' => $this->m_transaksi->belum_bayar(),
			'isi' => 'frontEnd/pesanan_saya'
		];
		$this->load->view('frontEnd/include/wrapper', $data, FALSE);
	}

	// Kasih Parameter $id_transaksi
	// public function bayar()
	// {
	// 	$data = [
	// 		'title' => 'Pembayaran',
	// 		'isi' => 'frontEnd/bayar',
	// 	];
	// 	$this->load->view('frontEnd/include/wrapper', $data, FALSE);
	// }
}
