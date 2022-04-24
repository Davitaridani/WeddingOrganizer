<?php
defined('BASEPATH') or exit('No direct script access allowed');

class FotoProduk extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_foto_produk');
		$this->load->model('m_produk');
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

	public function add($id_produk)
	{
		$data = [
			'title' => 'Tambah Foto Produk',
			'produk' => $this->m_produk->get_data($id_produk),
			'foto' => $this->m_foto_produk->get_foto($id_produk),
			'isi' => 'backEnd/fotoProduk/add'

		];
		$this->load->view('backEnd/include/wrapper', $data, FALSE);
	}
}
