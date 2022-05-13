<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Customer extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_customer');
		$this->load->model('m_auth');
		$this->load->library('form_validation');
	}


	public function login()
	{
		$this->form_validation->set_rules(
			'email',
			'Email',
			'required|trim|valid_email',
			[
				'required' => '%s Harus Di Isi !!',
				'valid_email' => 'Yang Anda Masukan Bukan Email !! '
			]
		);
		$this->form_validation->set_rules(
			'password',
			'Password',
			'required|trim',
			[
				'required' => '%s Harus Di Isi !!',
			]
		);


		if ($this->form_validation->run() == false) {
			$data = [
				'title' => 'Login',
				'isi' => 'frontEnd/login_customer'
			];
			$this->load->view('frontEnd/include/wrapper', $data, FALSE);
		} else {
			// Jika Login Berhasil, Jalankan Fucntion login()
			$this->_login();
		}
	}

	private function _login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$user = $this->db->get_where('tb_customer', ['email' => $email])->row_array();

		// Jika User Ada/Email Ada
		if ($user) {

			// JIka User Active
			if ($user['is_active'] == 1) {
				// Cek Password
				if (password_verify($password, $user['password'])) {
					$data = [
						'email' => $user['email']
					];
					$this->session->set_userdata($data);
					redirect('home');
				} else {
					$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
					Password Anda Salah !!
					<button type="button" class="btn-close float-end" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>');
					redirect('customer/login');
				}
			} else {
				$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
					Email Anda Belum Terdaftar !!
					<button type="button" class="btn-close float-end" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>');
				redirect('customer/login');
			}
		} else {
			// Jka User Tidak Ada / belum terdaftar
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
					Email Anda Belum Terdaftar !!
					<button type="button" class="btn-close float-end" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>');
			redirect('customer/login');
		}
	}


	public function register()
	{
		$this->form_validation->set_rules('nama_customer', 'Nama Customer', 'required|trim', ['required' => 'Nama  Harus Di Isi!']);
		$this->form_validation->set_rules(
			'email',
			'Email',
			'required|trim|valid_email|is_unique[tb_customer.email]',
			[
				'required' => '%s  Harus Di Isi!',
				'is_unique' => 'Email Sudah Di Gunakan!!'
			]
		);
		$this->form_validation->set_rules('telepon', 'Telepon', 'required', ['required' => '%s  Harus Di Isi!']);
		$this->form_validation->set_rules('alamat', 'Alamat', 'required', ['required' => '%s  Harus Di Isi!']);
		// $this->form_validation->set_rules('foto', 'Foto', 'required', ['required' => '%s  Harus Di Isi!']);
		$this->form_validation->set_rules(
			'password',
			'Password',
			'required|trim|min_length[5]|matches[ulangi_password]',
			[
				'required' => '%s Harus Di Isi',
				'matches' => 'Password Harus Sama!!',
				'min_length' => 'Password Min 5 Karakter!!'
			]
		);
		$this->form_validation->set_rules('ulangi_password', 'Password', 'required|trim|matches[password]');

		if ($this->form_validation->run() == false) {
			$data = [
				'title' => 'Register',
				'isi' => 'frontEnd/register'
			];
			$this->load->view('frontEnd/include/wrapper', $data, FALSE);
		} else {
			$data = [
				'nama_customer' => htmlspecialchars($this->input->post('nama_customer', true)),
				'email' => htmlspecialchars($this->input->post('email', true)),
				'telepon' => htmlspecialchars($this->input->post('telepon', true)),
				'alamat' => htmlspecialchars($this->input->post('alamat', true)),
				'foto' => htmlspecialchars($this->input->post('foto', true)),
				'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
				'is_active' => 1,
				'date_created' => time(),
			];
			$this->m_customer->register($data);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert">
					Registrasi Anda Berhasil, Silahkan Login
					<button type="button" class="btn-close float-end" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>');
			redirect('customer/login');
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('email');
		$this->session->unset_userdata('foto');

		$this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert">
					Anda Berhasil Logout !!
					<button type="button" class="btn-close float-end" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>');
		redirect('customer/login');
	}

	public function akun_saya()
	{
		// Proteksi Halaman
		$this->customer_login->proteksi_halaman();

		$data = [
			'title' => 'Edit Profil',
			'isi' => 'frontEnd/akun_saya'
		];
		$this->load->view('frontEnd/include/wrapper', $data, FALSE);
	}
}
