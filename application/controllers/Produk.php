<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_produk');
	}

	public function index()
	{
		$data = [
			'title' => 'Produk',
			'produk' => $this->m_produk->get_all_data(),
			'isi' => 'backEnd/produk/produk'
		];
		$this->load->view('backEnd/include/wrapper', $data, FALSE);
	}
}
