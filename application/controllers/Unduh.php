<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Unduh extends CI_Controller {

	function __construct(){
		parent::__construct();

		if($this->session->userdata('status') != "login"){
			$this->session->set_flashdata('message', '0');
			redirect('login');
		}
		$this->load->database();
		$this->load->library('session');
		$this->load->model("unduh_model"); //constructor yang dipanggil ketika memanggil profil.php untuk melakukan pemanggilan pada model : profil_model.php yang ada di folder models
	}

	public function materi()
	{
		$this->load->view('header.php');
		$this->load->view('top.php');
		$this->load->view('left.php');
		$jenis = "materi"; //Digunakan untuk melakukan validasi terhadap produk mana yang akan diupdate nantinya
		$data['unduh'] = $this->unduh_model->tampil_unduh($jenis); //berisi dari return value pada function getAllProducts() di file models/products_model.php
		$this->load->view('unduh.php',$data);
		$this->load->view('modal_unduh.php');
		$this->load->view('bawah.php');
	}

	public function tugas()
	{
		$this->load->view('header.php');
		$this->load->view('top.php');
		$this->load->view('left.php');
		$condition['jenis'] = "tugas"; //Digunakan untuk melakukan validasi terhadap produk mana yang akan diupdate nantinya
		$jenis = "tugas"; //Digunakan untuk melakukan validasi terhadap produk mana yang akan diupdate nantinya
		$data['unduh'] = $this->unduh_model->tampil_unduh($jenis); //berisi dari return value pada function getAllProducts() di file models/products_model.php
		$this->load->view('unduh.php',$data);
		$this->load->view('modal_unduh.php');
		$this->load->view('bawah.php');
	}

	public function lainnya()
	{
		$this->load->view('header.php');
		$this->load->view('top.php');
		$this->load->view('left.php');
		$condition['jenis'] = "lainnya"; //Digunakan untuk melakukan validasi terhadap produk mana yang akan diupdate nantinya
		$jenis = "lainnya"; //Digunakan untuk melakukan validasi terhadap produk mana yang akan diupdate nantinya
		$data['unduh'] = $this->unduh_model->tampil_unduh($jenis); //berisi dari return value pada function getAllProducts() di file models/products_model.php
		$this->load->view('unduh.php',$data);
		$this->load->view('modal_unduh.php');
		$this->load->view('bawah.php');
	}

	public function tambah_proses()
	{
		$this->load->library('upload');
		$config['upload_path']          = './assets/file/'; //path folder
		$config['allowed_types'] = 'gif|jpg|png|pdf|rar|docx|xlsx|doc|xls|ppt|pptx|zip';
		$config['max_size']     = '2048';
		$config['max_width'] = '0';
		$config['max_height'] = '0';
		$this->upload->initialize($config);

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('file_unduh')){
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('profil', $error);
		}else{
			$gbr = $this->upload->data();
			$data = array(
									'file_unduh' =>$gbr['file_name'],
									'judul_unduh'=>$this->input->post('judul_unduh'),
									'keterangan'=>$this->input->post('keterangan'),
									'jenis'=>$this->input->post('jenis')
								);

				$this->unduh_model->tambah_proses($data); //passing variable $data ke products_model

				$this->session->set_flashdata('message', '1');
				redirect('unduh/'.$this->input->post('jenis')); //redirect page ke halaman utama controller products
			}
	}

	public function hapus_proses($unduh_id,$jenis)
	{
				$this->unduh_model->hapus_proses($unduh_id); //passing variable $data ke products_model

				$this->session->set_flashdata('message', 'hapus');
				redirect('unduh/'.$jenis); //redirect page ke halaman utama controller products
	}

	public function edit_unduh($unduh_id){
		$this->load->view('header.php');
		$this->load->view('top.php');
		$this->load->view('left.php');
		$data['unduh'] = $this->unduh_model->edit_unduh($unduh_id); //berisi dari return value pada function getAllProducts() di file models/products_model.php
		$this->load->view('edit_unduh.php',$data);
		$this->load->view('bawah.php');
	}

	public function editunduh_proses()
	{
		$data = array(
								'file_unduh' =>$gbr['file_name'],
								'judul_unduh'=>$this->input->post('judul_unduh'),
								'keterangan'=>$this->input->post('keterangan'),
								'jenis'=>$this->input->post('jenis')
							);

		$unduh_id=$this->input->post('unduh_id');
		$this->unduh_model->editunduh_proses($data,$unduh_id); //passing variable $data ke products_model

		$this->session->set_flashdata('message', 'edit');
		redirect('unduh/'.$this->input->post('jenis')); //redirect page ke halaman utama controller products
	}

	public function edifile_proses()
	{
		$this->load->library('upload');
		$config['upload_path']          = './assets/file/'; //path folder
		$config['allowed_types'] = 'gif|jpg|png|pdf|rar|docx|xlsx|doc|xls|ppt|pptx|zip';
		$config['max_size']     = '2048';
		$config['max_width'] = '0';
		$config['max_height'] = '0';
		$this->upload->initialize($config);

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('file_unduh')){
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('profil', $error);
		}else{
			$gbr = $this->upload->data();
			$data = array(
									'file_unduh' =>$gbr['file_name'],
								);

							}
		$unduh_id=$this->input->post('unduh_id');
		$this->unduh_model->editunduh_proses($data,$unduh_id); //passing variable $data ke products_model

		$this->session->set_flashdata('message', 'edit');
		//redirect('unduh/'.$this->input->post('jenis')); //redirect page ke halaman utama controller products
	}



	/*
	public function edit_profil()
	{
		$this->load->view('header.php');
		$this->load->view('top.php');
		$this->load->view('left.php');
		 $data['profil'] = $this->profil_model->edit();
		$this->load->view('edit_profil.php',$data);
	}

	public function update_foto()
	{

		$this->load->library('upload');
		$config['upload_path']          = './assets/gambar/'; //path folder
		$config['allowed_types']        = 'gif|jpg|png|jpeg|bmp';
		$config['max_size']             = 2048;
		$config['max_width']            = 1024;
		$config['max_height']           = 768;
		$config['file_name']						= $nmfile; //nama yang terupload nantinya - See more at: http://fabernainggolan.net/upload-image-rename-codeigniter-dan-menyimpan-ke-database#sthash.6jwDptdx.dpuf
		$this->upload->initialize($config);

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('foto_ketua')){
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('profil', $error);
		}else{
			$gbr = $this->upload->data();
			$data = array('foto_ketua' =>$gbr['file_name']);
				$condition['profil_id'] = $this->input->post('profil_id'); //Digunakan untuk melakukan validasi terhadap produk mana yang akan diupdate nantinya

				$this->profil_model->editprofil_proses($data, $condition); //passing variable $data ke products_model

				$this->session->set_flashdata('message', '1');
				redirect('profil'); //redirect page ke halaman utama controller products
		}

	}

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
