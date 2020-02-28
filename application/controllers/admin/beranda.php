<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {
	function __construct()
	{
		 parent::__construct();
	         if($this->session->userdata('logged_in')!=TRUE){
	            redirect('welcome');
	         }
		 	error_reporting(0);
	}
	public function index()
	{
		$this->db->like('url_file','pdf');
		$pdf=$this->db->get('tb_file')->result_array();
		$this->db->not_like('url_file','pdf');
		$galeri=$this->db->get('tb_file')->result_array();
		$survey=$this->db->get('tb_survey')->result_array();
		$data=array(
			'isi'=>'admin/beranda',
			'berita'=> count($this->db->get('tb_berita')->result_array()),
			'pdf'=>count($pdf),
			'galeri' =>count($galeri),
			'survey' =>count($survey),
			'pengumuman' =>$this->db->get('tb_pengumuman')->result_array()
		);
		$this->load->view('admin/snippet/template',$data);
	}
	public function tambah(){
		$id_p=$this->Mcrypt->decrypt($this->input->post('id_pengumuman'));
		$check=$this->db->get_where('tb_pengumuman',array('id_pengumuman'=>$id_p))->result_array();
		if(count($check)==0){
			$simpan=array(
				'id_pengumuman'=>1,
				'isi_pengumuman' =>$this->input->post('isi_pengumuman')
			);
			$this->db->insert('tb_pengumuman',$simpan);
		}else{
			$simpan=array(
				'isi_pengumuman' =>$this->input->post('isi_pengumuman')
			);
			$this->db->update('tb_pengumuman',$simpan,array('id_pengumuman'=>$id_p));
		}
			$res=$this->db->get('tb_pengumuman')->result_array();
		$data=array(
				'pesan' => "Pengumuman Berhasil Di Ubah!!",
				'hasil' => $res[0]['isi_pengumuman']
			);
		echo json_encode($data);
	}
}
