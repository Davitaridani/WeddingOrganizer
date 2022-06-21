<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Customer_login
{
	protected $ci;

	public function __construct()
	{
		$this->ci = &get_instance();
		$this->ci->load->model('m_auth');
	}

	public function login($email, $password)
	{
		$cek = $this->ci->m_auth->login_customer($email, $password);
		if ($cek) {
			$id_customer = $cek->id_customer;
			$nama_customer = $cek->nama_customer;
			$email = $cek->email;
			$foto = $cek->foto;
			// Bat Sesseion
			$this->ci->session->set_userdata('id_customer', $id_customer);
			$this->ci->session->set_userdata('nama_customer', $nama_customer);
			$this->ci->session->set_userdata('email', $email);
			$this->ci->session->set_userdata('foto', $foto);
			redirect('home');
		} else {
			// Jika Password Slah
			$this->ci->session->set_flashdata('error', 'Email atau Password Anda Salah !!');
			redirect('customer/login');
		}
	}

	public function proteksi_halaman()
	{
		if ($this->ci->session->userdata('email') == '') {
			$this->ci->session->set_flashdata('error', 'Anda Belum Login!!');
			redirect('customer/login');
		}
	}

	public function logout()
	{
		$this->ci->session->unset_userdata('id_customer');
		$this->ci->session->unset_userdata('nama_customer');
		$this->ci->session->unset_userdata('email');
		$this->ci->session->unset_userdata('foto');
		$this->ci->session->set_flashdata('pesan', 'Anda Berhasil Logout.');
		redirect('customer/login');
	}
}
