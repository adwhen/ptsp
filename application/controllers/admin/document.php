<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Document extends CI_Controller {

	function __construct()
    {
         parent::__construct();
             if($this->session->userdata('logged_in')!=TRUE){
                redirect('welcome');
             }
            error_reporting(0);
    }

	public function index()
	{      
        $query=$this->db->query('SELECT * from tb_file where url_file like "%.pdf%"')->result_array();
        $data=array(
			'data' => $query
		);
		$this->load->view('admin/document/data',$data);
	}
	public function tambah(){
		$nmfile=$this->input->post('nama_file').time();
        $config['upload_path']          = 'asset/file/';
        $config['allowed_types']        = 'docx|pdf|xlsx';
        $config['max_size']             = 1048576;
        $config['max_width']            = 10240;
        $config['max_height']           = 7680;
        $config['file_name']            = $nmfile;

        $this->load->library('upload', $config);
        if($this->upload->do_upload('file')){
            $basePath=base_url('asset/file/'.$this->upload->file_name);
            $data = array(
                    'message'   => 'Data Berhasil Di Tambahkan',
                    'image'         => $basePath,
            );

            $simpan = array(
            	'url_file'  => $basePath,
            	'nama_file' => $this->input->post('nama_file'),
            	'kat_file'  => $this->input->post('kat_file'),
            );

            $this->db->insert('tb_file',$simpan); 
            echo json_encode($data);  
        }else{
            $data = array(
                'error' => "error"
                );

            echo json_encode($data);
        }
        redirect('admin/document');
	}
	public function ubah(){
		$nmfile=$this->input->post('nama_file').time();
        $config['upload_path']          = 'asset/gambar/foto/';
        $config['allowed_types']        = 'docx|pdf|xlsx';
        $config['max_size']             = 1048576;
        $config['max_width']            = 10240;
        $config['max_height']           = 7680;
        $config['file_name']            = $nmfile;

        $this->load->library('upload', $config);
        if($this->upload->do_upload('file')){
            $basePath=base_url('asset/gambar/foto/'.$this->upload->file_name);
            

            $simpan = array(
            	'url_file'  => $basePath,
            	'nama_file' => $this->input->post('nama_file'),
            	'kat_file'  => $this->input->post('kat_file'),
            );

            $this->db->insert('tb_file',$simpan);

            $baris=$this->Mgaleri->ajaxtampil();

            $data = array(
                    'message'   => 'Data Berhasil Di Tambahkan',
                    'image'         => $basePath,
                    'baris'		=> $baris
            );
            echo json_encode($data);  
        }else{
        	$decode['id_file'] = $this->encryption->decrypt($this->input->post('id_file'));
             $simpan = array(
            	'nama_file' => $this->input->post('nama_file'),
            	'kat_file'  => $this->input->post('kat_file'),
            );

            $this->db->update('tb_file',$simpan,$decode);

            $baris=$this->Mgaleri->ajaxtampil();

            $data = array(
                    'message'   => 'Data Berhasil Di Ubah',
                    'baris'	=> $baris
            );
            echo json_encode($data);
        }

	}

	public function hapus(){
		echo $decode['id_file'] = $this->encryption->decrypt($this->input->post('id_file'));
		$this->db->delete('tb_file',$decode);
		$data= array(
			'message' => 'Data Berhasil di Hapus',
			'baris'	  => $galeri
		);
        redirect('admin/document');
	}
}
