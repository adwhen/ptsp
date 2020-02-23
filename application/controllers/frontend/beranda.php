<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {
	public function index()
	{
		$data=array(
			'isi'=>'frontend/beranda'
		);
		$this->load->view('frontend/snippet/template_home',$data);
	}
}
