<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sarana extends CI_Controller {
	public function index()
	{
		$data_file = $this->db->get_where('tb_file',array('kat_file' => 'sarana'));
		$data=array(
			'isi'=>'frontend/page/sarana',
			'data' => $data_file->result_array()
		);
		$this->load->view('frontend/snippet/template',$data);
	}
}
