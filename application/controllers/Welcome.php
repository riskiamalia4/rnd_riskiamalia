<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('M_data');
	}

	public function index()
	{
		$recordMhs = $this->M_data->getdataMahasiswa();
		$DATA = array('data_mhs' => $recordMhs);
		$this->load->view('home', $DATA);
	}
	
	public function formInput(){
		$this->load->view('form_input');
	}

	public function formEdit($id) {
		$recordMhs = $this->M_data->getDataMahasiswaDetail($id);

		$DATA = array('data_mhs' =>$recordMhs);
		$this->load->view('form_edit', $DATA);
	}

	public function AksiInsert(){
		$nim = $this->input->post('nim');
		$nama = $this->input->post('nama');
		$jurusan = $this->input->post('jurusan');

		$DataInsert = array (
			'nim' => $nim,
			'nama' => $nama,
			'jurusan' => $jurusan,
		);

		$this->M_data->tambah_aksi($DataInsert);
		redirect (base_url('Welcome'));
	}

	public function AksiEdit(){
		$nim = $this->input->post('nim');
		$nama = $this->input->post('nama');
		$jurusan = $this->input->post('jurusan');

		$DataUpdate = array (
			'nama' => $nama,
			'jurusan' => $jurusan,
		);

		$this->M_data->EditDataMhs($DataUpdate, $nim);
		redirect (base_url());
	}

	public function AksiDeleteData($nim){
		$this->M_data->DeleteDataMhs($nim);
		redirect(base_url());
	}
}
