<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku extends CI_Controller
{

	public function __construct()
	{
		parent::__construct ();
		$this->load->model('Buku_Model');
		$this->load->model('Kategori_Model');
		$this->load->model('Anggota_Model');
	}

	public function index()
	{
		$data = 
		[
			'title' =>'Buku',
			'sub_title' =>'Lihat Buku',
			'content' =>'buku/index',
			'show' =>$this->Buku_Model->index()->result()
		];
		$this->load->view('template/my_template', $data);
	}

	public function add()
	{
		$data = 
		[
			'title' =>'Buku',
			'sub_title' =>'Tambah Buku',
			'content' =>'buku/add',
			'show_kategori' =>$this->Kategori_Model->index()->result()
		];
		$this->load->view('template/my_template', $data);
	}

	public function create()
	{
		$judul_buku			= $this->input->post('judul_buku');
		$id_kategori		= $this->input->post('id_kategori');
		$pengarang			= $this->input->post('pengarang');
		$tahun_terbit		= $this->input->post('tahun_terbit');
		$penerbit			= $this->input->post('penerbit');
		$isbn				= $this->input->post('isbn');
		$jumlah_buku		= $this->input->post('jumlah_buku');
		$lokasi				= $this->input->post('lokasi');

		$data = array (
					'judul_buku' 	=> $judul_buku,
					'id_kategori' 	=> $id_kategori,
					'pengarang' 	=> $pengarang,
					'tahun_terbit' 	=> $tahun_terbit,
					'penerbit' 		=> $penerbit,
					'isbn' 			=> $isbn,
					'jumlah_buku'	=> $jumlah_buku,
					'lokasi' 		=> $lokasi
		);

		$create = $this->Buku_Model->create($data);
		if($create) {
			$this->session->set_flashdata('pesan_create',true);
			redirect('buku');
		} else {
			$this->session->set_flashdata('pesan_create',false);
			redirect('buku');
		}
	}
}
?>