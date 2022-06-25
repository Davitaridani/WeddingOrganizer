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
			'title' => 'Data Laporan',
			'isi' => 'backEnd/laporan'
		];
		$this->load->view('backEnd/include/wrapper', $data, FALSE);
	}

	// public function lap_harian()
	// {
	// 	$tanggal  = $this->input->post('tanggal');
	// 	$bulan  = $this->input->post('bulan');
	// 	$tahun  = $this->input->post('tahun');

	// 	$data = [
	// 		'title' => 'Laporan Harian',
	// 		'tanggal' => $tanggal,
	// 		'bulan' => $bulan,
	// 		'tahun' => $tahun,
	// 		'laporan' => $this->m_laporan->lap_harian($tanggal, $bulan, $tahun),
	// 		'isi' => 'backEnd/lap_harian'
	// 	];
	// 	$this->load->view('backEnd/include/wrapper', $data, FALSE);
	// }

	public function lap_bulanan()
	{
		$bulan  = $this->input->post('bulan');
		$tahun  = $this->input->post('tahun');
		$data = [
			'title' => 'Laporan Bulanan',
			'bulan' => $bulan,
			'tahun' => $tahun,
			'laporan' => $this->m_laporan->lap_bulanan($bulan, $tahun),
			'isi' => 'backEnd/lap_bulanan'
		];
		$this->load->view('backEnd/include/wrapper', $data, FALSE);
	}

	public function lap_tahunan()
	{
		$tahun  = $this->input->post('tahun');
		$data = [
			'title' => 'Laporan Tahunan',
			'tahun' => $tahun,
			'laporan' => $this->m_laporan->lap_tahunan($tahun),
			'isi' => 'backEnd/lap_tahunan'
		];
		$this->load->view('backEnd/include/wrapper', $data, FALSE);
	}
}
