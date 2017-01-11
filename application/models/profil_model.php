<?php
//File products_model.php

class profil_model extends CI_Model
{

	function __construct()
	{
		parent::__construct();
	}

	function tampil_profil()
	{
		//select semua data yang ada pada table profil
		$this->db->select("*");
		$this->db->from("tbl_profil");

		return $this->db->get();
	}

	function edit()
	{
		$this->db->where('profil_id', 1); //Akan melakukan select terhadap row yang memiliki productId sesuai dengan productId yang telah dipilih
    $this->db->select("*");
    $this->db->from("tbl_profil");

		return $this->db->get();
	}

	function editprofil_proses($data, $condition)
	{
		//update produk
    $this->db->where($condition); //Hanya akan melakukan update sesuai dengan condition yang sudah ditentukan
    $this->db->update('tbl_profil', $data); //Melakukan update terhadap table msProduct sesuai dengan data yang telah diterima dari controller
	}

	function deleteProduct($id)
	{
		//delete produk berdasarkan id
	}
}
