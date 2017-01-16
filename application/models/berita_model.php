<?php
//File products_model.php

class berita_model extends CI_Model
{

	function __construct()
	{
		parent::__construct();
	}

	function tampil_berita()
	{
		//select semua data yang ada pada table berita
		$this->db->select("*");
		$this->db->from("tbl_berita");

		return $this->db->get();
	}

	function tambahberita_proses($data)
	{
		$this->db->insert('tbl_berita', $data);
	}

	function lihat_foto($berita_id)
	{
		$this->db->where('berita_id', $berita_id); //Akan melakukan select terhadap row yang memiliki productId sesuai dengan productId yang telah dipilih
    $this->db->select("*");
    $this->db->from("tbl_foto");

		return $this->db->get();
	}

	function tambahfoto_proses($data)
	{
		$this->db->insert('tbl_foto', $data);
	}

	function hapusberita_proses($berita_id)
	{
		//delete produk berdasarkan id
    $this->db->where('berita_id', $berita_id);
    $this->db->delete('tbl_berita');
	}

	function hapusfoto_proses($foto_id)
	{
		//delete produk berdasarkan id
    $this->db->where('foto_id', $foto_id);
    $this->db->delete('tbl_foto');
	}
}
