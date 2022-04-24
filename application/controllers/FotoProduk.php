<?php
defined('BASEPATH') or exit('No direct script access allowed');

class FotoProduk extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_foto_produk');
	}


	public function index()
	{
		$data = [
			'title' => 'Foto Produk',
			'foto_produk' => $this->m_foto_produk->get_all_data(),
			'isi' => 'backEnd/fotoProduk/v_index'

		];
		$this->load->view('backEnd/include/wrapper', $data, FALSE);
	}
}
