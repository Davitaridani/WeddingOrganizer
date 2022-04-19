<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Detail_paket extends CI_Controller
{
	// public function index()
	// {

	// 	$data = [
	// 		'title' => 'Wedding Organizer',
	// 		'isi' => 'frontEnd/contact'

	// 	];
	// 	$this->load->view('frontEnd/include/wrapper', $data, FALSE);
	// }

	public function paket_bronze()
	{

		$data = [
			'title' => 'Wedding Organizer',
			'isi' => 'frontEnd/detail_paket/paket_bronze'

		];
		$this->load->view('frontEnd/include/wrapper', $data, FALSE);
		// $this->load->view('frontEnd/home');
		// $this->load->view('frontEnd/include/footer');
	}
}
