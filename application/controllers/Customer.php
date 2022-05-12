<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Customer extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		// $this->load->model('m_admin');
	}

	public function register()
	{
		$data = [
			'title' => 'Login',
			'isi' => 'frontEnd/register'

		];
		$this->load->view('frontEnd/include/wrapper', $data, FALSE);
	}


	public function login()
	{
		$data = [
			'title' => 'Login',
			'isi' => 'frontEnd/login_customer'

		];
		$this->load->view('frontEnd/include/wrapper', $data, FALSE);
	}
}
