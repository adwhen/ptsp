<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {
	public function index()
	{
		$data=array(
			'isi'=>'admin/beranda'
		);
		$this->load->view('admin/snippet/template',$data);
	}
}
