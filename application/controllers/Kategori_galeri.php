<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kategori_galeri extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_kategori_galeri');
	}

	public function index()
	{
		$data = [
			'title' => 'Kategori Galeri',
			'kategori_galeri' => $this->m_kategori_galeri->get_all_data(),
			'isi' => 'backEnd/kategori_galeri'
		];
		$this->load->view('backEnd/include/wrapper', $data, FALSE);
	}

	public function add()
	{
		$data = [
			'nama_kategori_galeri' => $this->input->post('nama_kategori_galeri'),
		];
		$this->m_kategori_galeri->add($data);
		$this->session->set_flashdata('pesan', 'Data Berhasil Di Tambahkan');
		redirect('kategori_galeri');
	}

	public function edit($id_kategori_galeri)
	{
		$data = [
			'id_kategori_galeri' => $id_kategori_galeri,
			'nama_kategori_galeri' => $this->input->post('nama_kategori_galeri'),
		];
		$this->m_kategori_galeri->edit($data);
		$this->session->set_flashdata('pesan', 'Data Berhasil Di Edit');
		redirect('kategori_galeri');
	}

	public function delete($id_kategori_galeri = NULL)
	{
		$data = ['id_kategori_galeri' => $id_kategori_galeri];
		$this->m_kategori_galeri->delete($data);
		$this->session->set_flashdata('pesan', 'Data Berhasil Di Hapus');
		redirect('kategori_galeri');
	}
}
