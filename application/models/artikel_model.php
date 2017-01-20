<?php
//File products_model.php

class artikel_model extends CI_Model
{

	function __construct()
	{
		parent::__construct();
	}

	function tampil_artikel()
	{
		//select semua data yang ada pada table artikel
		$this->db->select("*");
		$this->db->from("tbl_artikel");

		return $this->db->get();
	}

	function tambahartikel_proses($data)
	{
		$this->db->insert('tbl_artikel', $data);
	}

	function edit_artikel($artikel_id)
	{
		$this->db->where('artikel_id', $artikel_id); //Akan melakukan select terhadap row yang memiliki productId sesuai dengan productId yang telah dipilih
    $this->db->select("*");
    $this->db->from("tbl_artikel");

		return $this->db->get();
	}

	function editartikel_proses($data,$artikel_id)
	{
		$this->db->where('artikel_id', $artikel_id);
    $this->db->update('tbl_artikel', $data);
	}

	function tambahfoto_proses($data)
	{
		$this->db->insert('tbl_foto', $data);
	}

	function hapusartikel_proses($artikel_id)
	{
		//delete produk berdasarkan id
    $this->db->where('artikel_id', $artikel_id);
    $this->db->delete('tbl_artikel');
	}

	function hapusfoto_proses($foto_id)
	{
		//delete produk berdasarkan id
    $this->db->where('foto_id', $foto_id);
    $this->db->delete('tbl_foto');
	}
}
