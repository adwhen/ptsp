<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengaduan extends CI_Controller {
	public function index()
	{
		$data=array(
			'isi'=>'frontend/page/pengaduan'
		);
		$this->load->view('frontend/snippet/template',$data);
	}
}
