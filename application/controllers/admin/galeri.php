<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri extends CI_Controller {

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
        // $query=$this->db->query('SELECT * from tb_file where  url_file like "%.jpg%" or url_file like "%.png%" or url_file like "%.jpeg%"')->result_array();
        $query=$this->db->query('SELECT * from tb_file where (kat_file="galeri" or kat_file="sarana") AND (url_file like "%.jpg%" or url_file like "%.png%" or url_file like "%.jpeg%")')->result_array();
        $data=array(
			'isi'=>'admin/galeri/data',
			'data' => $query
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
            );

            $this->db->insert('tb_file',$simpan); 
            $data = array(
                    'message'   => 'Data Berhasil Di Tambahkan',
                    'image'         => $basePath,
                    'baris'     =>$this->Mgaleri->ajaxtampil()
            );
            echo json_encode($data);  
        }else{
            $data = array(
                'error' => "error",
                'baris'     =>$this->Mgaleri->ajaxtampil()
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

                            $baris=$this->Mgaleri->datun();

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

                        $baris=$this->Mgaleri->datun();

                        $data = array(
                                'message'   => 'Data Berhasil Di Tambahkan',
                                'image'         => $basePath,
                                'baris'     => $baris
                        );
                        echo json_encode($data);
                    }  
        }else{
        	$decode['id_file'] = $this->Mcrypt->decrypt($this->input->post('id_file'));
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
		$decode['id_file'] = $this->Mcrypt->decrypt($this->input->post('id_file'));
        $query=$this->db->get_where('tb_file',$decode)->result_array();
        foreach($query as $dt){
            $str=explode("/",$dt['url_file']);
            unlink('asset/gambar/foto/'.$str[7]);
        }
		$this->db->delete('tb_file',$decode);
		$galeri=$this->Mgaleri->ajaxtampil();
		$data= array(
			'message' => 'Data Berhasil di Hapus',
			'baris'	  => $galeri
		);
		echo json_encode($data);
	}
}
