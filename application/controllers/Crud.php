<?php 
 
class Crud extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('M_data');
                $this->load->helper('url');
	}
 
	function index(){
		$data['tb_mahasiswa'] = $this->M_data->tampil_data()->result();
		$this->load->view('home',$data);
	}

	function tambah(){
		$this->load->view('form_input');
	}
	function tambah_aksi(){
		$nama = $this->input->post('nim');
		$alamat = $this->input->post('nama');
		$pekerjaan = $this->input->post('jurusan');
 
		$data = array(
			'nim' => $nim,
			'nama' => $nama,
			'jurusan' => $jurusan
			);
		$this->M_data->input_data($data,'tb_mahasiswa');
		redirect('crud/index');
	}
	function hapus($id){
		$where = array('id' => $id);
		$this->M_data->hapus_data($where,'tb_mahasiswa');
		redirect('crud/index');
	}
	function edit($id){
	$where = array('id' => $id);
	$data['user'] = $this->M_data->edit_data($where,'tb_mahasiswa')->result();
	$this->load->view('form_edit',$data);
	}
	function update(){
	$id = $this->input->post('id');
	$nama = $this->input->post('nim');
	$alamat = $this->input->post('nama');
	$pekerjaan = $this->input->post('jurusan');

	$data = array(
		'nama' => $nim,
		'alamat' => $nama,
		'pekerjaan' => $jurusan
	);

	$where = array(
		'id' => $id
	);

	$this->M_data->update_data($where,$data,'user');
	redirect('crud/index');
	}
}