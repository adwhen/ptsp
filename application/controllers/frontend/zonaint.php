<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Zonaint extends CI_Controller {
	 function __construct()
	{
		 parent::__construct();
	         $this->Mlog->log();
		 	error_reporting(0);
	}
	public function index()
	{
		$jlh = $this->db->get_where('tb_berita',array('kat_berita'=>'zi'));
		$config = pagination($jlh,'/frontend/zonaint/index/',6);
		$this->pagination->initialize($config);
		$from = $this->uri->segment(4);
		$data=array(
			'isi'=>'frontend/page/zonaint',
			'data' =>$this->db->get_where('tb_berita',array('kat_berita'=>'zi'),$config['per_page'],$from)->result_array()
		);
		$this->load->view('frontend/snippet/template',$data);
	}
}
