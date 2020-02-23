<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Informasi extends CI_Controller {
	public function index($jenis)
	{
        $data_file = $this->db->get_where('tb_file',array('kat_file' =>  $jenis));
        $jenis = jenisInformasi($jenis);
		$data=array(
            'jenis' => $jenis,
			'isi'=>'frontend/page/informasi',
			'data' => $data_file->result_array()
		);
		$this->load->view('frontend/snippet/template',$data);
	}
}
