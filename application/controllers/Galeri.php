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
			'title' => 'Galeri Foto',
			'galeri' => $this->m_galeri->get_all_data(),
			'isi' => 'backEnd/galeri/galeri'

		];
		$this->load->view('backEnd/include/wrapper', $data, FALSE);
	}
}
