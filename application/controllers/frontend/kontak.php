<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller {
	 function __construct()
	{
		 parent::__construct();
	         $this->Mlog->log();
		 	error_reporting(0);
	}
	public function index()
	{
		$data=array(
			'isi'=>'frontend/page/kontak'
		);
		$this->load->view('frontend/snippet/template_kontak',$data);
	}
}
