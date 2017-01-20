<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller {

	function __construct(){
		parent::__construct();
		date_default_timezone_set( 'Asia/Jakarta' );
		if($this->session->userdata('status') != "login"){
		$this->session->set_flashdata('message', '0');
			redirect('login');
		}
		$this->load->database();
		$this->load->helper('date');
		$this->load->library('session');
		$this->load->model("artikel_model"); //constructor yang dipanggil ketika memanggil profil.php untuk melakukan pemanggilan pada model : profil_model.php yang ada di folder models
	}

	public function index()
	{
		$this->load->view('header.php');
		$this->load->view('top.php');
		$this->load->view('left.php');
		$data['artikel'] = $this->artikel_model->tampil_artikel(); //berisi dari return value pada function getAllProducts() di file models/products_model.php
		$this->load->view('artikel.php',$data);
		$this->load->view('bawah.php');
	}

	public function tambah_artikel(){
		$this->load->view('header.php');
		$this->load->view('top.php');
		$this->load->view('left.php');
		$this->load->view('tambah_artikel.php');
		$this->load->view('bawah.php');
	}

	public function tambahartikel_proses()
	{
		$datestring = '%Y-%m-%d %h:%i:%s';
		$time = time();
		$human= mdate($datestring, $time);
		$this->load->library('upload');
		$config['upload_path']          = './assets/gambar/'; //path folder
		$config['allowed_types']        = 'gif|jpg|png|jpeg|bmp';
		$config['max_size']             = 2048;
		$config['max_width']            = 1024;
		$config['max_height']           = 768;
		//$config['full_path']						= $nmfile; //nama yang terupload nantinya - See more at: http://fabernainggolan.net/upload-image-rename-codeigniter-dan-menyimpan-ke-database#sthash.6jwDptdx.dpuf
		$this->upload->initialize($config);

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('artikel_foto')){
			$error = array('error' => $this->upload->display_errors());
			redirect('artikel/lihat_artikel/'.$dosen_id);
		}else{
			$gbr = $this->upload->data();
			$data = array(
					'artikel_judul' => $this->input->post('artikel_judul'),
					'artikel_isi' => $this->input->post('artikel_isi'),
					'penulis' => $this->input->post('artikel_penulis'),
					'artikel_tanggal' => $human,
					'artikel_foto' => $gbr['full_path']
				);
			}

				$this->artikel_model->tambahartikel_proses($data); //passing variable $data ke products_model

				$this->session->set_flashdata('message', 'tambah');
				redirect('artikel'); //redirect page ke halaman utama controller products

	}

	public function edit_artikel($artikel_id)
	{
		$this->load->view('header.php');
		$this->load->view('top.php');
		$this->load->view('left.php');
		$data['artikel'] = $this->artikel_model->edit_artikel($artikel_id);
		$this->load->view('edit_artikel.php',$data);
		$this->load->view('bawah.php');
	}


	public function editartikel_proses(){
		$datestring = '%Y-%m-%d %h:%i:%s';
		$time = time();
		$human= mdate($datestring, $time);
		$artikel_id=$this->input->post('artikel_id');
		$data = array(
			'artikel_judul' => $this->input->post('artikel_judul'),
			'artikel_isi' => $this->input->post('artikel_isi'),
			'penulis' => $this->input->post('artikel_penulis'),
			'artikel_tanggal' => $human
		);

		$condition['artikel_id'] = $this->input->post('artikel_id'); //Digunakan untuk melakukan validasi terhadap produk mana yang akan diupdate nantinya

		$this->artikel_model->editartikel_proses($data, $this->input->post('artikel_id')); //passing variable $data ke products_model

		$this->session->set_flashdata('message', 'edit');
		redirect('artikel'); //redirect page ke halaman utama controller products

	}

	public function hapusartikel_proses($artikel_id)
	{
				$this->artikel_model->hapusartikel_proses($artikel_id); //passing variable $data ke products_model

				$this->session->set_flashdata('message', 'hapus');
				redirect('artikel'); //redirect page ke halaman utama controller products
	}
/*
	public function tambahfoto_proses()
	{
		$datestring = '%Y-%m-%d %h:%i:%s';
		$time = time();
		$human= mdate($datestring, $time);
			$artikel_id=$this->input->post('artikel_id');
		$this->load->library('upload');
		$config['upload_path']          = './assets/gambar/'; //path folder
		$config['allowed_types']        = 'gif|jpg|png|jpeg|bmp';
		$config['max_size']             = 2048;
		$config['max_width']            = 1024;
		$config['max_height']           = 768;
		//$config['full_path']						= $nmfile; //nama yang terupload nantinya - See more at: http://fabernainggolan.net/upload-image-rename-codeigniter-dan-menyimpan-ke-database#sthash.6jwDptdx.dpuf
		$this->upload->initialize($config);

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('foto_nama')){
			$error = array('error' => $this->upload->display_errors());
			redirect('artikel/lihat_artikel/'.$dosen_id);
		}else{
			$gbr = $this->upload->data();
			$data = array(
										'foto_nama' =>$gbr['full_path'],
										'foto_tanggal'=>$human,
										'artikel_id'=>$artikel_id
									);
			$this->artikel_model->tambahfoto_proses($data); //passing variable $data ke products_model

			$this->session->set_flashdata('message', '1');
			redirect('artikel/lihat_artikel/'.$artikel_id); //redirect page ke halaman utama controller products
		}

	}

	public function hapusfoto_proses($foto_id,$artikel_id)
	{
				$this->artikel_model->hapusfoto_proses($foto_id); //passing variable $data ke products_model

				$this->session->set_flashdata('message', 'hapus');
				redirect('artikel/lihat_artikel/'.$artikel_id); //redirect page ke halaman utama controller products
	}

	public function hapusartikel_proses($artikel_id)
	{
				$this->artikel_model->hapusartikel_proses($artikel_id); //passing variable $data ke products_model

				$this->session->set_flashdata('message', 'hapus');
				redirect('artikel'); //redirect page ke halaman utama controller products
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
