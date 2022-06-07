<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jadwal extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_jadwal');
	}


	public function index()
	{
		$data = [
			'title' => 'Jadwal',
			'jadwal' => $this->m_jadwal->get_all_data_job(),
			'isi' => 'backEnd/jadwal'

		];
		$this->load->view('backEnd/include/wrapper', $data, FALSE);
	}


	public function delete($id_transaksi = NULL)
	{
		$data = ['id_transaksi' => $id_transaksi];
		$this->m_jadwal->delete($data);
		$this->session->set_flashdata('pesan', 'Data Berhasil Di Hapus');
		redirect('jadwal');
	}
}
