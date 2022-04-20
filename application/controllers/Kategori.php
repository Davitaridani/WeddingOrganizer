<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_kategori');
	}

	public function index()
	{
		$data = [
			'title' => 'Kategori',
			'kategori' => $this->m_kategori->get_all_data(),
			'isi' => 'backEnd/kategori'
		];
		$this->load->view('backEnd/include/wrapper', $data, FALSE);
	}

	public function add()
	{
		$data = [
			'nama_kategori' => $this->input->post('nama_kategori'),
		];
		$this->m_kategori->add($data);
		$this->session->set_flashdata('pesan', 'Kategori Berhasil Di Tambahkan');
		redirect('kategori');
	}
}
