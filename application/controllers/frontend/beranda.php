<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {
	public function index()
	{
		$jlh = $this->db->get('tb_berita');
		$config = pagination($jlh,'/frontend/berita/index/',9);
		$this->db->join('tb_file', 'ket_file=id_struktural');
		$struktural = $this->db->get('tb_struktural');
		$data=array(
			'isi'=>'frontend/beranda',
			'perintah' => $this->db->get('tb_perintah')->result_array(),
			'fotojaksa' => $this->db->get_where('tb_file',array('kat_file' => 'jaksa_agung'))->result_array(),
			'struktural' => $struktural->result_array(),
			'beritautama' => $this->db->limit(3)->get('tb_berita')->result_array(),
			'beritasmpng' => $this->db->limit(4)->get('tb_berita')->result_array(),
			'agenda1' => $this->db->limit(4)->get_where('tb_berita',array('kat_berita'=>'agenda'))->result_array(),
			'agenda2' => $this->db->limit(4,4)->get_where('tb_berita',array('kat_berita'=>'agenda'))->result_array(),
			'beritazi' => $this->db->limit(9)->get_where('tb_berita',array('kat_berita' => 'zi'))->result_array()
		);
		$this->load->view('frontend/snippet/template_home',$data);
	}
	public function pencarian(){
		$keyword = $this->input->post('keyword');
		$data=array(
			'isi'=>'frontend/page/hasilcari',
			'keyword' => $keyword, 
			'result' => $this->Mberanda->search($keyword)
		);
		$this->load->view('frontend/snippet/template',$data);		
	}
}
