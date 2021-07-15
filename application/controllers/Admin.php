<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('id') == NULL){
			redirect();
		}
	}

	public function index()
	{
		$data = array(
			'content' => 'admin' , );
		$this->load->view('base_admin', $data);
	}

	public function data_wisata()
	{
		$data = array(
			'content' => 'data_wisata' , );
		$this->load->view('base_admin', $data);
	}

	public function data_kuliner()
	{
		$data = array(
			'content' => 'data_kuliner' , );
		$this->load->view('base_admin', $data);
	}

	public function data_profesi()
	{
		$data = array(
			'content' => 'data_profesi' , );
		$this->load->view('base_admin', $data);
	}

	public function jenis_kuliner()
	{
		$data = array(
			'content' => 'jenis_kuliner' , );
		$this->load->view('base_admin', $data);
	}

	public function jenis_rekreasi()
	{
		$data = array(
			'content' => 'jenis_rekreasi' , );
		$this->load->view('base_admin', $data);
	}

	public function data_testimoni()
	{
		$data = array(
			'content' => 'data_testimoni' , );
		$this->load->view('base_admin', $data);
	}

}
