<?php

use LDAP\Result;

defined('BASEPATH') or exit('No direct script access allowed');

class Paket extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_paket');
	}

	public function paket_wedding()
	{

		$data = [
			'title' => 'Wedding Organizer',
			'isi' => 'frontEnd/paket/paket_wedding'
		];
		$this->load->view('frontEnd/include/wrapper', $data, FALSE);
	}

	public function paket_prewedding()
	{

		$data = [
			'title' => 'Wedding Organizer',
			'isi' => 'frontEnd/paket/paket_prewedding'
		];
		$this->load->view('frontEnd/include/wrapper', $data, FALSE);
	}


	public function dekorasi()
	{
		$data = [
			'title' => 'Wedding Organizer',
			'produk' => $this->m_paket->get_all_data(),
			'isi' => 'frontEnd/paket/dekorasi'
		];
		$this->load->view('frontEnd/include/wrapper', $data, FALSE);
	}

	public function kategori($id_kategori)
	{
		$kategori = $this->m_paket->kategori($id_kategori);
		$data = [
			'title' => 'Kategori Produk : ' . $kategori->nama_kategori,
			'produk' => $this->m_paket->get_all_data_produk($id_kategori),
			'isi' => 'frontEnd/kategori'
		];
		$this->load->view('frontEnd/include/wrapper', $data, FALSE);
	}

	public function makeUp()
	{

		$data = [
			'title' => 'Wedding Organizer',
			'isi' => 'frontEnd/paket/makeUp'

		];
		$this->load->view('frontEnd/include/wrapper', $data, FALSE);
	}


	public function gaun()
	{

		$data = [
			'title' => 'Wedding Organizer',
			'isi' => 'frontEnd/paket/gaun'

		];
		$this->load->view('frontEnd/include/wrapper', $data, FALSE);
	}

	public function paket_all_in()
	{
		$data = [
			'title' => 'Wedding Organizer',
			'isi' => 'frontEnd/paket/paket_all_in'

		];
		$this->load->view('frontEnd/include/wrapper', $data, FALSE);
		// $this->load->view('frontEnd/home');
		// $this->load->view('frontEnd/include/footer');
	}
}
