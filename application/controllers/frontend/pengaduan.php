<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengaduan extends CI_Controller {
	 function __construct()
	{
		 parent::__construct();
	         $this->Mlog->log();
		 	error_reporting(0);
	}
	public function index()
	{
		$data=array(
			'isi'=>'frontend/page/pengaduan'
		);
		$this->load->view('frontend/snippet/template',$data);
	}

	public function tambah()
	{
		$nmfile=$this->input->post('file').time();
        $config['upload_path']          = 'asset/file/';
        $config['allowed_types']        = 'pdf|doc|docx';
        $config['max_size']             = 1048576;
        $config['max_width']            = 10240;
        $config['max_height']           = 7680;
        $config['file_name']            = $nmfile;

        $this->load->library('upload', $config);
        if($this->upload->do_upload('file')){
            $basePath=base_url('asset/file/'.$this->upload->file_name);
			$data=array(
				'nama_pengaduan'=>$this->input->post('nama'),
				'nik_ktp' => $this->input->post('nik_ktp'),
				'surel_pengaduan'=>$this->input->post('surel'),
				'notelp_pengaduan'=>$this->input->post('notelp'),
				'subjek_pengaduan'=>$this->input->post('subjek'),
				'ktg_pengaduan'=>$this->input->post('kategori'),
				'pesan_pengaduan'=>$this->input->post('pesan'),
				'url_file'=>$basePath
			);
			$this->db->insert('tb_pengaduan',$data);
			$this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Pengaduan anda berhasil ditambahkan <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
			redirect('frontend/pengaduan');
		}
	}
}
