<?php
//File products_model.php

class unduh_model extends CI_Model
{

	function __construct()
	{
		parent::__construct();
	}

	function tampil_unduh($jenis)
	{
		//select semua data yang ada pada table pengajar
		$this->db->where('jenis', $jenis); //Akan melakukan select terhadap row yang memiliki productId sesuai dengan productId yang telah dipilih
    $this->db->select("*");
    $this->db->from("tbl_unduh");

		return $this->db->get();
	}

	function tambah_proses($data)
	{
		$this->db->insert('tbl_unduh', $data);
	}

	function hapus_proses($unduh_id)
	{
		//delete produk berdasarkan id
    $this->db->where('unduh_id', $unduh_id);
    $this->db->delete('tbl_unduh');
	}

	function edit_unduh($unduh_id){
		//select semua data yang ada pada table pengajar
		$this->db->where('unduh_id', $unduh_id); //Akan melakukan select terhadap row yang memiliki productId sesuai dengan productId yang telah dipilih
    $this->db->select("*");
    $this->db->from("tbl_unduh");
		return $this->db->get();
	}

	function editunduh_proses($data, $unduh_id)
	{
		//update produk
    $this->db->where('unduh_id', $unduh_id);
    $this->db->update('tbl_unduh', $data); //Melakukan update terhadap table msProduct sesuai dengan data yang telah diterima dari controller
	}
	/*
	function lihat_pengajar($dosen_id)
	{
		$this->db->where('dosen_id', $dosen_id); //Akan melakukan select terhadap row yang memiliki productId sesuai dengan productId yang telah dipilih
    $this->db->select("*");
    $this->db->from("tbl_dosen");

		return $this->db->get();
	}

	function editpengajar_proses($data, $condition)
	{
		//update produk
    $this->db->where($condition); //Hanya akan melakukan update sesuai dengan condition yang sudah ditentukan
    $this->db->update('tbl_dosen', $data); //Melakukan update terhadap table msProduct sesuai dengan data yang telah diterima dari controller
	}

	function deleteProduct($id)
	{
		//delete produk berdasarkan id
	}*/
}
