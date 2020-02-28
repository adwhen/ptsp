<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Struktural extends CI_Controller {

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
		$this->db->join('tb_file','tb_struktural.id_struktural=tb_file.ket_file','left');   
		$query=$this->db->get('tb_struktural')->result_array();
        $data=array(
			'isi'=>'admin/struktural/data',
			'data' => $query
		);
		$this->load->view('admin/struktural/data',$data);
	}
	public function tambah(){
		$simpanStruktural=array(
			'nama_struktural' => $this->input->post('nama_struktural'),
			'nip_pegawai' => $this->input->post('nip_pegawai'),
			'jabatan_struktural' => $this->input->post('jabatan_struktural'),
		);
		$this->db->insert('tb_struktural',$simpanStruktural);
		$id=$this->db->insert_id();
		$nmfile=$this->input->post('nama_struktural').time();
        $config['upload_path']          = 'asset/gambar/foto/';
        $config['allowed_types']        = 'jpg|jpeg|png';
        $config['max_size']             = 10485760;
        $config['max_width']            = 102400;
        $config['max_height']           = 76800;
        $config['file_name']            = $nmfile;

        $this->load->library('upload', $config);
        if($this->upload->do_upload('file')){
            $basePath=base_url('asset/gambar/foto/'.$this->upload->file_name);


            $simpan = array(
            	'url_file'  => $basePath,
            	'nama_file' => $nmfile,
            	'kat_file'  => 'struktural',
            	'tgl_file'	=> date('Y-m-d'),
            	'ket_file'	=> $id
            );

            $this->db->insert('tb_file',$simpan); 
            $data = array(
                    'message'   => 'Data Berhasil Di Tambahkan',
                    'image'         => $basePath,
                    'baris'     =>$this->Mgaleri->struktural()
            );
            echo json_encode($data);  
        }else{
            $data = array(
                'error' => "error",
                'baris'     =>$this->Mgaleri->struktural()
                );

            echo json_encode($data);
        }
	}
	public function ubah(){
		$id['id_struktural']=$this->Mcrypt->decrypt($this->input->post('id_struktural'));
		$simpanStruktural=array(
			'nama_struktural' => $this->input->post('nama_struktural'),
			'nip_pegawai' => $this->input->post('nip_pegawai'),
			'jabatan_struktural' => $this->input->post('jabatan_struktural'),
		);
		$this->db->update('tb_struktural',$simpanStruktural,$id);
		$nmfile=$this->input->post('nama_struktural').time();
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
                        
                            $check=$this->db->get_where('tb_file',array(
                                'ket_file' =>  $this->Mcrypt->decrypt($this->input->post('id_struktural')),
                                'kat_file' => "struktural"
                            ))->result_array();
                            if(count($check)==0){
                                $basePath=base_url('asset/gambar/foto/'.$this->upload->file_name);
                                $simpan = array(
                                                    'url_file'  => $basePath,
                                                    'nama_file' => $nmfile,
                                                    'kat_file'  => 'struktural',
                                                    'tgl_file'  => date('Y-m-d'),
                                                    'ket_file'  => $this->Mcrypt->decrypt($this->input->post('id_struktural'))
                                );;

                                $this->db->insert('tb_file',$simpan);
                            }else{
                                $basePath=base_url('asset/gambar/foto/'.$this->upload->file_name);
                                    $simpan = array(
                                        'url_file'  => $basePath,
                                        'nama_file' => $nmfile,
                                        'kat_file'  => 'struktural',
                                        'tgl_file'  => date('Y-m-d'),
                                    );
                                    $this->db->update('tb_file',$simpan,$decode);
                            }
                            

                            $baris=$this->Mgaleri->struktural();

                            $data = array(
                                    'message'   => 'Data Berhasil Di Ubah',
                                    'baris' 	=> $baris
                            );
                            echo json_encode($data);
                    }else{
                        $basePath=base_url('asset/gambar/foto/'.$this->upload->file_name);
                        $simpan = array(
						            	'url_file'  => $basePath,
						            	'nama_file' => $nmfile,
						            	'kat_file'  => 'struktural',
						            	'tgl_file'	=> date('Y-m-d'),
						            );;

                        $this->db->insert('tb_file',$simpan);

                        $baris=$this->Mgaleri->struktural();

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
            	'tgl_file'	=> $this->input->post('tgl_file'),
            );

            $this->db->update('tb_file',$simpan,$decode);

            $baris=$this->Mgaleri->struktural();

            $data = array(
                    'message'   => 'Data Berhasil Di Ubah',
                    'baris'	=> $baris
            );
            echo json_encode($data);
        }
	}

	public function hapus(){
		$id['id_struktural']=$this->Mcrypt->decrypt($this->input->post('id_struktural'));
		$this->db->delete('tb_struktural',$id);
		$decode['id_file'] = $this->Mcrypt->decrypt($this->input->post('id_file'));
        $query=$this->db->get_where('tb_file',$decode)->result_array();
        foreach($query as $dt){
            $str=explode("/",$dt['url_file']);
            unlink('asset/gambar/foto/'.$str[7]);
        }
		$this->db->delete('tb_file',$decode);
		$galeri=$this->Mgaleri->struktural();
		$data= array(
			'message' => 'Data Berhasil di Hapus',
			'baris'	  => $galeri
		);
		echo json_encode($data);
	}
}
