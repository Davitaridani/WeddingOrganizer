<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_user');
	}

	public function index()
	{

		$data = [
			'title' => 'User',
			'user' => $this->m_user->get_all_data(),
			'isi' => 'backEnd/user'

		];
		$this->load->view('backEnd/include/wrapper', $data, FALSE);
	}


	public function add()
	{
		$data = [
			'nama' => $this->input->post('nama'),
			'email' => $this->input->post('email'),
			'telepon' => $this->input->post('telepon'),
			'password' => $this->input->post('password'),
			'level_user' => $this->input->post('level_user'),
		];
		$this->m_user->add($data);
		$this->session->set_flashdata('pesan', 'Data Berhasil Di Tambahkan');
		redirect('user');
	}

	public function update()
	{
	}

	public function delete()
	{
	}
}
