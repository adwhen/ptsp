<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agenda extends CI_Controller {
	 function __construct()
	{
		 parent::__construct();
	         $this->Mlog->log();
		 	error_reporting(0);
	}
	public function index()
	{	
		$jlh = $this->db->get_where('tb_berita',array('kat_berita'=>'agenda'));
		$config = pagination($jlh,'/frontend/agenda/index/',5);
		$this->pagination->initialize($config);
		$from = $this->uri->segment(4);
		$this->db->order_by('id_berita', 'DESC');
		$this->db->order_by('tgl_update', 'DESC');
		$query=$this->db->get_where('tb_berita',array('kat_berita'=>'agenda'),$config['per_page'],$from)->result_array();
		$data=array(
			'isi'=>'frontend/page/agenda',
			'data' => $query
		);
		$this->load->view('frontend/snippet/template',$data);
	}
	public function agendaDetail($id)
	{
		$this->db->where('id_berita', $id);
		$data_berita = $this->db->get('tb_berita');
		$this->db->order_by('id_berita', 'DESC');
		$this->db->order_by('tgl_update', 'DESC');
		$terkait=$this->db->limit(3)->get_where('tb_berita', array('kat_berita' => $data_berita->row()->kat_berita))->result_array();
		$data=array(
			'isi'=>'frontend/page/agendaDetail',
			'data' => $data_berita->result_array(),
			'terkait' =>$terkait
		);
		$this->load->view('frontend/snippet/template',$data);
	}
}
