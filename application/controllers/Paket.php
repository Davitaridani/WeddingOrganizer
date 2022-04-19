<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Paket extends CI_Controller
{
	public function paket_wedding()
	{

		$data = [
			'title' => 'Wedding Organizer',
			'isi' => 'frontEnd/paket/paket_wedding'

		];
		$this->load->view('frontEnd/include/wrapper', $data, FALSE);
		// $this->load->view('frontEnd/home');
		// $this->load->view('frontEnd/include/footer');
	}

	public function paket_prewedding()
	{

		$data = [
			'title' => 'Wedding Organizer',
			'isi' => 'frontEnd/paket/paket_prewedding'

		];
		$this->load->view('frontEnd/include/wrapper', $data, FALSE);
		// $this->load->view('frontEnd/home');
		// $this->load->view('frontEnd/include/footer');
	}
}
