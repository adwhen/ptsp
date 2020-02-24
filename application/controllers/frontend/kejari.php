<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kejari extends CI_Controller {
	public function index()
	{
		$data=array(
			'isi'=>'frontend/page/kejari',
			'data' =>$this->db->get('tb_kejari')->result_array()
		);
		$this->load->view('frontend/snippet/template',$data);
	}
}
