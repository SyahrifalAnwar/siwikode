<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Secure extends CI_Controller {

	public function login()
	{
		$this->load->view('base');
	}

	public function register()
	{
		$this->load->view('register');
	}

	public function check_login()
	{
		$email = $this->input->post('email');
		$password = SHA1($this->input->post('password'));
		$data = $this->M_data->check_login($email, $password);

		if($data){

			$user_data = array(
				'id' => $data,
			);

			$this->session->set_userdata($user_data);    

			$validator['success'] = true;
			$validator['status'] = 'success';
			$validator['messages'] = "Login Berhasil";
			$validator['data'] = $user_data;

		}else{

			$validator['success'] = false;
			$validator['status'] = 'error';
			$validator['messages'] = "Email / Password anda salah";

		}

		echo json_encode($validator);

	}

	public function logout()
	{
		$this->session->sess_destroy();
		$this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate, no-transform, max-age=0, post-check=0, pre-check=0");
		$this->output->set_header("Pragma: no-cache");
		redirect();
	}


}
