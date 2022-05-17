<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Our_story extends CI_Controller
{
	public function index()
	{
		$data = [
			'title' => 'Our STory',
			// 'kategori' => $this->m_kategori->get_all_data(),
			'isi' => 'frontEnd/our_story'
		];
		$this->load->view('frontEnd/include/wrapper', $data, FALSE);
	}
}
