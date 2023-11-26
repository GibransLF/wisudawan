<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wisudawan extends CI_Controller {
public function __construct()
{
    parent::__construct();
    $this->load->model('wisudawanModel');
}
	public function index()
	{
		$data['wisudawan'] = $this->wisudawanModel->get_all();
		$this->load->view('template/header');
		$this->load->view('wisudawan/index', $data);
		$this->load->view('template/footer');
	}

	public function add()
	{
		$this->load->view('template/header');
		$this->load->view('wisudawan/add');
		$this->load->view('template/footer');
	}
	public function create()
	{
		$nim = $this->input->post('nim');
		$nama = $this->input->post('nama');
		$jurusan = $this->input->post('jurusan');
		$tglLulus = $this->input->post('tglLulus');
		$ipk = $this->input->post('ipk');
		$judulSkripsi = $this->input->post('judulSkripsi');

		$data = [
			'nim'=> $nim,
			'nama'=> $nama,
			'jurusan'=> $jurusan,
			'tanggal_lulus'=> $tglLulus,
			'ipk'=> $ipk,
			'judul_skripsi'=> $judulSkripsi,
		];

		$this->wisudawanModel->create($data);
		redirect('wisudawan/index');
	}
	public function edit()
	{
		$id = $this->input->get('id');
		$data['wisudawan'] = $this->wisudawanModel->get_by_id($id);
		
		$this->load->view('template/header');
		$this->load->view('wisudawan/edit', $data);
		$this->load->view('template/footer');
	}

	public function update()
	{
		$id = $this->input->post('id');
		$nim = $this->input->post('nim');
		$nama = $this->input->post('nama');
		$jurusan = $this->input->post('jurusan');
		$tglLulus = $this->input->post('tglLulus');
		$ipk = $this->input->post('ipk');
		$judulSkripsi = $this->input->post('judulSkripsi');

		$data = [
			'nim'=> $nim,
			'nama'=> $nama,
			'jurusan'=> $jurusan,
			'tanggal_lulus'=> $tglLulus,
			'ipk'=> $ipk,
			'judul_skripsi'=> $judulSkripsi,
		];

		$this->wisudawanModel->update($id,$data);
		redirect('wisudawan/index');
	}
	public function delete()
	{
		$id = $this->input->get('id');

		$this->wisudawanModel->delete($id);
		redirect('wisudawan/index');
	}
}
