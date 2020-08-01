<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {
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
		$this->db->like('url_file','pdf');
		$pdf=$this->db->get('tb_file')->result_array();
		$this->db->not_like('url_file','pdf');
		$galeri=$this->db->get('tb_file')->result_array();
		$survey=$this->db->get('tb_survey')->result_array();
		$data=array(
			'isi'=>'admin/beranda',
			'berita'=> count($this->db->get('tb_berita')->result_array()),
			'pdf'=>count($pdf),
			'galeri' =>count($galeri),
			'survey' =>count($survey),
			'pengumuman' =>$this->db->get('tb_pengumuman')->result_array(),
			'beranda' =>$this->db->get_where('tb_file',array('kat_file'=>"beranda"))->result_array(),
			'popup' => $this->db->get_where('tb_file',array('kat_file' =>"popup"))->result_array()
		);
		$this->load->view('admin/snippet/template',$data);
	}
	public function tambah(){
		$id_p=$this->Mcrypt->decrypt($this->input->post('id_pengumuman'));
		$check=$this->db->get_where('tb_pengumuman',array('id_pengumuman'=>$id_p))->result_array();
		if(count($check)==0){
			$simpan=array(
				'id_pengumuman'=>1,
				'isi_pengumuman' =>$this->input->post('isi_pengumuman')
			);
			$this->db->insert('tb_pengumuman',$simpan);
		}else{
			$simpan=array(
				'isi_pengumuman' =>$this->input->post('isi_pengumuman')
			);
			$this->db->update('tb_pengumuman',$simpan,array('id_pengumuman'=>$id_p));
		}
			$res=$this->db->get('tb_pengumuman')->result_array();
		$data=array(
				'pesan' => "Pengumuman Berhasil Di Ubah!!",
				'hasil' => $res[0]['isi_pengumuman']
			);
		echo json_encode($data);
	}
	public function user(){
		$password = md5($this->input->post('password'));
		$check= $this->db->get_where('tb_user')->result_array();

		$this->db->update('tb_user',array('password'=>$password),array('id'=>$check[0]['id']));
		$this->session->sess_destroy();
		$this->session->set_flashdata('msg', 'Silahkan Masuk Kembali');
		redirect('login');
	}
	public function foto(){
		$nmfile="home_".time();
        $config['upload_path']          = 'asset/gambar/beranda/';
        $config['allowed_types']        = 'jpg|jpeg|png';
        $config['max_size']             = 1048576;
        $config['max_width']            = 10240;
        $config['max_height']           = 7680;
        $config['file_name']            = $nmfile;

        $this->load->library('upload', $config);
        if($this->upload->do_upload('file')){
            $basePath=base_url('asset/gambar/beranda/'.$this->upload->file_name);
         
            $simpan = array(
            	'url_file'  => $basePath,
            	'nama_file' => $this->upload->file_name,
            	'kat_file'	=> "beranda",
            	'tgl_file'	=> date('Y-m-d')
            );

            $this->db->insert('tb_file',$simpan);
            $this->session->set_flashdata('msg', 'Foto Berhasil Ditambahkan');
            redirect('admin/beranda');
        }else{
        	$this->session->set_flashdata('msg', 'Error dalam penambahan Foto');
            redirect('admin/beranda');
        }
	}
	public function hapus_foto(){
		$id=$this->Mcrypt->decrypt($this->uri->segment(4));
		$where['id_file']=$id;
		$query=$this->db->get_where('tb_file',$where)->result_array();
		foreach($query as $dt){
			$str=explode("/",$dt['url_file']);
			unlink('asset/gambar/beranda/'.$str[8]);
		}
		$this->db->delete('tb_file',$where);
		$this->session->set_flashdata('msg', 'Foto Berhasil Dihapus');
		redirect('admin/beranda');
	}
	public function pop_up(){
		$query=$this->db->get_where('tb_file',array('kat_file'=>'popup'))->result_array();
		foreach($query as $dt){
			$str=explode("/",$dt['url_file']);
			unlink('asset/gambar/beranda/'.$str[8]);
		}
		$this->db->delete('tb_file',array('kat_file'=>'popup'));
		$nmfile="home_".time();
        $config['upload_path']          = 'asset/gambar/beranda/';
        $config['allowed_types']        = 'jpg|jpeg|png';
        $config['max_size']             = 1048576;
        $config['max_width']            = 10240;
        $config['max_height']           = 7680;
        $config['file_name']            = $nmfile;

        $this->load->library('upload', $config);
        if($this->upload->do_upload('file')){
            $basePath=base_url('asset/gambar/beranda/'.$this->upload->file_name);
         
            $simpan = array(
            	'url_file'  => $basePath,
            	'nama_file' => $this->upload->file_name,
            	'kat_file'	=> "popup",
            	'ket_file'	=> "activate",
            	'tgl_file'	=> date('Y-m-d')
            );

            $this->db->insert('tb_file',$simpan);
            $this->session->set_flashdata('msg1', 'Pengumuman Pop-Up Berhasil Ditambahkan');
            redirect('admin/beranda');
        }else{
        	$this->session->set_flashdata('msg1', 'Error dalam penambahan Foto');
            redirect('admin/beranda');
        }
	}
	public function active(){
		$query=$this->db->get_where('tb_file',array('kat_file'=>'popup'))->result_array();
		if ($query[0]['ket_file']=='activate') {
			$this->db->update('tb_file',array('ket_file'=>'unactivate'),array('kat_file'=>"popup"));
			$pesan="Pengumuman POPUP telah dimatikan";
		}else{
			$this->db->update('tb_file',array('ket_file'=>'activate'),array('kat_file'=>"popup"));
			$pesan="Pengumuman POPUP telah diaktfikan";
		}
		$this->session->set_flashdata('msg1', $pesan);
		redirect('admin/beranda');
	}
}
