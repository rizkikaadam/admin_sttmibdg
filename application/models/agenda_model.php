<?php
//File products_model.php

class agenda_model extends CI_Model
{

	function __construct()
	{
		parent::__construct();
	}

	function tampil_agenda()
	{
    $this->db->select("*");
    $this->db->from("tbl_agenda");

		return $this->db->get();
	}

	function tambah_proses($data)
	{
		$this->db->insert('tbl_agenda', $data);
	}

	function hapus_proses($agenda_id)
	{
		//delete produk berdasarkan id
    $this->db->where('agenda_id', $agenda_id);
    $this->db->delete('tbl_agenda');
	}

	function edit_agenda($agenda_id){
		//select semua data yang ada pada table pengajar
		$this->db->where('agenda_id', $agenda_id); //Akan melakukan select terhadap row yang memiliki productId sesuai dengan productId yang telah dipilih
    $this->db->select("*");
    $this->db->from("tbl_agenda");
		return $this->db->get();
	}

	function editagenda_proses($data, $agenda_id)
	{
		//update produk
    $this->db->where('agenda_id', $agenda_id);
    $this->db->update('tbl_agenda', $data); //Melakukan update terhadap table msProduct sesuai dengan data yang telah diterima dari controller
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
