<?php
//File products_model.php

class pengajar_model extends CI_Model
{

	function __construct()
	{
		parent::__construct();
	}

	function tampil_pengajar()
	{
		//select semua data yang ada pada table pengajar
		$this->db->select("*");
		$this->db->from("tbl_dosen");

		return $this->db->get();
	}

	function edit()
	{
		$this->db->where('pengajar_id', 1); //Akan melakukan select terhadap row yang memiliki productId sesuai dengan productId yang telah dipilih
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
	}
}
