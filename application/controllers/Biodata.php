<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Biodata extends CI_Controller {
	
	public function index()
	{
		$this->load->view('view-form-biodata');
	}

	public function save()
	{
		$data = [
			'nama' => $this->input->post('nama'),
			'email' => $this->input->post('email'),
			'alamat' => $this->input->post('alamat'),
			'tanggal_lahir' => $this->input->post('tanggal_lahir'),
			'jenis_kelamin' => $this->input->post('jenis_kelamin'),
			'pekerjaan' => $this->input->post('pekerjaan'),
		];

		$this->load->view('view-data-biodata', $data);
	}
}
