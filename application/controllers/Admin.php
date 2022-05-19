<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('m_admin');
		$this->load->model('m_pesanan_masuk');
	}
	public function index()
	{
		$data = [
			'title' => 'Dashboard',
			'total_produk' => $this->m_admin->total_produk(),
			'total_kategori' => $this->m_admin->total_kategori(),
			'isi' => 'backEnd/admin'

		];
		$this->load->view('backEnd/include/wrapper', $data, FALSE);
	}

	public function pesanan_masuk()
	{
		$data = [
			'title' => 'Pesanan Masuk',
			'pesanan' => $this->m_pesanan_masuk->pesanan(),
			'pesanan_diproses' => $this->m_pesanan_masuk->pesanan_diproses(),
			'pesanan_dicatat' => $this->m_pesanan_masuk->pesanan_dicatat(),
			'pesanan_selesai' => $this->m_pesanan_masuk->pesanan_selesai(),
			'isi' => 'backEnd/pesanan_masuk'
		];
		$this->load->view('backEnd/include/wrapper', $data, FALSE);
	}

	public function proses($id_transaksi)
	{
		$data = [
			'id_transaksi' => $id_transaksi,
			'status_order' => '1',
		];
		$this->m_pesanan_masuk->update_order($data);
		$this->session->set_flashdata('pesan', 'Pesanan Berhasil Di Proses !!');
		redirect('admin/pesanan_masuk');
	}

	public function dicatat($id_transaksi)
	{
		$data = [
			'id_transaksi' => $id_transaksi,
			'no_pesanan' => $this->input->post('no_pesanan'),
			'status_order' => '2',
		];
		$this->m_pesanan_masuk->update_order($data);
		$this->session->set_flashdata('pesan', 'Pesanan Berhasil Di Catat !!');
		redirect('admin/pesanan_masuk');
	}
}
