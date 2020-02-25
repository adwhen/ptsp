<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peraturan extends CI_Controller {

	function __construct()
    {
         parent::__construct();
             if($this->session->userdata('logged_in')!=TRUE){
                redirect('welcome');
             }
            error_reporting(0);
    }
    public function index(){
    	$this->form_validation->set_rules('id_peraturan', 'id_peraturan');
		$this->form_validation->set_rules('nama_peraturan', 'nama_peraturan', 'required');
		$this->form_validation->set_rules('judul_peraturan', 'judul_peraturan','required');
		$this->form_validation->set_rules('kat_peraturan', 'kat_peraturan', 'required');
        if($this->form_validation->run()===false){
        	$data=array(
        		'data'=>$this->db->get('tb_peraturan')->result_array()
        	);
        	$this->load->view('admin/peraturan/data',$data);
        }else{
        	echo $decrypt['id_peraturan']=$this->encryption->decrypt($this->input->post('id_peraturan'));
        	$check=$this->db->get_where('tb_peraturan',$decrypt)->result_array();
        	if(count($check)==0){
        		$data=array(
        			'nama_peraturan' =>$this->input->post('nama_peraturan'),
        			'judul_peraturan' =>$this->input->post('judul_peraturan'),
        			'kat_peraturan' =>$this->input->post('kat_peraturan'),
        		);
        		$this->db->insert('tb_peraturan',$data);
        	}else{
        		$data=array(
        			'nama_peraturan' =>$this->input->post('nama_peraturan'),
        			'judul_peraturan' =>$this->input->post('judul_peraturan'),
        			'kat_peraturan' =>$this->input->post('kat_peraturan'),
        		);
        		$this->db->update('tb_peraturan',$data,$decrypt);
        	}
        	redirect('admin/peraturan');
        }
    }
    public function ubah($id_peraturan){
    	$decrypt['id_peraturan']=$this->encryption->decrypt($id_peraturan);
    	$data=array(
    		'data'=>$this->db->get_where('tb_peraturan',$decrypt)->result_array()
    	);
    	$this->load->view('admin/peraturan/form_ubah_peraturan',$data);

    }
    public function hapus(){
    	$decrypt['id_peraturan']=$this->encryption->decrypt($this->input->post('id_peraturan'));
    	$this->db->delete('tb_peraturan',$decrypt);
    	redirect('admin/peraturan');
    }
}
