<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class kejari extends CI_Controller {

	function __construct()
    {
         parent::__construct();
             if($this->session->userdata('logged_in')!=TRUE){
                redirect('welcome');
             }
            error_reporting(0);
    }
    public function index(){
        $data=array(
            'data' =>$this->db->get('tb_kejari')->result_array()
        );
        $this->load->view('admin/kejari/data',$data);
    }
    public function tambah(){
             

            $simpan = array(
                'nama_kejari'  => $this->input->post('nama_kejari'),
                'alamat_kejari' => $this->input->post('alamat_kejari'),
                'ketua_kejari'  => $this->input->post('ketua_kejari'),
                'url_kejari'  => $this->input->post('url_kejari'),
            );

            $this->db->insert('tb_kejari',$simpan); 
            $data = array(
                    'message'   => 'Data Berhasil Di Tambahkan',
                    'master'    => $this->Majax->tampil_kejari()
             );
            echo json_encode($data);
    }
    public function ubah(){
             
            $decode['id_kejari'] =  $this->Mcrypt->decrypt($this->input->post('id_kejari'));
            $simpan = array(
                'nama_kejari'  => $this->input->post('nama_kejari'),
                'alamat_kejari' => $this->input->post('alamat_kejari'),
                'ketua_kejari'  => $this->input->post('ketua_kejari'),
                'url_kejari'  => $this->input->post('url_kejari'),
            );

            $this->db->update('tb_kejari',$simpan,$decode); 
            $data = array(
                    'message'   => 'Data Berhasil Di Ubah',
                    'master'    => $this->Majax->tampil_kejari()
             );
            echo json_encode($data);
    }
    public function hapus(){

            $decode['id_kejari'] =  $this->Mcrypt->decrypt($this->input->post('id_kejari'));

            $this->db->delete('tb_kejari',$decode); 
            $data = array(
                    'message'   => 'Data Berhasil Di Hapus',
                    'master'    => $this->Majax->tampil_kejari()
             );
            echo json_encode($data);
    }

}
