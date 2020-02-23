<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peraturan extends CI_Controller {
	public function index()
	{
		$data=array(
			'isi'=>'frontend/page/peraturan',
			'data' =>$this->db->get('tb_peraturan')->result_array()
		);
		$this->load->view('frontend/snippet/template',$data);
	}
}
