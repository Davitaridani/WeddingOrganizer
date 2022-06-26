<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Konsultasi extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_konsultasi');
	}

	public function index()
	{
		$data = [
			'title' => 'Konsultasi',
			'konsultasi' => $this->m_konsultasi->get_all_data(),
			'isi' => 'backEnd/konsultasi'

		];
		$this->load->view('backEnd/include/wrapper', $data, FALSE);
	}

	public function add()
	{
		$data = [
			'title' => 'Konsultasi',
			'konsultasi' => $this->m_konsultasi->get_all_data(),
			'isi' => 'backEnd/konsultasi'

		];
		$this->load->view('backEnd/include/wrapper', $data, FALSE);
	}
}
