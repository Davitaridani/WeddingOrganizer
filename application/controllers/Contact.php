<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends CI_Controller
{
	public function index()
	{

		$data = [
			'title' => 'Wedding Organizer',
			'isi' => 'frontEnd/contact'

		];
		$this->load->view('frontEnd/include/wrapper', $data, FALSE);
		// $this->load->view('frontEnd/home');
		// $this->load->view('frontEnd/include/footer');
	}
}
