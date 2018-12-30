<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku_Model extends CI_Model
{
	public function index()
	{
		$this->db->select('*');
		$this->db->from('buku');
		$this->db->join('kategori','buku.id_kategori = kategori.id_kategori');
		$this->db->order_by('buku.id_buku');
		return $this->db->get();
	}

	public function create($data)
	{
		if($this->db->insert('buku', $data)){
			return true;
		} else {
			return false;
		}
	}
}
?>