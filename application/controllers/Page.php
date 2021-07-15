<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {

	public function index()
	{
		$data = array(
			'title' => 'SIWIKODE',
			'menu_kuliner' => $this->M_data->menu_kuliner(),
			'menu_wisata' => $this->M_data->menu_wisata(),
			'get_data_wisata' => $this->M_data->get_data_wisata(),
			'get_data_kuliner' => $this->M_data->get_data_kuliner()
		);
		$this->load->view('base', $data);
	}

	public function kuliner()
	{
		$id = $this->uri->segment(3);
		if ($id == NULL) {
			$data = array(
				'title' => 'SIWIKODE',
				'menu_kuliner' => $this->M_data->menu_kuliner(),
				'menu_wisata' => $this->M_data->menu_wisata(),
				'get_data' => $this->M_data->get_data_kuliner()
			);
			$this->load->view('kuliner', $data);
		}else{
			$data = array(
				'title' => 'SIWIKODE',
				'menu_kuliner' => $this->M_data->menu_kuliner(),
				'menu_wisata' => $this->M_data->menu_wisata(),
				'get_data' => $this->M_data->get_data_kuliner($id)
			);
			$this->load->view('detail', $data);
		}
	}

	public function wisata()
	{
		$id = $this->uri->segment(3);
		if ($id == NULL) {
			$data = array(
				'title' => 'SIWIKODE',
				'menu_kuliner' => $this->M_data->menu_kuliner(),
				'menu_wisata' => $this->M_data->menu_wisata(),
				'get_data' => $this->M_data->get_data_wisata()
			);
			$this->load->view('wisata', $data);
		}else{
			$data = array(
				'title' => 'SIWIKODE',
				'menu_kuliner' => $this->M_data->menu_kuliner(),
				'menu_wisata' => $this->M_data->menu_wisata(),
				'get_data' => $this->M_data->get_data_wisata($id),
				'get_testimoni' => $this->M_data->get_data_testimoni($id)
			);
			$this->load->view('detail', $data);
		}
	}
}
