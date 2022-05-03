<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Galeri extends CI_Controller
{

	public function index()
	{

		$data = [
			'title' => 'Wedding Organizer',
			'isi' => 'frontEnd/galeri'

		];
		$this->load->view('frontEnd/include/wrapper', $data, FALSE);
	}
	// public function wedding()
	// {

	// 	$data = [
	// 		'title' => 'Wedding Organizer',
	// 		'isi' => 'frontEnd/galeri/wedding'

	// 	];
	// 	$this->load->view('frontEnd/include/wrapper', $data, FALSE);
	// }

	// public function prewedding()
	// {

	// 	$data = [
	// 		'title' => 'Wedding Organizer',
	// 		'isi' => 'frontEnd/galeri/prewedding'

	// 	];
	// 	$this->load->view('frontEnd/include/wrapper', $data, FALSE);
	// }

	// public function dekorasi()
	// {

	// 	$data = [
	// 		'title' => 'Wedding Organizer',
	// 		'isi' => 'frontEnd/galeri/dekorasi'

	// 	];
	// 	$this->load->view('frontEnd/include/wrapper', $data, FALSE);
	// }

	// public function make_up()
	// {

	// 	$data = [
	// 		'title' => 'Wedding Organizer',
	// 		'isi' => 'frontEnd/galeri/make_up'

	// 	];
	// 	$this->load->view('frontEnd/include/wrapper', $data, FALSE);
	// }
}
