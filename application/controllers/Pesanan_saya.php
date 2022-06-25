<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pesanan_saya extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_transaksi');
		$this->load->model('m_pesanan_masuk');
	}

	public function index()
	{
		// seatlement midtrans
		if ((isset($_GET['order_id']) && isset($_GET['transaction_status'])) && $_GET['transaction_status'] == 'settlement') {
			$data = array(
				'status_bayar' => 3,
				'status_order' => 3,
			);
			$this->db->set($data);
			$this->db->where('no_order', $_GET['order_id']);
			$this->db->update('tb_transaksi');
		}

		$data = [
			'title' => 'Pesanan Saya',
			'belum_bayar' => $this->m_transaksi->belum_bayar(),
			'diproses' => $this->m_transaksi->diproses(),
			'dicatat' => $this->m_transaksi->dicatat(),
			'selesai' => $this->m_transaksi->selesai(),
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

	public function diterima($id_transaksi)
	{
		$data = [
			'id_transaksi' => $id_transaksi,
			'status_order' => '3'
		];
		$this->m_pesanan_masuk->update_order($data);
		$this->session->set_flashdata('pesan', 'Pesanan telah Di Terima !!');
		redirect('pesanan_saya');
	}
}
