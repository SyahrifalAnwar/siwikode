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
			$nestedData[]	= "<a href='".base_url('master_data/delete_wisata/').$row['id']."' class='waves-effect waves-light btn-small mb-1 mr-1 red darken-1'><i class='material-icons'>delete</i></i></a>";


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
			$nestedData[]	= "<a href='".base_url('master_data/delete_wisata/').$row['id']."' class='waves-effect waves-light btn-small mb-1 mr-1 red darken-1'><i class='material-icons'>delete</i></i></a>";

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
			$nestedData[]	= "<a id='edit' href='".base_url('master_data/edit_profesi/').$row['id']."' class='waves-effect waves-light btn-small mb-1 mr-1 green darken-1'><i class='material-icons'>edit</i></a>";
			$nestedData[]	= "<a href='".base_url('master_data/delete_profesi/').$row['id']."' class='waves-effect waves-light btn-small mb-1 mr-1 red darken-1'><i class='material-icons'>delete</i></i></a>";

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

	public function json_jenis_wisata()
	{
		$requestData	= $_REQUEST;
		$fetch			= $this->M_data->json_jenis_wisata($requestData['search']['value'], $requestData['order'][0]['column'], $requestData['order'][0]['dir'], $requestData['start'], $requestData['length']);

		$totalData		= $fetch['totalData'];
		$totalFiltered	= $fetch['totalFiltered'];
		$query			= $fetch['query'];

		$data	= array();
		foreach($query->result_array() as $row)
		{
			$nestedData = array();
			$nestedData[]	= $row['nomor'];
			$nestedData[]	= $row['nama'];
			$nestedData[]	= "<a id='edit' href='".base_url('master_data/edit_jenis_wisata/').$row['id']."' class='waves-effect waves-light btn-small mb-1 mr-1 green darken-1'><i class='material-icons'>edit</i></a>";
			$nestedData[]	= "<a href='".base_url('master_data/delete_jenis_wisata/').$row['id']."' class='waves-effect waves-light btn-small mb-1 mr-1 red darken-1'><i class='material-icons'>delete</i></i></a>";

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

	public function json_jenis_kuliner()
	{
		$requestData	= $_REQUEST;
		$fetch			= $this->M_data->json_jenis_kuliner($requestData['search']['value'], $requestData['order'][0]['column'], $requestData['order'][0]['dir'], $requestData['start'], $requestData['length']);

		$totalData		= $fetch['totalData'];
		$totalFiltered	= $fetch['totalFiltered'];
		$query			= $fetch['query'];

		$data	= array();
		foreach($query->result_array() as $row)
		{
			$nestedData = array();
			$nestedData[]	= $row['nomor'];
			$nestedData[]	= $row['nama'];
			$nestedData[]	= "<a id='edit' href='".base_url('master_data/edit_jenis_kuliner/').$row['id']."' class='waves-effect waves-light btn-small mb-1 mr-1 green darken-1'><i class='material-icons'>edit</i></a>";
			$nestedData[]	= "<a href='".base_url('master_data/delete_jenis_kuliner/').$row['id']."' class='waves-effect waves-light btn-small mb-1 mr-1 red darken-1'><i class='material-icons'>delete</i></i></a>";

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

	public function json_testimoni()
	{
		$requestData	= $_REQUEST;
		$fetch			= $this->M_data->json_testimoni($requestData['search']['value'], $requestData['order'][0]['column'], $requestData['order'][0]['dir'], $requestData['start'], $requestData['length']);

		$totalData		= $fetch['totalData'];
		$totalFiltered	= $fetch['totalFiltered'];
		$query			= $fetch['query'];

		$data	= array();
		foreach($query->result_array() as $row)
		{
			$nestedData = array();
			$nestedData[]	= $row['nomor'];
			$nestedData[]	= $row['nama'];
			$nestedData[]	= $row['komentar'];
			$nestedData[]	= $row['rating'];
			$nestedData[]	= "<a href='".base_url('master_data/delete_testimoni/').$row['id']."' class='waves-effect waves-light btn-small mb-1 mr-1 red darken-1'><i class='material-icons'>delete</i></i></a>";

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
		$data = array(
			'menu_wisata' => $this->M_data->menu_wisata(),
			'menu_kuliner' => $this->M_data->menu_kuliner()
		);
		$this->load->view('tambah_wisata', $data);
	}

	public function tambah_kuliner($value='')
	{
		$data = array(
			'menu_wisata' => $this->M_data->menu_wisata(),
			'menu_kuliner' => $this->M_data->menu_kuliner()
		);
		$this->load->view('tambah_kuliner',$data);
	}

	public function tambah_profesi()
	{
		$this->load->view('tambah_profesi');
	}

	function edit_jenis_wisata($id='')
	{
		$data['data'] = $this->M_data->get_jeniswisata($id);
		$this->load->view('edit_jenis_wisata', $data);
	}
	function edit_jenis_kuliner($id='')
	{
		$data['data'] = $this->M_data->get_jeniskuliner($id);
		$this->load->view('edit_jenis_kuliner', $data);
	}
	public function edit_profesi($id='')
	{
		$data['data'] = $this->M_data->get_profesi($id);
		$this->load->view('edit_profesi', $data);
	}
	public function tambah_jenis_rekreasi()
	{
		$this->load->view('tambah_jenis_wisata');
	}
	public function tambah_jenis_kuliner()
	{
		$this->load->view('tambah_jenis_kuliner');
	}

	public function edit_wisata($id='')
	{
		$data = array(
			'get_data' => $this->M_data->get_data_wisata($id), 
			'menu_wisata' => $this->M_data->menu_wisata(),
			'menu_kuliner' => $this->M_data->menu_kuliner()
		);
		$this->load->view('edit_wisata', $data);
	}

	public function edit_kuliner($id='')
	{
		$data = array(
			'get_data' => $this->M_data->get_data_wisata($id), 
			'menu_wisata' => $this->M_data->menu_wisata(),
			'menu_kuliner' => $this->M_data->menu_kuliner()
		);
		$this->load->view('edit_wisata', $data);
	}

	public function delete_wisata($id='')
	{
		$this->M_data->delete_wisata($id);
		redirect('admin/data_wisata');
	}

	public function delete_testimoni($id='')
	{
		$this->M_data->delete_testimoni($id);
		redirect('admin/data_testimoni');
	}

	public function delete_kuliner($id='')
	{
		$this->M_data->delete_wisata($id);
		redirect('admin/data_kuliner');
	}

	public function delete_jenis_wisata($id='')
	{
		$this->M_data->delete_jenis_wisata($id);
		redirect('admin/jenis_rekreasi');
	}

	public function delete_jenis_kuliner($id='')
	{
		$this->M_data->delete_jenis_kuliner($id);
		redirect('admin/jenis_kuliner');
	}

	public function delete_profesi($id='')
	{
		$this->M_data->delete_profesi($id);
		redirect('admin/data_profesi');
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

	public function simpan_profesi($value='')
	{
		$data = array(
			'nama' => $this->input->post('nama') , );
		$simpan = $this->M_data->simpan_profesi($data);
		if ($simpan) {
			redirect('admin/data_profesi');
		}
	}



	public function simpan_jenis_wisata($value='')
	{
		$data = array(
			'nama' => $this->input->post('nama') , );
		$simpan = $this->M_data->simpan_jenis_wisata($data);
		if ($simpan) {
			redirect('admin/jenis_rekreasi');
		}
	}

	public function simpan_editjenis_wisata($id='')
	{
		$data = array(
			'id' => $id ,
			'nama' => $this->input->post('nama') , );
		$simpan = $this->M_data->simpan_editjenis_wisata($data);
		if ($simpan) {
			redirect('admin/jenis_rekreasi');
		}
	}

	public function simpan_editprofesi($id='')
	{
		$data = array(
			'id' => $id ,
			'nama' => $this->input->post('nama') , );
		$simpan = $this->M_data->simpan_editprofesi($data);
		if ($simpan) {
			redirect('admin/data_profesi');
		}
	}

	public function simpan_editjenis_kuliner($id='')
	{
		$data = array(
			'id' => $id ,
			'nama' => $this->input->post('nama') , );
		$simpan = $this->M_data->simpan_editjenis_kuliner($data);
		if ($simpan) {
			redirect('admin/jenis_kuliner');
		}
	}

	public function simpan_jenis_kuliner($value='')
	{
		$data = array(
			'nama' => $this->input->post('nama') , );
		$simpan = $this->M_data->simpan_jenis_kuliner($data);
		if ($simpan) {
			redirect('admin/jenis_kuliner');
		}
	}

}