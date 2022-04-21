<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_produk');
		$this->load->model('m_kategori');
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

	public function add()
	{
		$data = [
			'title' => 'Tambah Produk',
			'kategori' => $this->m_kategori->get_all_data(),
			'isi' => 'backEnd/produk/add'
		];
		$this->load->view('backEnd/include/wrapper', $data, FALSE);
	}
}
