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

		$this->form_validation->set_rules(
			'spesifikasi_produk',
			'Spesifikasi Produk',
			'required',
			['required' => '%s Harus Diisi !!']
		);

		if ($this->form_validation->run() == TRUE) {
			$config['upload_path'] = './assets/gambar/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg|raw|tif';
			$config['max_size']     = '9000';
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
					'spesifikasi_produk' => $this->input->post('spesifikasi_produk'),
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

	public function edit($id_produk = NULL)
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

		$this->form_validation->set_rules(
			'spesifikasi_produk',
			'Spesifikasi Produk',
			'required',
			['required' => '%s Harus Diisi !!']
		);

		if ($this->form_validation->run() == TRUE) {
			$config['upload_path'] = './assets/gambar/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg|raw|tif';
			$config['max_size']     = '9000';
			$this->upload->initialize($config);
			$field_name = "gambar";
			if (!$this->upload->do_upload($field_name)) {
				$data = [
					'title' => 'Edit Produk',
					'kategori' => $this->m_kategori->get_all_data(),
					'produk' => $this->m_produk->get_data($id_produk),
					'error_upload' => $this->upload->display_errors(),
					'isi' => 'backEnd/produk/edit'
				];
				$this->load->view('backEnd/include/wrapper', $data, FALSE);
			} else {
				// Jika Produk Di Hapus, maka Gambar  Akan ikut Terhapus
				$produk = $this->m_produk->get_data($id_produk);
				if ($produk->gambar != "") {
					unlink('./assets/gambar/' . $produk->gambar);
				}
				// End Hapus Gmabra
				$upload_data = ['uploads' => $this->upload->data()];
				$config['image_library'] = 'gd2';
				$config['source_image'] = './assets/gambar/' . $upload_data['uploads']['file_name'];
				$this->load->library('image_lib', $config);
				$data = [
					'id_produk' => $id_produk,
					'nama_produk' => $this->input->post('nama_produk'),
					'id_kategori' => $this->input->post('id_kategori'),
					'harga' => $this->input->post('harga'),
					'deskripsi' => $this->input->post('deskripsi'),
					'spesifikasi_produk' => $this->input->post('spesifikasi_produk'),
					'gambar' => $upload_data['uploads']['file_name'],
				];
				$this->m_produk->edit($data);
				$this->session->set_flashdata('pesan', 'Data Berhasil Di Ubah/Edit');
				redirect('produk');
			}
			// Jiika Tanpa gabti Gambar
			$data = [
				'id_produk' => $id_produk,
				'nama_produk' => $this->input->post('nama_produk'),
				'id_kategori' => $this->input->post('id_kategori'),
				'harga' => $this->input->post('harga'),
				'deskripsi' => $this->input->post('deskripsi'),
				'spesifikasi_produk' => $this->input->post('spesifikasi_produk'),
			];
			$this->m_produk->edit($data);
			$this->session->set_flashdata('pesan', 'Data Berhasil Di Ubah/Edit');
			redirect('produk');
		}

		$data = [
			'title' => 'Edit Produk',
			'kategori' => $this->m_kategori->get_all_data(),
			'produk' => $this->m_produk->get_data($id_produk),
			'isi' => 'backEnd/produk/edit'
		];
		$this->load->view('backEnd/include/wrapper', $data, FALSE);
	}

	public function delete($id_produk = NULL)
	{
		// Jika Produk Di Hapus, maka Gambar  Akan ikut Terhapus
		$produk = $this->m_produk->get_data($id_produk);
		if ($produk->gambar != "") {
			unlink('./assets/gambar/' . $produk->gambar);
		}
		// End Hapus Gmabra
		$data = ['id_produk' => $id_produk];
		$this->m_produk->delete($data);
		$this->session->set_flashdata('pesan', 'Data Berhasil Di Hapus');
		redirect('produk');
	}
}
