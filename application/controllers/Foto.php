<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Foto extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_foto');
	}


	public function index()
	{
		$data = [
			'title' => 'Galeri',
			'foto' => $this->m_foto->get_all_data(),
			'isi' => 'frontEnd/foto'
		];
		$this->load->view('frontEnd/include/wrapper', $data, FALSE);
	}

	public function kategori_galeri($id_kategori_galeri)
	{
		// $kategori_galeri = $this->m_foto->kategori_galeri($id_kategori_galeri);
		$data = [
			'title' => 'Kategori Foto ',
			'foto' => $this->m_foto->get_all_data_foto($id_kategori_galeri),
			'isi' => 'frontEnd/kategori_galeri'
		];
		$this->load->view('frontEnd/include/wrapper', $data, FALSE);
	}
}
