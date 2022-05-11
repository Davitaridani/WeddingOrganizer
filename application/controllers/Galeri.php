<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Galeri extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_galeri');
	}

	public function index()
	{
		$data = [
			'title' => 'Wedding Organizer | Galeri',
			'galeri' => $this->m_galeri->get_all_data(),
			'isi' => 'frontEnd/galeri'

		];
		$this->load->view('frontEnd/include/wrapper', $data, FALSE);
	}

	public function kategori($id_kategori)
	{
		// $kategori = $this->m_galeri->kategori($id_kategori);
		$data = [
			'title' => 'Galeri',
			'galeri' => $this->m_galeri->get_all_galeri($id_kategori),
			'isi' => 'frontEnd/galeri'

		];
		$this->load->view('frontEnd/include/wrapper', $data, FALSE);
	}
}
