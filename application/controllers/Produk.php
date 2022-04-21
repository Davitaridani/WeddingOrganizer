<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_produk');
		$this->load->model('m_kategori');
	}

	public function index()
	{
		$data = [
			'title' => 'Produk',
			'produk' => $this->m_produk->get_all_data(),
			'isi' => 'backEnd/produk/produk'
		];
		$this->load->view('backEnd/include/wrapper', $data, FALSE);
	}

	public function add()
	{
		$this->form_validation->set_rules(
			'nama_produk',
			'Nama Produk',
			'required',
			['required' => '%s Harus Diisi !!']
		);

		$this->form_validation->set_rules(
			'id_kategori',
			'Nama Ketegori',
			'required',
			['required' => '%s Harus Diisi !!']
		);

		$this->form_validation->set_rules(
			'harga',
			'Harga',
			'required',
			['required' => '%s Harus Diisi !!']
		);

		$this->form_validation->set_rules(
			'deskripsi',
			'Deskripsi',
			'required',
			['required' => '%s Harus Diisi !!']
		);

		if ($this->form_validation->run() == TRUE) {
			$config['upload_path'] = './assets/gambar/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg|raw|tif';
			$config['max_size']     = '1000';
			$this->upload->initialize($config);
			$field_name = "gambar";
			if (!$this->upload->do_upload($field_name)) {
				$data = [
					'title' => 'Tambah Produk',
					'kategori' => $this->m_kategori->get_all_data(),
					'error_upload' => $this->upload->display_errors(),
					'isi' => 'backEnd/produk/add'
				];
				$this->load->view('backEnd/include/wrapper', $data, FALSE);
			} else {
				$upload_data = ['uploads' => $this->upload->data()];
				$config['image_library'] = 'gd2';
				$config['source_image'] = './assets/gambar/' . $upload_data['uploads']['file_name'];
				$this->load->library('image_lib', $config);
				$data = [
					'nama_produk' => $this->input->post('nama_produk'),
					'id_kategori' => $this->input->post('id_kategori'),
					'harga' => $this->input->post('harga'),
					'deskripsi' => $this->input->post('deskripsi'),
					'gambar' => $upload_data['uploads']['file_name'],
				];
				$this->m_produk->add($data);
				$this->session->set_flashdata('pesan', 'Data Berhasil Di Tambahkan');
				redirect('produk');
			}
		}

		$data = [
			'title' => 'Tambah Produk',
			'kategori' => $this->m_kategori->get_all_data(),
			'isi' => 'backEnd/produk/add'
		];
		$this->load->view('backEnd/include/wrapper', $data, FALSE);
	}
}
