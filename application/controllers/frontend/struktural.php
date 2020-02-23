<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Struktural extends CI_Controller {
	public function index()
	{
		$data=array(
			'isi'=>'frontend/page/struktural'
		);
		$this->load->view('frontend/snippet/template',$data);
	}
}
