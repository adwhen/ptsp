<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peraturan extends CI_Controller {
	public function index()
	{
		$data=array(
			'isi'=>'frontend/page/peraturan',
			'uu' =>$this->db->get_where('tb_peraturan',array('kat_peraturan' => 'uu'))->result_array(),
			'pp' =>$this->db->get_where('tb_peraturan',array('kat_peraturan' => 'pp'))->result_array(),
			'kepres' =>$this->db->get_where('tb_peraturan',array('kat_peraturan' => 'kepres'))->result_array(),
			'inpres' =>$this->db->get_where('tb_peraturan',array('kat_peraturan' => 'inpres'))->result_array(),
			'kepmpan' =>$this->db->get_where('tb_peraturan',array('kat_peraturan' => 'kepmpan'))->result_array(),
			'kepja' =>$this->db->get_where('tb_peraturan',array('kat_peraturan' => 'kepja'))->result_array(),
			'insja' =>$this->db->get_where('tb_peraturan',array('kat_peraturan' => 'insja'))->result_array(),
			'lain' =>$this->db->get_where('tb_peraturan',array('kat_peraturan' => 'lain'))->result_array(),
		);
		$this->load->view('frontend/snippet/template',$data);
	}
}
