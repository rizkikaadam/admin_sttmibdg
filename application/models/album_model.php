<?php
//File products_model.php

class album_model extends CI_Model
{

	function __construct()
	{
		parent::__construct();
	}

	function tampil_album()
	{
		//select semua data yang ada pada table album
		$this->db->select("*");
		$this->db->from("tbl_album");

		return $this->db->get();
	}

	function tambahalbum_proses($data)
	{
		$this->db->insert('tbl_album', $data);
	}

	function lihat_foto($album_id)
	{
		$this->db->where('album_id', $album_id); //Akan melakukan select terhadap row yang memiliki productId sesuai dengan productId yang telah dipilih
    $this->db->select("*");
    $this->db->from("tbl_foto");

		return $this->db->get();
	}

	function tambahfoto_proses($data)
	{
		$this->db->insert('tbl_foto', $data);
	}

	function hapusalbum_proses($album_id)
	{
		//delete produk berdasarkan id
    $this->db->where('album_id', $album_id);
    $this->db->delete('tbl_album');
	}

	function hapusfoto_proses($foto_id)
	{
		//delete produk berdasarkan id
    $this->db->where('foto_id', $foto_id);
    $this->db->delete('tbl_foto');
	}
}
