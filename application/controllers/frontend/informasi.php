<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Informasi extends CI_Controller {
	public function index($jenis)
	{
		$specs = jenisInformasi($jenis);
		$jlh = $this->db->get_where('tb_berita',array('kat_berita'=>$specs['jenis']));
		$config = pagination($jlh,'/frontend/info/index/',5);
		$this->pagination->initialize($config);
		$from = $this->uri->segment(4);
		$this->db->order_by('id_berita', 'DESC');
		$this->db->order_by('tgl_update', 'DESC');
		$query=$this->db->get_where('tb_berita',array('kat_berita'=>$specs['jenis']),$config['per_page'],$from)->result_array();
		$data=array(
			'isi'=>'frontend/page/info',
			'judul' =>$specs['jenis'],
			'data' => $query
		);
		$this->load->view('frontend/snippet/template',$data);
	}
	public function informasiDetail($id)
	{
		$this->db->where('id_berita', $id);
		$data_berita = $this->db->get('tb_berita');
		$this->db->order_by('id_berita', 'DESC');
		$this->db->order_by('tgl_update', 'DESC');
		$terkait=$this->db->limit(3)->get_where('tb_berita', array('kat_berita' => $data_berita->row()->kat_berita))->result_array();
		$data=array(
			'isi'=>'frontend/page/infoDetail',
			'judul' => $data_berita->row()->kat_berita,
			'data' => $data_berita->result_array(),
			'terkait' => $terkait
		);
		$this->load->view('frontend/snippet/template',$data);
	}
}
