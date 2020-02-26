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
			'survey' =>count($survey)
		);
		$this->load->view('admin/snippet/template',$data);
	}
}
