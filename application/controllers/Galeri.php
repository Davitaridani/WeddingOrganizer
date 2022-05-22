<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Galeri extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_galeri');
		$this->load->model('m_kategori_galeri');
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


	// Add Foto galeri
	public function add()
	{
		$this->form_validation->set_rules(
			'id_kategori_galeri',
			'Nama Ketegori',
			'required',
			['required' => '%s Harus Diisi !!']
		);

		if ($this->form_validation->run() == TRUE) {
			$config['upload_path'] = './assets/galeri_foto/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg|raw|tif';
			$config['max_size']     = '5000';
			$this->upload->initialize($config);
			$field_name = "foto";
			if (!$this->upload->do_upload($field_name)) {
				$data = [
					'title' => 'Tambah Foto',
					'kategori_galeri' => $this->m_kategori_galeri->get_all_data(),
					'error_upload' => $this->upload->display_errors(),
					'isi' => 'backEnd/galeri/add'
				];
				$this->load->view('backEnd/include/wrapper', $data, FALSE);
			} else {
				$upload_data = ['uploads' => $this->upload->data()];
				$config['image_library'] = 'gd2';
				$config['source_image'] = './assets/galeri_foto/' . $upload_data['uploads']['file_name'];
				$this->load->library('image_lib', $config);
				$data = [
					'id_kategori_galeri' => $this->input->post('id_kategori_galeri'),
					'foto' => $upload_data['uploads']['file_name'],
				];
				$this->m_galeri->add($data);
				$this->session->set_flashdata('pesan', 'Foto Berhasil Di Tambahkan');
				redirect('galeri');
			}
		}
		$data = [
			'title' => 'Tambah Foto',
			'kategori_galeri' => $this->m_kategori_galeri->get_all_data(),
			'isi' => 'backEnd/galeri/add'
		];
		$this->load->view('backEnd/include/wrapper', $data, FALSE);
	}


	// Edit Foto galeri
	public function edit($id_galeri)
	{
		$this->form_validation->set_rules(
			'id_kategori_galeri',
			'Nama Ketegori',
			'required',
			['required' => '%s Harus Diisi !!']
		);

		if ($this->form_validation->run() == TRUE) {
			$config['upload_path'] = './assets/galeri_foto/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg|raw|tif';
			$config['max_size']     = '5000';
			$this->upload->initialize($config);
			$field_name = "foto";
			if (!$this->upload->do_upload($field_name)) {
				$data = [
					'title' => 'Ganti Foto',
					'kategori_galeri' => $this->m_kategori_galeri->get_all_data(),
					'galeri' => $this->m_galeri->get_data($id_galeri),
					'error_upload' => $this->upload->display_errors(),
					'isi' => 'backEnd/galeri/edit'
				];
				$this->load->view('backEnd/include/wrapper', $data, FALSE);
			} else {
				// Jika Produk Di Hapus, maka Gambar  Akan ikut Terhapus
				$galeri = $this->m_galeri->get_data($id_galeri);
				if ($galeri->foto != "") {
					unlink('./assets/galeri_foto/' . $galeri->foto);
				}

				$upload_data = ['uploads' => $this->upload->data()];
				$config['image_library'] = 'gd2';
				$config['source_image'] = './assets/galeri_foto/' . $upload_data['uploads']['file_name'];
				$this->load->library('image_lib', $config);
				$data = [
					'id_galeri' => $id_galeri,
					'id_kategori_galeri' => $this->input->post('id_kategori_galeri'),
					'foto' => $upload_data['uploads']['file_name'],
				];
				$this->m_galeri->edit($data);
				$this->session->set_flashdata('pesan', 'Foto  Berhasil Di Ganti');
				redirect('galeri');
			}
			// Jika Edit Data Tanpa edit Foto 
			$data = [
				'id_galeri' => $id_galeri,
				'id_kategori_galeri' => $this->input->post('id_kategori_galeri'),
				// 'foto' => $upload_data['uploads']['file_name'],
			];
			$this->m_galeri->edit($data);
			$this->session->set_flashdata('pesan', 'Foto  Berhasil Di Ganti');
			redirect('galeri');
		}
		$data = [
			'title' => 'Ganti Foto',
			'kategori_galeri' => $this->m_kategori_galeri->get_all_data(),
			'galeri' => $this->m_galeri->get_data($id_galeri),
			'isi' => 'backEnd/galeri/edit'
		];
		$this->load->view('backEnd/include/wrapper', $data, FALSE);
	}

	public function delete($id_galeri = NULL)
	{
		// Jika Produk Di Hapus, maka Gambar  Akan ikut Terhapus
		$galeri = $this->m_galeri->get_data($id_galeri);
		if ($galeri->foto != "") {
			unlink('./assets/galeri_foto/' . $galeri->foto);
		}
		// End Hapus Gmabra
		$data = ['id_galeri' => $id_galeri];
		$this->m_galeri->delete($data);
		$this->session->set_flashdata('pesan', 'Foto Berhasil Di Hapus');
		redirect('galeri');
	}
}
