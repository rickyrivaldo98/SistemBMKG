<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class modelupload extends CI_Model
{
	// Fungsi untuk menampilkan semua data gambar
	public function view()
	{
		return $this->db->get('File')->result();
	}

	// Fungsi untuk melakukan proses upload file
	public function upload()
	{
		$config['upload_path'] = './upload/kritik/';
		$config['allowed_types'] = '*';
		$config['max_size']	= '10000';
		$config['remove_space'] = TRUE;

		$this->load->library('upload', $config); // Load konfigurasi uploadnya
		if ($this->upload->do_upload('File')) { // Lakukan upload dan Cek jika proses upload berhasil
			// Jika berhasil :
			$return = array('result' => 'success', 'file' => $this->upload->data(), 'error' => '');
			return $return;
		} else {
			// Jika gagal :
			$return = array('result' => 'failed', 'file' => '', 'error' => $this->upload->display_errors());
			return $return;
		}
	}

	// Fungsi untuk menyimpan data ke database
	public function save($upload)
	{
		$data = array(
			'Kritik' => $this->input->post('Kritik'),
			'Email' => $this->input->post('Email'),
			'Nama' => $this->input->post('Nama'),
			'File' => $upload['file']['file_name'],

		);
		// $this->modelresponden->insert_data($data, 'kritik');
		$this->db->insert('kritik', $data);
	}

	public function download($id)
	{
		$query = $this->db->get_where('kritik', array('ID' => $id));
		return $query->row_array();
	}
}
