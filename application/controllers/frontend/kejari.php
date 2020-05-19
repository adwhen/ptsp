<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kejari extends CI_Controller {
	 function __construct()
	{
		 parent::__construct();
	         $this->Mlog->log();
		 	error_reporting(0);
	}
	public function index()
	{
		$data=array(
			'isi'=>'frontend/page/kejari',
			'data' =>$this->db->get('tb_kejari')->result_array()
		);
		$this->load->view('frontend/snippet/template',$data);
	}
}
