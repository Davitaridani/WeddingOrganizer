<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jadwal extends CI_Controller
{
	// function __construct()
	// {
	// 	parent::__construct();
	// }


	public function index()
	{
		$data = [
			'title' => 'Jadwal',
			// 'galeri' => $this->m_galeri->get_all_data(),
			'isi' => 'backEnd/jadwal'

		];
		$this->load->view('backEnd/include/wrapper', $data, FALSE);
	}
}
