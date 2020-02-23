<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller {
	public function index()
	{
		$data=array(
			'isi'=>'frontend/page/kontak'
		);
		$this->load->view('frontend/snippet/template_kontak',$data);
	}
}
