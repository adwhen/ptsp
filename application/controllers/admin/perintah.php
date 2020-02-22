<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Perintah extends CI_Controller {

	function __construct()
	{
		 parent::__construct();
	        //  if($this->session->userdata('login')==0){
	        //     redirect('welcome');
	        //  }elseif($this->session->userdata('login')==2){
	        //     redirect('users');
	        // }
		 	error_reporting(0);
	}

	public function index()
	{     
        $perintah=$this->db->get('tb_perintah')->result_array();
        $this->form_validation->set_rules('nama_perintah','nama perintah','required');
        $this->form_validation->set_rules('nama_jaksa','nama jaksa','required');
        $this->form_validation->set_rules('isi_perintah','isi perintah','required');
        if($this->form_validation->run()===false){
            $data=array(
                'data'=>$perintah,
                'foto'=>$this->db->get_where('tb_file',array('kat_file'=>'jaksa_agung'))->result_array()
            );
            $this->load->view('admin/perintah/index',$data);
        }else{
            $simpan=array(
                'nama_perintah'=>$this->input->post('nama_perintah'),
                'nama_jaksa'=>$this->input->post('nama_jaksa'),
                'isi_perintah'=>$this->input->post('isi_perintah'),
            );
            if(count($perintah)==0){
                $this->db->insert('tb_perintah',$simpan);
            }else{
                $this->db->update('tb_perintah',$simpan,array('id_perintah'=>$perintah[0]['id_perintah']));
            }
            $nmfile="foto_berita".time();
            $config['upload_path']          = 'asset/gambar/foto/';
            $config['allowed_types']        = 'jpg|jpeg|png';
            $config['max_size']             = 1048576;
            $config['max_width']            = 10240;
            $config['max_height']           = 7680;
            $config['file_name']            = $nmfile;

            $this->load->library('upload', $config);
            if($this->upload->do_upload('file')){
                $basePath=base_url('asset/gambar/foto/'.$this->upload->file_name);
                $foto=array(
                    'nama_file' => $this->upload->file_name,
                    'url_file'  =>$basePath,
                    'kat_file'  =>"jaksa_agung"
                );
                $check=$this->db->get_where('tb_file',array('kat_file'=>'jaksa_agung'))->result_array();
                if(count($check)==0){
                    $this->db->insert('tb_file',$foto);
                }else{
                    $this->db->update('tb_file',$foto,array('kat_file'=>"jaksa_agung"));
                }
            }else{
                #notice gagal upload
            }
            redirect('admin/perintah');
        }
	}
}
