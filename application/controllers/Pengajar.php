<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengajar extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->library('session');
		$this->load->model("pengajar_model"); //constructor yang dipanggil ketika memanggil profil.php untuk melakukan pemanggilan pada model : profil_model.php yang ada di folder models
	}

	public function index()
	{
		$this->load->view('header.php');
		$this->load->view('top.php');
		$this->load->view('left.php');
		$data['dosen'] = $this->pengajar_model->tampil_pengajar(); //berisi dari return value pada function getAllProducts() di file models/products_model.php
		$this->load->view('pengajar.php',$data);
		$this->load->view('modal_pengajar.php');
		$this->load->view('bawah.php');
	}

	public function tambah_proses()
	{
		$this->load->library('upload');
		$config['upload_path']          = './assets/gambar/'; //path folder
		$config['allowed_types']        = 'gif|jpg|png|jpeg|bmp';
		$config['max_size']             = 2048;
		$config['max_width']            = 1024;
		$config['max_height']           = 768;
		//$config['file_name']						= $nmfile; //nama yang terupload nantinya - See more at: http://fabernainggolan.net/upload-image-rename-codeigniter-dan-menyimpan-ke-database#sthash.6jwDptdx.dpuf
		$this->upload->initialize($config);

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('foto')){
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('pengajar', $error);
		}else{
			$gbr = $this->upload->data();
			$data = array(
				'foto' =>$gbr['file_name'],
				'dosen_nama' => $this->input->post('dosen_name'),
				'tgl_lahir' => $this->input->post('tgl_lahir'),
				'tmpt_lahir' => $this->input->post('tmpt_lahir'),
				'pendidikan' => $this->input->post('pendidikan'),
				'mengajar' => $this->input->post('mengajar'),
				'status' => $this->input->post('status'),
				//'password' => $this->input->post('password'),
				'email' => $this->input->post('email')
			);
				$this->pengajar_model->tambahpengajar_proses($data); //passing variable $data ke products_model

				$this->session->set_flashdata('message', '1');
				redirect('pengajar'); //redirect page ke halaman utama controller products
		}
	}

	public function lihat_pengajar($dosen_id)
	{
		$this->load->view('header.php');
		$this->load->view('top.php');
		$this->load->view('left.php');
		$data['dosen'] = $this->pengajar_model->lihat_pengajar($dosen_id);
		$this->load->view('lihat_pengajar.php',$data);
		$this->load->view('bawah.php');
	}

	public function edit_pengajar($dosen_id)
	{
		$this->load->view('header.php');
		$this->load->view('top.php');
		$this->load->view('left.php');
		$data['dosen'] = $this->pengajar_model->lihat_pengajar($dosen_id);
		$this->load->view('edit_pengajar.php',$data);
		$this->load->view('bawah.php');
	}

	public function editpengajar_proses(){
		$dosen_id=$this->input->post('dosen_id');
		$data = array(
			'dosen_nama' => $this->input->post('dosen_name'),
			'tgl_lahir' => $this->input->post('tgl_lahir'),
			'tmpt_lahir' => $this->input->post('tmpt_lahir'),
			'pendidikan' => $this->input->post('pendidikan'),
			'mengajar' => $this->input->post('mengajar'),
			'status' => $this->input->post('status'),
			//'password' => $this->input->post('password'),
			'email' => $this->input->post('email')
		);

		$condition['dosen_id'] = $this->input->post('dosen_id'); //Digunakan untuk melakukan validasi terhadap produk mana yang akan diupdate nantinya

		$this->pengajar_model->editpengajar_proses($data, $condition); //passing variable $data ke products_model

		$this->session->set_flashdata('message', '1');
		redirect('Pengajar/lihat_pengajar/'.$dosen_id); //redirect page ke halaman utama controller products

	}

	public function update_foto()
	{

			$dosen_id=$this->input->post('dosen_id');
		$this->load->library('upload');
		$config['upload_path']          = './assets/gambar/'; //path folder
		$config['allowed_types']        = 'gif|jpg|png|jpeg|bmp';
		$config['max_size']             = 2048;
		$config['max_width']            = 1024;
		$config['max_height']           = 768;
		//$config['file_name']						= $nmfile; //nama yang terupload nantinya - See more at: http://fabernainggolan.net/upload-image-rename-codeigniter-dan-menyimpan-ke-database#sthash.6jwDptdx.dpuf
		$this->upload->initialize($config);

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('foto')){
			$error = array('error' => $this->upload->display_errors());
			redirect('Pengajar/lihat_pengajar/'.$dosen_id);
		}else{
			$gbr = $this->upload->data();
			$data = array('foto' =>$gbr['file_name']);
			$condition['dosen_id'] = $this->input->post('dosen_id'); //Digunakan untuk melakukan validasi terhadap produk mana yang akan diupdate nantinya

			$this->pengajar_model->editpengajar_proses($data, $condition); //passing variable $data ke products_model

			$this->session->set_flashdata('message', '1');
			redirect('Pengajar/lihat_pengajar/'.$dosen_id); //redirect page ke halaman utama controller products
		}

	}
	/*

	public function editprofil_proses()
	{
			$gbr = $this->upload->data();
			$data = array(
					'visi' => $this->input->post('visi'),
					'misi' => $this->input->post('misi'),
					'sejarah' => $this->input->post('sejarah'),
					'tujuan' => $this->input->post('tujuan'),
					'sasaran' => $this->input->post('sasaran'),
					'banyak_staf' => $this->input->post('banyak_staf'),
					'banyak_mahasiswa' => $this->input->post('banyak_mahasiswa')
				);
				$condition['profil_id'] = $this->input->post('profil_id'); //Digunakan untuk melakukan validasi terhadap produk mana yang akan diupdate nantinya

				$this->profil_model->editprofil_proses($data, $condition); //passing variable $data ke products_model

				$this->session->set_flashdata('message', '1');
				redirect('profil'); //redirect page ke halaman utama controller products


	}*/
}
