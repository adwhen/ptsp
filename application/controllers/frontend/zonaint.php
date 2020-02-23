<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Zonaint extends CI_Controller {
	public function index()
	{
		$data=array(
			'isi'=>'frontend/page/zonaint',
			'data' =>$this->db->get_where('tb_berita',array('kat_berita'=>'zi'))->result_array()
		);
		$this->load->view('frontend/snippet/template',$data);
	}
}
