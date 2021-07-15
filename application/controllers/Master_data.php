<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master_data extends CI_Controller {

	public function json_wisata()
	{
		$requestData	= $_REQUEST;
		$fetch			= $this->M_data->json_wisata($requestData['search']['value'], $requestData['order'][0]['column'], $requestData['order'][0]['dir'], $requestData['start'], $requestData['length']);

		$totalData		= $fetch['totalData'];
		$totalFiltered	= $fetch['totalFiltered'];
		$query			= $fetch['query'];

		$data	= array();
		foreach($query->result_array() as $row)
		{
			$nestedData = array();
			$nestedData[]	= $row['nomor'];
			$nestedData[]	= $row['nama'];
			$nestedData[]	= $row['alamat'];
			$nestedData[]	= $row['kontak'];
			$nestedData[]	= "<a id='detail' href='".base_url('master_data/detail_wisata/').$row['id']."' class='waves-effect waves-light btn-small mb-1 mr-1'><i class='material-icons'>settings_backup_restore</i></a>";
			$nestedData[]	= "<a id='edit' href='".base_url('master_data/edit_wisata/').$row['id']."' class='waves-effect waves-light btn-small mb-1 mr-1 green darken-1'><i class='material-icons'>edit</i></a>";
			$nestedData[]	= "<a href='".base_url('master_data/hapus_wisata/').$row['id']."' class='waves-effect waves-light btn-small mb-1 mr-1 red darken-1'><i class='material-icons'>delete</i></i></a>";


			$data[] = $nestedData;
		}

		$json_data = array(
			"draw"            => intval( $requestData['draw'] ),
			"recordsTotal"    => intval( $totalData ),
			"recordsFiltered" => intval( $totalFiltered ),
			"data"            => $data
		);

		echo json_encode($json_data);
	}

	public function json_kuliner()
	{
		$requestData	= $_REQUEST;
		$fetch			= $this->M_data->json_kuliner($requestData['search']['value'], $requestData['order'][0]['column'], $requestData['order'][0]['dir'], $requestData['start'], $requestData['length']);

		$totalData		= $fetch['totalData'];
		$totalFiltered	= $fetch['totalFiltered'];
		$query			= $fetch['query'];

		$data	= array();
		foreach($query->result_array() as $row)
		{
			$nestedData = array();
			$nestedData[]	= $row['nomor'];
			$nestedData[]	= $row['nama'];
			$nestedData[]	= $row['alamat'];
			$nestedData[]	= $row['kontak'];
			$nestedData[]	= "<a id='detail' href='".base_url('master_data/detail_kuliner/').$row['id']."' class='waves-effect waves-light btn-small mb-1 mr-1'><i class='material-icons'>settings_backup_restore</i></a>";
			$nestedData[]	= "<a id='edit' href='".base_url('master_data/edit_kuliner/').$row['id']."' class='waves-effect waves-light btn-small mb-1 mr-1 green darken-1'><i class='material-icons'>edit</i></a>";
			$nestedData[]	= "<a href='".base_url('master_data/hapus_kuliner/').$row['id']."' class='waves-effect waves-light btn-small mb-1 mr-1 red darken-1'><i class='material-icons'>delete</i></i></a>";

			$data[] = $nestedData;
		}

		$json_data = array(
			"draw"            => intval( $requestData['draw'] ),
			"recordsTotal"    => intval( $totalData ),
			"recordsFiltered" => intval( $totalFiltered ),
			"data"            => $data
		);

		echo json_encode($json_data);
	}

	public function json_profesi()
	{
		$requestData	= $_REQUEST;
		$fetch			= $this->M_data->json_profesi($requestData['search']['value'], $requestData['order'][0]['column'], $requestData['order'][0]['dir'], $requestData['start'], $requestData['length']);

		$totalData		= $fetch['totalData'];
		$totalFiltered	= $fetch['totalFiltered'];
		$query			= $fetch['query'];

		$data	= array();
		foreach($query->result_array() as $row)
		{
			$nestedData = array();
			$nestedData[]	= $row['nomor'];
			$nestedData[]	= $row['nama'];
			$nestedData[]	= $row['alamat'];
			$nestedData[]	= $row['kontak'];
			$nestedData[]	= "<a class='waves-effect waves-light btn-small mb-1 mr-1'><i class='material-icons'>settings_backup_restore</i></a>";
			$nestedData[]	= "<a class='waves-effect waves-light btn-small mb-1 mr-1 green darken-1'><i class='material-icons'>edit</i></a>";
			$nestedData[]	= "<a class='waves-effect waves-light btn-small mb-1 mr-1 red darken-1'><i class='material-icons'>delete</i></i></a>";

			$data[] = $nestedData;
		}

		$json_data = array(
			"draw"            => intval( $requestData['draw'] ),
			"recordsTotal"    => intval( $totalData ),
			"recordsFiltered" => intval( $totalFiltered ),
			"data"            => $data
		);

		echo json_encode($json_data);
	}

	public function tambah_wisata($value='')
	{
		$this->load->view('tambah_wisata');
	}

	public function tambah_kuliner($value='')
	{
		$this->load->view('tambah_kuliner');
	}

	public function edit_wisata($id='')
	{
		$data = array(
			'get_data' => $this->M_data->get_data_wisata($id), );
		;
		$this->load->view('edit_wisata', $data);
	}

	public function edit_kuliner($id='')
	{
		$data = array(
			'get_data' => $this->M_data->get_data_kuliner($id), );
		;
		$this->load->view('edit_wisata', $data);
	}

	public function simpan_wisata($value='')
	{
		$tmp_name = $_FILES["foto"]["tmp_name"];
		$filename = basename($_FILES["foto"]["name"]);
		move_uploaded_file($tmp_name , 'uploads/wisata/'.$filename);

		$data = array(
			'nama' 		=> $this->input->post('nama') ,
			'jenis_wisata_id' 		=> $this->input->post('jenis_wisata_id') ,
			'jenis_kuliner_id' 		=> $this->input->post('jenis_kuliner_id') ,
			'foto' 		=> 'upload/wisata/'.$filename ,
			'deskripsi' => $this->input->post('deskripsi') ,
			'fasilitas' => $this->input->post('fasilitas') ,
			'bintang' 	=> $this->input->post('bintang') ,
			'kontak' 	=> $this->input->post('kontak') ,
			'alamat' 	=> $this->input->post('alamat') ,
			'latlong' 	=> $this->input->post('latlong') ,
			'web' 		=> $this->input->post('web') ,
			'tipe' 		=> 'wisata' );
		$save = $this->M_data->simpan_wisata($data);
		redirect('admin/data_wisata');
	}

	public function simpan_kuliner($value='')
	{
		$tmp_name = $_FILES["foto"]["tmp_name"];
		$filename = basename($_FILES["foto"]["name"]);
		move_uploaded_file($tmp_name , 'uploads/kuliner/'.$filename);

		$data = array(
			'nama' => $this->input->post('nama') ,
			'foto' => 'upload/kuliner/'.$filename ,
			'deskripsi' => $this->input->post('deskripsi') ,
			'fasilitas' => $this->input->post('fasilitas') ,
			'bintang' => $this->input->post('bintang') ,
			'kontak' => $this->input->post('kontak') ,
			'alamat' => $this->input->post('alamat') ,
			'latlong' => $this->input->post('latlong') ,
			'web' => $this->input->post('web') ,
			'tipe' => 'kuliner' );
		$save = $this->M_data->simpan_wisata($data);
		redirect('admin/data_wisata');
	}

}