<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_laporan');
	}

	public function index()
	{
		$data = [
			'title' => 'Laporan Penjulan',
			'isi' => 'backEnd/laporan'

		];
		$this->load->view('backEnd/include/wrapper', $data, FALSE);
	}

	public function laporan_harian()
	{

		$tanggal = $this->input->post('tanggal');
		$bulan = $this->input->post('bulan');
		$tahun = $this->input->post('tahun');


		$data = [
			'title' => 'Laporan Harian',
			'tanggal' => $tanggal,
			'bulan' => $bulan,
			'tahun' => $tahun,
			'laporan' => $this->m_laporan->laporan_harian($tanggal, $bulan, $tahun),
			'isi' => 'backEnd/laporan_harian'

		];
		$this->load->view('backEnd/include/wrapper', $data, FALSE);
	}
}
