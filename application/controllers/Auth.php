<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function login_user()
	{
		$this->form_validation->set_rules('email', 'Email', 'required', [
			'required' => '%s Harus Di Isi !!'
		]);
		$this->form_validation->set_rules('password', 'Passwrod', 'required', [
			'required' => '%s Harus Di Isi !!'
		]);

		if ($this->form_validation->run() == TRUE) {
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$this->user_login->login($email, $password);
		}

		$data = [
			'title' => 'Login User',
		];
		$this->load->view('frontEnd/login_user', $data, FALSE);
	}

	public function logout_user()
	{
		$this->user_login->logout();
	}
}
