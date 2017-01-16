<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

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
		$this->load->model("berita_model"); //constructor yang dipanggil ketika memanggil profil.php untuk melakukan pemanggilan pada model : profil_model.php yang ada di folder models
	}

	public function index()
	{
		/*$timestamp = 1140153693;
		$timezone  = 'UM8';
		$daylight_saving = TRUE;
		$time = gmt_to_local($timestamp, $timezone, $daylight_saving);
		$datestring = '%Y-%m-%d %h:%i:%s';
		$time = time();
		$human= mdate($datestring, $time);

		$data['tanggal']=$human;*/
		$this->load->view('header.php');
		$this->load->view('top.php');
		$this->load->view('left.php');
		$data['berita'] = $this->berita_model->tampil_berita(); //berisi dari return value pada function getAllProducts() di file models/products_model.php
		$this->load->view('berita.php',$data);
		$this->load->view('bawah.php');
	}

	public function tambah_berita(){
		$this->load->view('header.php');
		$this->load->view('top.php');
		$this->load->view('left.php');
		$this->load->view('tambah_berita.php');
		$this->load->view('bawah.php');
	}

	public function tambahberita_proses()
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
		//$config['file_name']						= $nmfile; //nama yang terupload nantinya - See more at: http://fabernainggolan.net/upload-image-rename-codeigniter-dan-menyimpan-ke-database#sthash.6jwDptdx.dpuf
		$this->upload->initialize($config);

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('foto_nama')){
			$error = array('error' => $this->upload->display_errors());
			redirect('berita/lihat_berita/'.$dosen_id);
		}else{
			$gbr = $this->upload->data();
			$data = array(
					'berita_judul' => $this->input->post('berita_judul'),
					'berita_isi' => $this->input->post('berita_isi'),
					'berita_penulis' => $this->input->post('berita_penulis'),
					'berita_tanggal' => $human,
					'berita_foto' => $gbr['file_name']
				);
			}

				$this->berita_model->tambahberita_proses($data); //passing variable $data ke products_model

				$this->session->set_flashdata('message', 'tambah');
				redirect('berita'); //redirect page ke halaman utama controller products

	}

	public function edit_berita($berita_id)
	{
		$this->load->view('header.php');
		$this->load->view('top.php');
		$this->load->view('left.php');
		$data['foto'] = $this->berita_model->lihat_foto($berita_id);
		$this->load->view('lihat_foto.php',$data);
		$this->load->view('modal_foto.php');
		$this->load->view('bawah.php');
	}

	public function edit_berita($dosen_id)
	{
		$this->load->view('header.php');
		$this->load->view('top.php');
		$this->load->view('left.php');
		$data['dosen'] = $this->berita_model->lihat_berita($dosen_id);
		$this->load->view('edit_berita.php',$data);
		$this->load->view('bawah.php');
	}

	public function editberita_proses(){
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

		$this->berita_model->editberita_proses($data, $condition); //passing variable $data ke products_model

		$this->session->set_flashdata('message', '1');
		redirect('berita/lihat_berita/'.$dosen_id); //redirect page ke halaman utama controller products

	}

	public function tambahfoto_proses()
	{
		$datestring = '%Y-%m-%d %h:%i:%s';
		$time = time();
		$human= mdate($datestring, $time);
			$berita_id=$this->input->post('berita_id');
		$this->load->library('upload');
		$config['upload_path']          = './assets/gambar/'; //path folder
		$config['allowed_types']        = 'gif|jpg|png|jpeg|bmp';
		$config['max_size']             = 2048;
		$config['max_width']            = 1024;
		$config['max_height']           = 768;
		//$config['file_name']						= $nmfile; //nama yang terupload nantinya - See more at: http://fabernainggolan.net/upload-image-rename-codeigniter-dan-menyimpan-ke-database#sthash.6jwDptdx.dpuf
		$this->upload->initialize($config);

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('foto_nama')){
			$error = array('error' => $this->upload->display_errors());
			redirect('berita/lihat_berita/'.$dosen_id);
		}else{
			$gbr = $this->upload->data();
			$data = array(
										'foto_nama' =>$gbr['file_name'],
										'foto_tanggal'=>$human,
										'berita_id'=>$berita_id
									);
			$this->berita_model->tambahfoto_proses($data); //passing variable $data ke products_model

			$this->session->set_flashdata('message', '1');
			redirect('berita/lihat_berita/'.$berita_id); //redirect page ke halaman utama controller products
		}

	}

	public function hapusfoto_proses($foto_id,$berita_id)
	{
				$this->berita_model->hapusfoto_proses($foto_id); //passing variable $data ke products_model

				$this->session->set_flashdata('message', 'hapus');
				redirect('berita/lihat_berita/'.$berita_id); //redirect page ke halaman utama controller products
	}

	public function hapusberita_proses($berita_id)
	{
				$this->berita_model->hapusberita_proses($berita_id); //passing variable $data ke products_model

				$this->session->set_flashdata('message', 'hapus');
				redirect('berita'); //redirect page ke halaman utama controller products
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