<?php
//File products_model.php

class info_model extends CI_Model
{

	function __construct()
	{
		parent::__construct();
	}

	function tampil_info()
	{
    $this->db->select("*");
    $this->db->from("tbl_info");

		return $this->db->get();
	}

	function tambah_proses($data)
	{
		$this->db->insert('tbl_info', $data);
	}

	function hapus_info($info_id)
	{
		//delete produk berdasarkan id
    $this->db->where('info_id', $info_id);
    $this->db->delete('tbl_info');
	}

	function edit_info($info_id){
		//select semua data yang ada pada table pengajar
		$this->db->where('info_id', $info_id); //Akan melakukan select terhadap row yang memiliki productId sesuai dengan productId yang telah dipilih
    $this->db->select("*");
    $this->db->from("tbl_info");
		return $this->db->get();
	}

	function editinfo_proses($data, $info_id)
	{
		//update produk
    $this->db->where('info_id', $info_id);
    $this->db->update('tbl_info', $data); //Melakukan update terhadap table msProduct sesuai dengan data yang telah diterima dari controller
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
