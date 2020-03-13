<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		error_reporting(0);
		$jlh = $this->db->get('tb_berita');
		$config = pagination($jlh,'/frontend/berita/index/',9);
		$this->db->join('tb_file', 'ket_file=id_struktural');
		$this->db->order_by('id_struktural', 'ASC');
		$struktural = $this->db->get('tb_struktural');
		$this->db->order_by('id_berita', 'DESC');
		$this->db->order_by('tgl_update', 'DESC');
		$beritautama=$this->db->limit(3)->get('tb_berita')->result_array();
		$this->db->order_by('id_berita', 'DESC');
		$this->db->order_by('tgl_update', 'DESC');
		$beritasmpng=$this->db->limit(4)->get('tb_berita')->result_array();
		$data=array(
			'isi'=>'frontend/beranda',
			'perintah' => $this->db->get('tb_perintah')->result_array(),
			'fotojaksa' => $this->db->get_where('tb_file',array('kat_file' => 'jaksa_agung'))->result_array(),
			'struktural' => $struktural->result_array(),
			'beritautama' => $beritautama,
			'beritasmpng' => $beritasmpng,
			'agenda1' => $this->db->limit(4)->get_where('tb_berita',array('kat_berita'=>'agenda'))->result_array(),
			'agenda2' => $this->db->limit(4,4)->get_where('tb_berita',array('kat_berita'=>'agenda'))->result_array(),
			'beritazi' => $this->db->limit(9)->get_where('tb_berita',array('kat_berita' => 'zi'))->result_array(),
			'pengumuman' =>$this->db->get('tb_pengumuman')->result_array(),
			'fotoberanda' =>$this->db->get_where('tb_file',array('kat_file'=>'beranda'))->result_array()
		);
		$this->load->view('frontend/snippet/template_home',$data);
	}
	public function coba()
	{
		echo 1;
	}
}