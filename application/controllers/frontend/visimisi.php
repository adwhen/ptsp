<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Visimisi extends CI_Controller {
	public function index()
	{
		$data=array(
			'isi'=>'frontend/page/visimisi',
			'visi' =>$this->db->get_where('tb_visimisi',array('ket_visimisi'=>'visi'))->result_array(),
			'misi' =>$this->db->get_where('tb_visimisi',array('ket_visimisi'=>'misi'))->result_array()
		);
		$this->load->view('frontend/snippet/template',$data);
	}
}
