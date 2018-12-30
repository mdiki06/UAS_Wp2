<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anggota_Model extends CI_Model
{
	public function index()
	{
		return $this->db->get('anggota');
	}

	public function create($data)
	{
		if($this->db->insert('anggota', $data)){
			return true;
		} else {
			return false;
		}
	}
}
?>