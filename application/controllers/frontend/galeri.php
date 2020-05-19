<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri extends CI_Controller {
	 function __construct()
	{
		 parent::__construct();
	         $this->Mlog->log();
		 	error_reporting(0);
	}
	public function index()
	{
		$jlh = $this->db->get_where('tb_file',array('kat_file' => 'galeri'));
		$config = pagination($jlh,'/frontend/galeri/index/',9);
		$this->pagination->initialize($config);
		$from = $this->uri->segment(4);
		$data=array(
			'isi'=>'frontend/page/galeri',
			'data' => $this->db->get_where('tb_file',array('kat_file' => 'galeri'),$config['per_page'],$from)->result_array()
		);
		$this->load->view('frontend/snippet/template',$data);
	}
}
