<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Album extends CI_Controller {

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
		$this->load->model("album_model"); //constructor yang dipanggil ketika memanggil profil.php untuk melakukan pemanggilan pada model : profil_model.php yang ada di folder models
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
		$data['album'] = $this->album_model->tampil_album(); //berisi dari return value pada function getAllProducts() di file models/products_model.php
		$this->load->view('album.php',$data);
		$this->load->view('modal_album.php');
		$this->load->view('bawah.php');
	}

	public function tambah_proses()
	{
		$datestring = '%Y-%m-%d %h:%i:%s';
		$time = time();
		$human= mdate($datestring, $time);
		$data = array(
				'album_deskripsi' => $this->input->post('album_deskripsi'),
				'album_tanggal' => $human,
				'album_jenis' => $this->input->post('album_jenis')

			);
				$this->album_model->tambahalbum_proses($data); //passing variable $data ke products_model

				$this->session->set_flashdata('message', '1');
				redirect('album'); //redirect page ke halaman utama controller products

	}

	public function lihat_album($album_id)
	{
		$this->load->view('header.php');
		$this->load->view('top.php');
		$this->load->view('left.php');
		$data['foto'] = $this->album_model->lihat_foto($album_id);
		$this->load->view('lihat_foto.php',$data);
		$this->load->view('modal_foto.php');
		$this->load->view('bawah.php');
	}

	public function edit_album($dosen_id)
	{
		$this->load->view('header.php');
		$this->load->view('top.php');
		$this->load->view('left.php');
		$data['dosen'] = $this->album_model->lihat_album($dosen_id);
		$this->load->view('edit_album.php',$data);
		$this->load->view('bawah.php');
	}

	public function editalbum_proses(){
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

		$this->album_model->editalbum_proses($data, $condition); //passing variable $data ke products_model

		$this->session->set_flashdata('message', '1');
		redirect('album/lihat_album/'.$dosen_id); //redirect page ke halaman utama controller products

	}

	public function tambahfoto_proses()
	{
		$datestring = '%Y-%m-%d %h:%i:%s';
		$time = time();
		$human= mdate($datestring, $time);
			$album_id=$this->input->post('album_id');
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
			redirect('album/lihat_album/'.$dosen_id);
		}else{
			$gbr = $this->upload->data();
			$data = array(
										'foto_nama' =>$gbr['file_name'],
										'foto_tanggal'=>$human,
										'album_id'=>$album_id
									);
			$this->album_model->tambahfoto_proses($data); //passing variable $data ke products_model

			$this->session->set_flashdata('message', '1');
			redirect('album/lihat_album/'.$album_id); //redirect page ke halaman utama controller products
		}

	}

	public function hapusfoto_proses($foto_id,$album_id)
	{
				$this->album_model->hapusfoto_proses($foto_id); //passing variable $data ke products_model

				$this->session->set_flashdata('message', 'hapus');
				redirect('album/lihat_album/'.$album_id); //redirect page ke halaman utama controller products
	}

	public function hapusalbum_proses($album_id)
	{
				$this->album_model->hapusalbum_proses($album_id); //passing variable $data ke products_model

				$this->session->set_flashdata('message', 'hapus');
				redirect('album'); //redirect page ke halaman utama controller products
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
