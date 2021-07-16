<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_data extends CI_Model {

	public function check_login($email, $password){

		if($email && $password) {
			$sql = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
			$query = $this->db->query($sql);
			$result = $query->row_array();
			return ($query->num_rows() === 1 ? $result['id_user'] : false);
		}
		else {
			return false;
		}

	}

	public function menu_kuliner()
	{
		$sql = 'SELECT * FROM `jenis_kuliner`';
		$query = $this->db->query($sql);
		return $query->result_array();
	}

	public function menu_wisata()
	{
		$sql = 'SELECT * FROM `jenis_wisata`';
		$query = $this->db->query($sql);
		return $query->result_array();
	}

	function get_data_testimoni($id)
	{
		$sql = 'SELECT * FROM `jenis_wisata`';
		$query = $this->db->query($sql);
		return $query->result_array();
	}

	public function get_profesi($id)
	{
		$sql = "SELECT * FROM `profesi` WHERE id = $id";
		$query = $this->db->query($sql);
		return $query->result_array();
	}

	public function simpan_wisata($data)
	{
		return $this->db->insert('wisata', $data);
	}

	public function simpan_profesi($data='')
	{
		return $this->db->insert('profesi', $data);
	}

	public function simpan_editjenis_wisata($data='')
	{
		$this->db->set($data);
		$this->db->where('id', $data['id']);
		return $this->db->update('jenis_wisata');

	}

	public function simpan_editjenis_kuliner($data='')
	{
		$this->db->set($data);
		$this->db->where('id', $data['id']);
		return $this->db->update('jenis_kuliner');

	}

	public function simpan_editprofesi($data='')
	{
		$this->db->set($data);
		$this->db->where('id', $data['id']);
		return $this->db->update('profesi');
	}

	public function get_jeniswisata($id='')
	{
		$sql = "SELECT * FROM `jenis_wisata` WHERE id = $id";
		$query = $this->db->query($sql);
		return $query->result_array();
	}

	public function delete_jenis_wisata($id='')
	{
		$sql = "DELETE FROM `jenis_wisata` WHERE id = $id";
		$query = $this->db->query($sql);
		return $query;
	}

	public function delete_testimoni($id='')
	{
		$sql = "DELETE FROM `testimoni` WHERE id = $id";
		$query = $this->db->query($sql);
		return $query;
	}

	public function delete_wisata($id='')
	{
		$sql = "DELETE FROM `wisata` WHERE id = $id";
		$query = $this->db->query($sql);
		return $query;
	}

	public function delete_testimoni($id='')
	{
		$sql = "DELETE FROM `testimoni` WHERE id = $id";
		$query = $this->db->query($sql);
		return $query;
	}

	public function delete_profesi($id='')
	{
		$sql = "DELETE FROM `profesi` WHERE id = $id";
		$query = $this->db->query($sql);
		return $query;
	}

	public function delete_jenis_kuliner($id='')
	{
		$sql = "DELETE FROM `jenis_kuliner` WHERE id = $id";
		$query = $this->db->query($sql);
		return $query;
	}

	public function get_jeniskuliner($id='')
	{
		$sql = "SELECT * FROM `jenis_kuliner` WHERE id = $id";
		$query = $this->db->query($sql);
		return $query->result_array();
	}

	public function simpan_jenis_wisata($data)
	{
		return $this->db->insert('jenis_wisata', $data);
	}

	public function simpan_jenis_kuliner($data)
	{
		return $this->db->insert('jenis_kuliner', $data);
	}

	public function get_data_kuliner($id = '')
	{
		if ($id == '') {
			$sql = "SELECT * FROM `wisata` WHERE tipe = 'kuliner' ";		
			$query = $this->db->query($sql);
			return $query->result_array();
		}else{
			$sql = "SELECT * FROM `wisata` WHERE tipe = 'kuliner' AND id = $id ";		
			$query = $this->db->query($sql);
			return $query->result_array();
		}
	}

	public function get_data_wisata($id = '')
	{
		if ($id == '') {
			$sql = "SELECT * FROM `wisata` WHERE tipe = 'wisata' ";		
			$query = $this->db->query($sql);
			return $query->result_array();
		}else{
			$sql = "SELECT * FROM `wisata` WHERE tipe = 'wisata' AND id = $id ";		
			$query = $this->db->query($sql);
			return $query->result_array();
		}
	}

	public function json_wisata($like_value = NULL, $column_order = NULL, $column_dir = NULL, $limit_start = NULL, $limit_length = NULL)
	{
		$sql = "
		SELECT
		(@row:=@row+1) AS nomor,`id`, `jenis_wisata_id`, `jenis_kuliner_id`, `foto`, `nama`, `deskripsi`, `fasilitas`, `bintang`, `kontak`, `alamat`, `latlong`, `email`, `web`, `tipe` 

		FROM
		`wisata` AS a

		, (SELECT @row := 0) r 
		WHERE 1=1
		AND tipe = 'wisata'
		";

		$data['totalData'] = $this->db->query($sql)->num_rows();

		if( ! empty($like_value))
		{
			$sql .= " AND ( ";
			$sql .= "
			a.`nama` LIKE '%".$this->db->escape_like_str($like_value)."%'
			";
			$sql .= " ) ";
		}

		$data['totalFiltered']	= $this->db->query($sql)->num_rows();

		$columns_order_by = array(
			0   => 'nomor',
			1   => 'a.`nama`',
			2   => 'b.`alamat`',
			3   => 'a.`kontak`'

		);

		$sql .= " ORDER BY ".$columns_order_by[$column_order]." ".$column_dir.", nomor ";
		$sql .= " LIMIT ".$limit_start." ,".$limit_length." ";

		$data['query'] = $this->db->query($sql);
		return $data;


	}

	public function json_jenis_wisata($like_value = NULL, $column_order = NULL, $column_dir = NULL, $limit_start = NULL, $limit_length = NULL)
	{
		$sql = "
		SELECT
		(@row:=@row+1) AS nomor,`id`, `nama`
		
		FROM
		`jenis_wisata` AS a
		
		, (SELECT @row := 0) r 
		WHERE 1=1
		";

		$data['totalData'] = $this->db->query($sql)->num_rows();

		if( ! empty($like_value))
		{
			$sql .= " AND ( ";
			$sql .= "
			a.`nama` LIKE '%".$this->db->escape_like_str($like_value)."%'
			";
			$sql .= " ) ";
		}

		$data['totalFiltered']	= $this->db->query($sql)->num_rows();

		$columns_order_by = array(
			0   => 'nomor',
			1   => 'a.`nama`'
			
		);

		$sql .= " ORDER BY ".$columns_order_by[$column_order]." ".$column_dir.", nomor ";
		$sql .= " LIMIT ".$limit_start." ,".$limit_length." ";

		$data['query'] = $this->db->query($sql);
		return $data;
		
		
	}

	public function json_jenis_kuliner($like_value = NULL, $column_order = NULL, $column_dir = NULL, $limit_start = NULL, $limit_length = NULL)
	{
		$sql = "
		SELECT
		(@row:=@row+1) AS nomor,`id`, `nama`
		
		FROM
		`jenis_kuliner` AS a
		
		, (SELECT @row := 0) r 
		WHERE 1=1
		";

		$data['totalData'] = $this->db->query($sql)->num_rows();

		if( ! empty($like_value))
		{
			$sql .= " AND ( ";
			$sql .= "
			a.`nama` LIKE '%".$this->db->escape_like_str($like_value)."%'
			";
			$sql .= " ) ";
		}

		$data['totalFiltered']	= $this->db->query($sql)->num_rows();

		$columns_order_by = array(
			0   => 'nomor',
			1   => 'a.`nama`'
			
		);

		$sql .= " ORDER BY ".$columns_order_by[$column_order]." ".$column_dir.", nomor ";
		$sql .= " LIMIT ".$limit_start." ,".$limit_length." ";

		$data['query'] = $this->db->query($sql);
		return $data;
		
		
	}

	public function json_kuliner($like_value = NULL, $column_order = NULL, $column_dir = NULL, $limit_start = NULL, $limit_length = NULL)
	{
		$sql = "
		SELECT
		(@row:=@row+1) AS nomor,`id`, `jenis_wisata_id`, `jenis_kuliner_id`, `foto`, `nama`, `deskripsi`, `fasilitas`, `bintang`, `kontak`, `alamat`, `latlong`, `email`, `web`, `tipe` 
		
		FROM
		`wisata` AS a
		
		, (SELECT @row := 0) r 
		WHERE 1=1
		AND tipe = 'kuliner'
		";

		$data['totalData'] = $this->db->query($sql)->num_rows();

		if( ! empty($like_value))
		{
			$sql .= " AND ( ";
			$sql .= "
			a.`nama` LIKE '%".$this->db->escape_like_str($like_value)."%'
			";
			$sql .= " ) ";
		}

		$data['totalFiltered']	= $this->db->query($sql)->num_rows();

		$columns_order_by = array(
			0   => 'nomor',
			1   => 'a.`nama`',
			2   => 'b.`alamat`',
			3   => 'a.`kontak`'
			
		);

		$sql .= " ORDER BY ".$columns_order_by[$column_order]." ".$column_dir.", nomor ";
		$sql .= " LIMIT ".$limit_start." ,".$limit_length." ";

		$data['query'] = $this->db->query($sql);
		return $data;
		
		
	}

	public function json_profesi($like_value = NULL, $column_order = NULL, $column_dir = NULL, $limit_start = NULL, $limit_length = NULL)
	{
		$sql = "
		SELECT
		(@row:=@row+1) AS nomor,`id`,`nama`
		
		FROM
		`profesi` AS a
		
		, (SELECT @row := 0) r 
		WHERE 1=1
		";

		$data['totalData'] = $this->db->query($sql)->num_rows();

		if( ! empty($like_value))
		{
			$sql .= " AND ( ";
			$sql .= "
			a.`nama` LIKE '%".$this->db->escape_like_str($like_value)."%'
			";
			$sql .= " ) ";
		}

		$data['totalFiltered']	= $this->db->query($sql)->num_rows();

		$columns_order_by = array(
			0   => 'nomor',
			1   => 'a.`nama`'
			
		);

		$sql .= " ORDER BY ".$columns_order_by[$column_order]." ".$column_dir.", nomor ";
		$sql .= " LIMIT ".$limit_start." ,".$limit_length." ";

		$data['query'] = $this->db->query($sql);
		return $data;
		
		
	}

	public function json_testimoni($like_value = NULL, $column_order = NULL, $column_dir = NULL, $limit_start = NULL, $limit_length = NULL)
	{
		$sql = "
		SELECT
		(@row:=@row+1) AS nomor,`id`,`nama`,`komentar`,`rating`
		
		FROM
		`testimoni` AS a
		
		, (SELECT @row := 0) r 
		WHERE 1=1
		";

		$data['totalData'] = $this->db->query($sql)->num_rows();

		if( ! empty($like_value))
		{
			$sql .= " AND ( ";
			$sql .= "
			a.`nama` LIKE '%".$this->db->escape_like_str($like_value)."%'
			";
			$sql .= " ) ";
		}

		$data['totalFiltered']	= $this->db->query($sql)->num_rows();

		$columns_order_by = array(
			0   => 'nomor',
			1   => 'a.`nama`'
			
		);

		$sql .= " ORDER BY ".$columns_order_by[$column_order]." ".$column_dir.", nomor ";
		$sql .= " LIMIT ".$limit_start." ,".$limit_length." ";

		$data['query'] = $this->db->query($sql);
		return $data;
		
		
	}
}
