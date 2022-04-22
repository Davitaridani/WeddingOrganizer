<?php
defined('BASEPATH') or exit('No direct script access allowed');

class FotoProduk extends CI_Controller
{
	public function index()
	{

		$data = [
			'title' => 'Foto Produk',
			'isi' => 'backEnd/fotoProduk/v_index'

		];
		$this->load->view('backEnd/include/wrapper', $data, FALSE);
	}
}
