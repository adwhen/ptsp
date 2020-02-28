<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peraturan extends CI_Controller {
	public function index()
	{
		$data=array(
			'isi'=>'frontend/page/peraturan',
			'uu' =>$this->db->get_where('tb_peraturan',array('kat_peraturan' => 'Undang-undang'))->result_array(),
			'pp' =>$this->db->get_where('tb_peraturan',array('kat_peraturan' => 'Peraturan Pemerintah'))->result_array(),
			'kepres' =>$this->db->get_where('tb_peraturan',array('kat_peraturan' => 'Keputusan Presiden'))->result_array(),
			'inpres' =>$this->db->get_where('tb_peraturan',array('kat_peraturan' => 'Instruksi Presiden'))->result_array(),
			'kepmpan' =>$this->db->get_where('tb_peraturan',array('kat_peraturan' => 'Keputusan Menteri Pemberdayaan Aparatur Negara'))->result_array(),
			'kepja' =>$this->db->get_where('tb_peraturan',array('kat_peraturan' => 'Keputusan Jaksa Agung'))->result_array(),
			'insja' =>$this->db->get_where('tb_peraturan',array('kat_peraturan' => 'Instruksi Jaksa Agung'))->result_array(),
			'lain' =>$this->db->get_where('tb_peraturan',array('kat_peraturan' => 'Peraturan Lainnya'))->result_array(),
		);
		$this->load->view('frontend/snippet/template',$data);
	}
}
