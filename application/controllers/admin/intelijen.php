<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Intelijen extends CI_Controller {

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
        $this->db->join('tb_file','tb_informasi.id_informasi=tb_file.ket_file','left');
        $dt=$this->db->get_where('tb_informasi',array('kat_informasi'=>"intelijen"))->result_array();
        $data=array(
            'data'=>$dt
        );
        $this->load->view('admin/intelijen/data',$data);
	}
    public function form($id_informasi=null){

        $this->form_validation->set_rules('judul_informasi','judul informasi','required');
        $this->form_validation->set_rules('sub_informasi','Sub judul informasi','required');

         $id=$this->Mcrypt->decrypt($id_informasi);

        $where=array(
            'ket_file'=>$id,
            'kat_file' =>'intelijen'
        );

        $dt=$this->db->get_where('tb_informasi',array('id_informasi'=>$id))->result_array();

        if($this->form_validation->run()===false){

            if(count($dt)>0){
                $data=array(
                    'id'=>$this->Mcrypt->encrypt($dt[0]['id_informasi']),
                    'data' =>$dt,
                    'file'=>$this->db->get_where('tb_file',$where)->result_array()
                );
                $this->load->view('admin/intelijen/form',$data);
            }else{
                $data=array(
                    'id'=>''
                );
                $this->load->view('admin/intelijen/form',$data);
            }
        }else{
            if(!empty($this->input->post('id_informasi'))){
                $idf['id_informasi']=$this->Mcrypt->decrypt($this->input->post('id_informasi'));
                $sInformasi=array(
                    'judul_informasi'=>$this->input->post('judul_informasi'),
                    'sub_informasi'=>$this->input->post('sub_informasi'),
                    'kat_informasi'=>'intelijen',
                );
                $this->db->update('tb_informasi',$sInformasi,$idf);
                $this->session->set_flashdata('msg','Data Berhasil Diubah!!');
                $id = $idf['id_informasi'];
            }else{
                $sInformasi=array(
                    'judul_informasi'=>$this->input->post('judul_informasi'),
                    'sub_informasi'=>$this->input->post('sub_informasi'),
                    'kat_informasi'=>'intelijen',
                );
                $this->db->insert('tb_informasi',$sInformasi);
                $this->session->set_flashdata('msg','Data Berhasil Ditambah!!');
                $id = $this->db->insert_id();
            }
                $nmfile="pdf".time();
                $config['upload_path']          = 'asset/file/';
                $config['allowed_types']        = 'pdf';
                $config['max_size']             = 1048576;
                $config['max_width']            = 10240;
                $config['max_height']           = 7680;
                $config['file_name']            = $nmfile;
                $this->load->library('upload', $config);
                $whereFile=array(
                    'ket_file'=>$id,
                    'kat_file' =>'intelijen'
                );
                $check=$this->db->get_where('tb_file',$whereFile)->result_array();
                if($this->upload->do_upload('file')){
                    $basePath=base_url('asset/file/'.$this->upload->file_name);
                    $simpan = array(
                        'url_file'  => $basePath,
                        'nama_file' => $this->input->post('nama_file'),
                        'kat_file'  => "intelijen",
                        'tgl_file'  => date('Y-m-d'),
                        'ket_file'  => $id 
                    );

                    if(count($check)==0){
                        echo "tambah file";
                        $this->db->insert('tb_file',$simpan); 
                    }else{
                        $this->db->update('tb_file',$simpan,$whereFile);
                        echo "upload file";
                    }
                    
                }
                $nama['nama_file']=$this->input->post('nama_file');
                $this->db->update('tb_file',$nama,$whereFile);
                redirect('admin/intelijen');

        }
    }
    public function hapus(){
        //$decode=$this->Mcrypt->decrypt($this->input->post('id_berita'));
        $this->Mcrypt->decrypt($this->input->post('id_informasi'));
        echo $decode=$this->Mcrypt->decrypt($this->input->post('id_informasi'));
        $this->db->delete('tb_informasi',array('id_informasi'=>$decode));
        #proses Hapus File
        $where['ket_file']=$id_berita;
        $where['kat_file']="intelijen";
        $query=$this->db->get_where('tb_file',$where)->result_array();
        foreach($query as $dt){
            $str=explode("/",$dt['url_file']);
            unlink('asset/file/'.$str[7]);
        }
        $this->db->delete('tb_file',$where);
        $this->session->set_flashdata('msg','Data Berhasil Dihapus!!');
        redirect('admin/intelijen/');
    }
}
