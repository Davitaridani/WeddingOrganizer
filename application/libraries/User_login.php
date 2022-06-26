<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User_login
{

	protected $ci;

	public function __construct()
	{
		$this->ci = &get_instance();
		$this->ci->load->model('m_auth');
	}

	public function login($email, $password)
	{
		$cek = $this->ci->m_auth->login_user($email, $password);
		if ($cek) {
			$nama = $cek->nama;
			$email = $cek->email;
			$level_user = $cek->level_user;
			// Bat Sesseion
			$this->ci->session->set_userdata('email', $email);
			$this->ci->session->set_userdata('nama', $nama);
			$this->ci->session->set_userdata('level_user', $level_user);
			redirect('admin');
		} else {
			// Jika Password Slah
			$this->ci->session->set_flashdata('error', 'Username atau Password Anda Salah !!');
			redirect('auth/login_user');
		}
	}

	public function proteksi_halaman()
	{
		if ($this->ci->session->userdata('email') == '') {
			$this->ci->session->set_flashdata('error', 'Anda Belum Login!!');
			redirect('auth/login_user');
		}
	}

	public function logout()
	{
		$this->ci->session->unset_userdata('email');
		$this->ci->session->unset_userdata('nama');
		$this->ci->session->unset_userdata('level_user');
		$this->ci->session->set_flashdata('pesan', 'Anda Berhasil Logout.');

		redirect('auth/login_user');
	}
}
