<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_admin');
		$this->load->model('m_pesanan_masuk');
	}
	public function index()
	{
		$data = [
			'title' => 'Dashboard',
			'total_produk' => $this->m_admin->total_produk(),
			'total_kategori' => $this->m_admin->total_kategori(),
			'isi' => 'backEnd/admin'

		];
		$this->load->view('backEnd/include/wrapper', $data, FALSE);
	}

	public function pesanan_masuk()
	{
		$data = [
			'title' => 'Pesanan Masuk',
			'pesanan' => $this->m_pesanan_masuk->pesanan(),
			'isi' => 'backEnd/pesanan_masuk'
		];
		$this->load->view('backEnd/include/wrapper', $data, FALSE);
	}
}
