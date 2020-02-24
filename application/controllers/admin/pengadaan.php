<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pengadaan extends CI_Controller {

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
        $data=array(
			'isi'=>'admin/pengadaan/data',
			'data' => $this->db->get_where('tb_file',array('kat_file'=>'pengadaan'))->result_array()
		);
		$this->load->view('admin/snippet/template',$data);
	}
	public function tambah(){
		$nmfile=$this->input->post('nama_file').time();
        $config['upload_path']          = 'asset/gambar/foto/';
        $config['allowed_types']        = 'jpg|jpeg|png';
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
            	'tgl_file'	=> $this->input->post('tgl_file'),
            );

            $this->db->insert('tb_file',$simpan); 
            $data = array(
                    'message'   => 'Data Berhasil Di Tambahkan',
                    'image'         => $basePath,
                    'baris'     =>$this->Mgaleri->pengadaan()
            );
            echo json_encode($data);  
        }else{
            $data = array(
                'error' => "error",
                'baris'     =>$this->Mgaleri->pengadaan()
                );

            echo json_encode($data);
        }
	}
	public function ubah(){
		$nmfile=$this->input->post('nama_file').time();
        $config['upload_path']          = 'asset/gambar/foto/';
        $config['allowed_types']        = 'jpg|jpeg|png';
        $config['max_size']             = 1048576;
        $config['max_width']            = 10240;
        $config['max_height']           = 7680;
        $config['file_name']            = $nmfile;

        $this->load->library('upload', $config);
        $decode['id_file'] = $this->Mcrypt->decrypt($this->input->post('id_file'));
        if($this->upload->do_upload('file')){
                    if(!empty($this->input->post('id_file'))){
                        $basePath=base_url('asset/gambar/foto/'.$this->upload->file_name);
                        $simpan = array(
                            'url_file'  => $basePath,
                            'nama_file' => $this->input->post('nama_file'),
                            'kat_file'  => $this->input->post('kat_file'),
                            'tgl_file'  => $this->input->post('tgl_file'),
                        );

                            $this->db->update('tb_file',$simpan,$decode);

                            $baris=$this->Mgaleri->pengadaan();

                            $data = array(
                                    'message'   => 'Data Berhasil Di Ubah',
                                    'baris' => $baris
                            );
                            echo json_encode($data);
                    }else{
                        $basePath=base_url('asset/gambar/foto/'.$this->upload->file_name);
                        $simpan = array(
                            'url_file'  => $basePath,
                            'nama_file' => $this->input->post('nama_file'),
                            'kat_file'  => $this->input->post('kat_file'),
                            'tgl_file'  => $this->input->post('tgl_file'),
                        );

                        $this->db->insert('tb_file',$simpan);

                        $baris=$this->Mgaleri->pengadaan();

                        $data = array(
                                'message'   => 'Data Berhasil Di Tambahkan',
                                'image'         => $basePath,
                                'baris'     => $baris
                        );
                        echo json_encode($data);
                    }  
        }else{
        	
             $simpan = array(
            	'nama_file' => $this->input->post('nama_file'),
            	'kat_file'  => $this->input->post('kat_file'),
            	'tgl_file'	=> $this->input->post('tgl_file'),
            );

            $this->db->update('tb_file',$simpan,$decode);

            $baris=$this->Mgaleri->pengadaan();

            $data = array(
                    'message'   => 'Data Berhasil Di Ubah',
                    'baris'	=> $baris
            );
            echo json_encode($data);
        }
	}

	public function hapus(){
		$decode['id_file'] = $this->Mcrypt->decrypt($this->input->post('id_file'));
        $query=$this->db->get_where('tb_file',$decode)->result_array();
        foreach($query as $dt){
            $str=explode("/",$dt['url_file']);
            unlink('asset/gambar/foto/'.$str[7]);
        }
		$this->db->delete('tb_file',$decode);
		$galeri=$this->Mgaleri->pengadaan();
		$data= array(
			'message' => 'Data Berhasil di Hapus',
			'baris'	  => $galeri
		);
		echo json_encode($data);
	}
}
