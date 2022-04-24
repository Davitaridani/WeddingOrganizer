<?php
defined('BASEPATH') or exit('No direct script access allowed');

class FotoProduk extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_foto_produk');
		$this->load->model('m_produk');
	}


	public function index()
	{
		$data = [
			'title' => 'Foto Produk',
			'foto_produk' => $this->m_foto_produk->get_all_data(),
			'isi' => 'backEnd/fotoProduk/v_index'

		];
		$this->load->view('backEnd/include/wrapper', $data, FALSE);
	}

	public function add($id_produk)
	{
		$this->form_validation->set_rules(
			'keterangan',
			'Keterangan Produk',
			'required',
			['required' => '%s Harus Diisi !!']
		);

		if ($this->form_validation->run() == TRUE) {
			$config['upload_path'] = './assets/foto_produk/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg|raw|tif';
			$config['max_size']     = '9000';
			$this->upload->initialize($config);
			$field_name = "gambar";
			if (!$this->upload->do_upload($field_name)) {
				$data = [
					'title' => 'Tambah Foto Produk',
					'error_upload' => $this->upload->display_errors(),
					'produk' => $this->m_produk->get_data($id_produk),
					'foto' => $this->m_foto_produk->get_foto($id_produk),
					'isi' => 'backEnd/fotoProduk/add'
				];
				$this->load->view('backEnd/include/wrapper', $data, FALSE);
			} else {
				$upload_data = ['uploads' => $this->upload->data()];
				$config['image_library'] = 'gd2';
				$config['source_image'] = './assets/foto_produk/' . $upload_data['uploads']['file_name'];
				$this->load->library('image_lib', $config);
				$data = [
					'id_produk' => $id_produk,
					'keterangan' => $this->input->post('keterangan'),
					'foto' => $upload_data['uploads']['file_name'],
				];
				$this->m_foto_produk->add($data);
				$this->session->set_flashdata('pesan', 'Foto Berhasil Di Tambahkan');
				redirect('FotoProduk/add/' . $id_produk);
			}
		}

		$data = [
			'title' => 'Tambah Foto Produk',
			'produk' => $this->m_produk->get_data($id_produk),
			'foto' => $this->m_foto_produk->get_foto($id_produk),
			'isi' => 'backEnd/fotoProduk/add'

		];
		$this->load->view('backEnd/include/wrapper', $data, FALSE);
	}

	public function delete($id_produk, $id_foto_produk)
	{
		// Jika Produk Di Hapus, maka Gambar  Akan ikut Terhapus
		$foto = $this->m_foto_produk->get_data($id_foto_produk);
		if ($foto->foto != "") {
			unlink('./assets/foto_produk/' . $foto->foto);
		}
		// End Hapus Gmabra
		$data = ['id_foto_produk' => $id_foto_produk];
		$this->m_foto_produk->delete($data);
		$this->session->set_flashdata('pesan', 'Foto Berhasil Di Hapus');
		redirect('FotoProduk/add/' . $id_produk);
	}
}
