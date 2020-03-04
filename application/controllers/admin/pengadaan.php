<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengadaan extends CI_Controller {

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
        $this->db->delete('tb_file',array('ket_file'=>"sementara"));
        $data=array(
            'data' =>$this->db->get_where('tb_berita',array('kat_berita'=>'pengadaan'))->result_array()
        );
        $this->load->view('admin/pengadaan/data',$data);
    }
    public function form($id_berita=null){
        
        $this->form_validation->set_rules('id_berita', 'id_berita', 'required');
        $this->form_validation->set_rules('judul_berita', 'judul_berita', 'required');
        $this->form_validation->set_rules('isi_berita', 'isi_berita','required');
        $this->form_validation->set_rules('tgl_publish', 'tgl_publish', 'required');
        $this->form_validation->set_rules('kat_berita', 'Kategori Berita', 'required');

        if($this->form_validation->run()===false){
            $berita=$this->db->query('select * from tb_berita order by id_berita DESC limit 1')->result_array();
            if(count($berita)==0){
                $id=0;
                $encrypt_id=$this->Mcrypt->encrypt($id);
            }else{
                $id=$berita[0]['id_berita']+1;
                $encrypt_id=$this->Mcrypt->encrypt($id);
            }
            if(!empty($id_berita)){
                $decode= $this->Mcrypt->decrypt($id_berita);
                $berita=$this->db->get_where('tb_berita',array('id_berita'=>$decode))->result_array();
                
                $file=$this->db->get_where('tb_file',array('ket_file'=>$decode))->result_array();
                $encrypt_id=$this->encryption->encrypt($id_berita);
                $data=array(
                    'isi'   =>'admin/pengadaan/form',
                    'id'    =>$encrypt_id,
                    'data'  =>$berita,
                    'foto'  =>$file
                );
            }else{
                $data=array(
                    'isi'   =>'admin/pengadaan/form',
                    'id'    =>$encrypt_id
                );
            }
            $this->db->delete('tb_file',array('ket_file'=>"sementara"));
            $this->load->view('admin/snippet/template',$data);
        }else{
            
            $where = array('id_berita'=>$decode);
            $berita= $this->db->get_where('tb_berita',$where)->result_array();
            if($id_berita == null){
                $decode= $this->Mcrypt->decrypt($this->input->post('id_berita'));
                $data=array(
                    'id_berita'=>$decode,
                    'judul_berita'=>$this->input->post('judul_berita'),
                    'isi_berita'=>$this->input->post('isi_berita'),
                    'tgl_publish'=>$this->input->post('tgl_publish'),
                    'tgl_update'=>$this->input->post('tgl_publish'),
                    'kat_berita'=>$this->input->post('kat_berita'),
                    'cover_berita' => $this->input->post('cover_berita')
                );
                $this->db->insert('tb_berita',$data);
                $this->db->update('tb_file',array('ket_file'=>$decode),array('ket_file'=>"sementara"));
                $this->session->set_flashdata('msg','Data Berhasil Ditambah!!');
                redirect('admin/pengadaan/');
            }else{

                $decode= $this->Mcrypt->decrypt($id_berita);
                $where = array('id_berita'=>$decode);
                $data=array(
                    'judul_berita'=>$this->input->post('judul_berita'),
                    'isi_berita'=>$this->input->post('isi_berita'),
                    'tgl_update'=>$this->input->post('tgl_publish'),
                    'kat_berita'=>$this->input->post('kat_berita'),
                    'cover_berita' => $this->input->post('cover_berita')
                );
                $this->db->update('tb_berita',$data,$where);
                $this->db->update('tb_file',array('ket_file'=>$decode),array('ket_file'=>"sementara"));
                $this->session->set_flashdata('msg','Data Berhasil Diubah!!');
                redirect('admin/pengadaan/');
            }
        }
        
    }
    public function upload(){
        $decode= $this->encryption->decrypt($this->input->post('id_berita'));
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
            $data = array(
                    'message'   => 'Image Uploaded Successfully',
                    'image'         => $basePath,
            );
            $nama=$this->input->post('judul_berita')."_".time();

            $simpan = array(
                'url_file'  => $basePath,
                'nama_file' => $nama,
                'ket_file'  => "sementara",
                'tgl_file'  => date('Y-m-d'),
                'kat_file' =>'pengadaan'
            );

            $this->db->insert('tb_file',$simpan); 
            echo json_encode($data);  
        }else{
            $data = array(
                'error' => "error"
                );

            echo json_encode($data);
        }
    }
    public function hapus(){
        //$decode=$this->Mcrypt->decrypt($this->input->post('id_berita'));
        $decode=$this->Mcrypt->decrypt($this->input->post('id_berita'));
        $this->db->delete('tb_berita',array('id_berita'=>$decode));
        #proses Hapus File
        $where['ket_file']=$decode;
        $where['kat_file']="pengadaan";
        $query=$this->db->get_where('tb_file',$where)->result_array();
        foreach($query as $dt){
            $str=explode("/",$dt['url_file']);
            unlink('asset/gambar/foto/'.$str[7]);
        }
        $this->db->delete('tb_file',$where);
        $this->session->set_flashdata('msg','Data Berhasil Dihapus!!');
        redirect('admin/pengadaan/');
    }

}
