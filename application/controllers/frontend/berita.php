<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {
	public function index()
	{
		$data=array(
			'isi'=>'frontend/page/berita',
			'data' =>$this->db->get('tb_berita')->result_array()
		);
		$this->load->view('frontend/snippet/template',$data);
	}
	public function beritaDetail($id)
	{	
		$this->db->where('id_berita', $id);
		$data_berita = $this->db->get('tb_berita');
		$data=array(
			'isi'=>'frontend/page/beritaDetail',
			'data' => $data_berita->result_array(),
			'terkait' => $this->db->limit(3)->get_where('tb_berita', array('kat_berita' => $data_berita->row()->kat_berita))->result_array()
		);
		$this->load->view('frontend/snippet/template',$data);
	}
}
