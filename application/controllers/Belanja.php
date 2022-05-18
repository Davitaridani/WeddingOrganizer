<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Belanja extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_transaksi');
	}

	public function index()
	{
		if (empty($this->cart->contents())) {
			redirect('home');
		}

		$data = [
			'title' => 'Keranjang Belanja',
			'isi' => 'frontEnd/belanja'
		];
		$this->load->view('frontEnd/include/wrapper', $data, FALSE);
	}


	public function add()
	{
		$redirect_page = $this->input->post('redirect_page');
		$data = array(
			'id'      => $this->input->post('id'),
			'qty'     => $this->input->post('qty'),
			'price'   => $this->input->post('price'),
			'name'    => $this->input->post('name')
		);
		$this->cart->insert($data);
		redirect($redirect_page, 'refresh');
	}

	public function delete($rowid)
	{
		$this->cart->remove($rowid);
		redirect('belanja');
	}

	public function update()
	{
		$i = 1;
		foreach ($this->cart->contents() as $items) {
			$data = array(
				'rowid' => $items['rowid'],
				'qty'   => $this->input->post($i . '[qty]'),
			);
			$this->cart->update($data);
			$i++;
		}
		$this->session->set_flashdata('pesan', 'Keranjang Belanja Berhasil Di Update !!');

		redirect('belanja');
	}

	public function clear()
	{
		$this->cart->destroy();
		redirect('belanja');
	}

	public function checkout()
	{
		// Proteksi Halaman(Jka elum login Tidak bisa masuk)
		// $this->customer_login->proteksi_halaman();

		$this->form_validation->set_rules('nama', 'Nama', 'required', ['required' => '%s Harus Diisi !!']);
		$this->form_validation->set_rules('email', 'Email', 'required', ['required' => '%s Harus Diisi !!']);
		$this->form_validation->set_rules('tgl_acara', 'Tgl Acara', 'required', ['required' => '%s Harus Diisi !!']);
		$this->form_validation->set_rules('telepon', 'Telepon', 'required', ['required' => '%s Harus Diisi !!']);
		$this->form_validation->set_rules('kota', 'Kota', 'required', ['required' => '%s Harus Diisi !!']);
		$this->form_validation->set_rules('kecamatan', 'Kecamatan', 'required', ['required' => '%s Harus Diisi !!']);
		$this->form_validation->set_rules('alamat', 'Alamat', 'required', ['required' => '%s Harus Diisi !!']);
		$this->form_validation->set_rules('catatan_pesanan', 'Catatan Pesanan');

		if ($this->form_validation->run() == FALSE) {
			$data = [
				'title' => 'Check Out',
				'isi' => 'frontEnd/checkout'
			];
			$this->load->view('frontEnd/include/wrapper', $data, FALSE);
		} else {
			// Data Akan Di Simpan Di Tabel Transaksi
			$data = [
				'id_customer' => $this->session->userdata('id_customer'),
				'no_order' => $this->input->post('no_order'),
				'nama' => $this->input->post('nama'),
				'email' => $this->input->post('email'),
				'tgL_order' => date('Y-m-d'),
				'tgL_acara' => date('Y-m-d'),
				'telepon' => $this->input->post('telepon'),
				'kota' => $this->input->post('kota'),
				'kecamatan' => $this->input->post('kecamatan'),
				'alamat' => $this->input->post('alamat'),
				'catatan_pesanan' => $this->input->post('catatan_pesanan'),
				'sub_total' => $this->input->post('sub_total'),
				'total_bayar' => $this->input->post('total_bayar'),
				'status_bayar' => '0',
				'status_order' => '0',
			];
			$this->m_transaksi->simpan_transaksi($data);
			// Data Akan Di Simpan Di Tabel Detail Transaksi
			$i = 1;
			foreach ($this->cart->contents() as $item) {
				$data_detail = [
					'no_order' => $this->input->post('no_order'),
					'id_produk' => $item['id'],
					'qty' => $this->input->post('qty' . $i++),
				];
				$this->m_transaksi->simpan_detail_transaksi($data_detail);
			}
			// <=============================================>
			$this->session->set_flashdata('pesan', 'Pesanan Berhasil Di Proses !!');
			$this->cart->destroy();
			redirect('pesanan_saya');
		}
	}
}
