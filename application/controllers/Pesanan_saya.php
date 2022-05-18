<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pesanan_saya extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_transaksi');
	}

	public function index()
	{
		$data = [
			'title' => 'Pesanan Saya',
			'belum_bayar' => $this->m_transaksi->belum_bayar(),
			'diproses' => $this->m_transaksi->diproses(),
			'isi' => 'frontEnd/pesanan_saya'
		];
		$this->load->view('frontEnd/include/wrapper', $data, FALSE);
	}

	public function bayar($id_transaksi)
	{

		$this->form_validation->set_rules(
			'atas_nama',
			'Atas Nama',
			'required',
			['required' => '%s Harus Diisi !!']
		);

		if ($this->form_validation->run() == TRUE) {
			$config['upload_path'] = './assets/bukti_bayar/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg|raw|tif';
			$config['max_size']     = '5000';
			$this->upload->initialize($config);
			$field_name = "bukti_bayar";
			if (!$this->upload->do_upload($field_name)) {
				$data = [
					'title' => 'Pembayaran',
					'pesanan' => $this->m_transaksi->detail_pesanan($id_transaksi),
					'rekening' => $this->m_transaksi->rekening(),
					'error_upload' => $this->upload->display_errors(),
					'isi' => 'frontEnd/bayar',
				];
				$this->load->view('frontEnd/include/wrapper', $data, FALSE);
			} else {
				$upload_data = ['uploads' => $this->upload->data()];
				$config['image_library'] = 'gd2';
				$config['source_image'] = './assets/bukti_bayar/' . $upload_data['uploads']['file_name'];
				$this->load->library('image_lib', $config);
				$data = [
					'id_transaksi' => $id_transaksi,
					'atas_nama' => $this->input->post('atas_nama'),
					'nama_bank' => $this->input->post('nama_bank'),
					'no_rek' => $this->input->post('no_rek'),
					'status_bayar' => '1',
					'bukti_bayar' => $upload_data['uploads']['file_name'],
				];
				$this->m_transaksi->upload_bukti_bayar($data);
				$this->session->set_flashdata('pesan', 'BUkti Pembayaran Berhasil DI Upload ');
				redirect('pesanan_saya');
			}
		}
		$data = [
			'title' => 'Pembayaran',
			'pesanan' => $this->m_transaksi->detail_pesanan($id_transaksi),
			'rekening' => $this->m_transaksi->rekening(),
			'isi' => 'frontEnd/bayar',
		];
		$this->load->view('frontEnd/include/wrapper', $data, FALSE);
	}
}
